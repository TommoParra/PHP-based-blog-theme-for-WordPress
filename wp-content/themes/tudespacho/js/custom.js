d=document;w=window;c=console;


w.onload=()=>{

  // Modules setup
	growUpController.setup()
	obseController.setup()
	carouselController.setup()
  d.getElementById("load").style.top="-100vh";
}


async function ajax2(formData, url = lt_data.ajaxurl) {
	try{
		let response = await fetch(url, { method: 'POST', body: formData, });
		return await response.json();
	} catch ( err ) { console.error(err); }
}

async function ajax3(formData, url = lt_data.ajaxurl) {
	try{
		let response = await fetch(url, { method: 'POST', body: formData, });
		return await response.text();
	} catch ( err ) { console.error(err); }
}




const send_contact_mail = async ()=>{
	if (captcha.site_key) {
		let token = await grecaptcha.execute(captcha.site_key, {action: 'submit'});
		token_input = document.querySelector('.token');
		token_input.setAttribute('value', token)
	}
	document.querySelector('.Formative').submit();
}

const send_comment_xD = async ()=>{
	let form = document.querySelector('#commentform')
	// console.log(form.querySelector('#terminos_y_condiciones').checked);
	// console.log(form.querySelector('[name="author"]').value);
	// console.log(form.querySelector('[name="email"]').value);
	// console.log(form.querySelector('[name="comment"]').value);

	// check required
	if (form.querySelector('[name="author"]') && !form.querySelector('[name="author"]').value) {
		notify('Error', 'por favor, introduce un nombre')
		return
	}
	if (form.querySelector('[name="email"]') && !form.querySelector('[name="email"]').value) {
		notify('Error', 'por favor, introduce un email')
		return
	}
	if (!form.querySelector('[name="comment"]').value) {
		notify('Error', 'por favor, escribe un mensaje')
		return
	}
	if (!form.querySelector('#terminos_y_condiciones').checked) {
		notify('Error', 'por favor, acepta los terminos y condiciones')
		return
	}


	if (captcha.site_key) {
		let token = await grecaptcha.execute(captcha.site_key, {action: 'submit'});
		token_input = form.querySelector('.token');
		token_input.setAttribute('value', token)
	}
	// form.querySelector('#terminos_y_condiciones')

	form.querySelector('#commentform').submit.click();
}






/*
=altClassFromSelector

alternates a class from a selector of choice, for example:
<div class="someButton" onclick="altClassFromSelector('activ', '#navBar')"></div>
*/
const altClassFromSelector = ( clase, selector, dont_remove = false )=>{
  const elementos = [...d.querySelectorAll(selector)];
  elementos.forEach(elemento => {
    // const x = d.querySelector(selector);
    // if there is a main class removes all other classes
    if(dont_remove){
      elemento.classList.forEach( item =>{
        if( dont_remove.findIndex( element => element == item) == -1 && item!=clase ){
          elemento.classList.remove(item);
        }
      });
    }

    if(elemento.classList.contains(clase)){
      if(dont_remove){
        if( dont_remove.findIndex( element => element == clase) == -1 ){
          elemento.classList.remove(clase)
        }
      } else {
        elemento.classList.remove(clase)
      }
    }else{
      if(clase){
        elemento.classList.add(clase)
      }
    }
  })
}






const notify = (title, message)=>{
    let sign = d.querySelector('#alert');
    sign.querySelector('.alert_title').innerText = title;
    sign.querySelector('.alert_txt').innerText = message;
    sign.classList.add('visible');
}





// GO BACK BUTTONS
function goBack(){w.history.back()}














// //Accordion //Desplegable
// var acc = d.getElementsByClassName("accordion");
// var i;
//
// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click",()=>{
//     this.classList.toggle("active");
//     // TODO: Hacer que se puede elegir el elemento a acordionar
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//       panel.style.padding = "0";
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//       panel.style.padding = "20px";
//     }
//   });
// }

// ACCORDION SELECTOR CONTROLLER
const accordionSelector = (selector) => {
	var acc = d.querySelectorAll(selector);

	acc.forEach((item, i) => {
		item.classList.toggle("active");
		// var panel = this.nextElementSibling;
		if (item.style.maxHeight!=0) {
			item.style.maxHeight = null;
			// item.style.maxHeight = null;
		} else {
			item.style.maxHeight = item.scrollHeight + 20 + "px";
		}
	});
}
let menu_items = document.querySelectorAll('.menu_item_arrow')
// let menu_items = document.querySelectorAll('.menu-item a:not(.sub_menu_link):not(.sub_menu_post)')
menu_items.forEach((item, i) => {
  // console.log(item);
  item.onclick = (e)=>{
    // console.log(item.parentElement.querySelector('.sub_menu'));
    let accordion = item.parentElement.parentElement.querySelector('.sub_menu')
		// console.log(accordion);
    // e.preventDefault()

		accordion.parentElement.classList.toggle("active");
		console.log(accordion.style.maxHeight);
		// var panel = this.nextElementSibling;
		if (accordion.style.maxHeight!=0) {
			accordion.style.maxHeight = null;
			// accordion.style.maxHeight = null;
		} else {
      // console.log(accordion.scrollHeight);
			accordion.style.maxHeight = accordion.scrollHeight + 32 + "px";
		}
    // accordionSelector()
  }
});



let menu_action = (event)=>{
	let element = event.target;
	let viewport_width = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
	if (viewport_width > 768){
		event.preventDefault()
		accordionSelector(element.dataset.selector)
	} else {
		window.location.replace(element.dataset.href)
	}
}












const activate_paginators = (paginators)=>{
  paginators.forEach((item, i) => {
    item.onclick = (self)=>{
      let page = self.target.dataset.pagination;
      let cycle_name = self.target.dataset.cycleContainer;
      let cycle_container = d.querySelector('[data-cycle='+cycle_name+']');
			console.log(self.target);

      fil_pa_sea(cycle_container, false, page, false)
    }
  });
}
const activate_filters = (filters)=>{
  filters.forEach((item, i) => {
    // c.log(item)
    let element = item;
    let keep_going = true;
    let cycle_name = '';
    let cycle_container;
    i=0;

    var button = item,
        parent = button.querySelector('input').dataset.parent,
        category = button.querySelector('input').dataset.slug,
        taxonomy = button.querySelector('input').dataset.taxonomy;

    while(keep_going){
      cycle_name = element.dataset.cycleContainer;
      if (cycle_name){
        cycle_container = d.querySelector('[data-cycle='+cycle_name+']')
        keep_going = false;
      } else if (element == d.querySelector('body')) {
        c.log(item)
        c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
        keep_going = false;
      } else {
        element = element.parentElement;
      }
      i++;
    }
    item.onchange = (self)=>{
      let filter = {
        taxonomy: taxonomy,
        parent: parent,
        terms: category,
      }
      fil_pa_sea(cycle_container, filter, false, false);
    }
  });
}

const activate_searchers = (searchers) =>{
	console.log(searchers);
  searchers.forEach( searcher => {
    let element = searcher;
    let cycle_container;
    let keep_going = true;


    // busca el nombre del cyclo escrito en algun padre
    while(keep_going){
      cycle_name = element.dataset.cycleContainer;
      if (cycle_name){
        cycle_container = d.querySelector('[data-cycle='+cycle_name+']')
        keep_going = false;
      } else if (element == d.querySelector('body')) {
        c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
        keep_going = false;
      } else {
        element = element.parentElement;
      }
      // i++;
    }

    // c.log(cycle_container);

    var searchTimeOut;
    searcher.oninput = ()=>{
			timer = (searcher.dataset.timer) ? searcher.dataset.timer : 1200;
      clearTimeout(searchTimeOut);
      searchTimeOut = setTimeout(()=>{
				if (searcher.classList.contains('NearchSearcher')) {
					nearch_search(cycle_container, searcher);
				} else {
					fil_pa_sea(cycle_container, false, false, searcher.value);
				}
      }, timer);
    }
  });
}

// This part activates the filters on change
filterers = [...document.querySelectorAll('[data-cycle-container] .selectBoxOption')]
if (filterers){ activate_filters(filterers) }

// This part activates the pagination on click
paginators = [...document.querySelectorAll('.pagination_link')]
if (paginators){ activate_paginators(paginators) }

// This part activates the search on write
searchers = [...document.querySelectorAll('.Searcher')]
if (searchers){ activate_searchers(searchers) }



let nearch_search = async (cycle_container, searcher)=>{
	if (searcher.value == '') {
		cycle_container.innerHTML = '';
		document.querySelector('.nearch_tags').innerHTML = '';
	} else {
		fil_pa_sea(cycle_container, false, false, searcher.value);
		let tags = await tp_get_tags(searcher.value)
		console.log('tags');
		document.querySelector('.nearch_tags').innerHTML = tags;
	}
}
let tp_get_tags = async (value)=>{
  var formData = new FormData();
  formData.append( 'action', 'tp_get_tags' );
  formData.append( 'search', value );
	let response = await fetch(lt_data.ajaxurl, { method: 'POST', body: formData, });
	return await response.text();
}



let nearch_button = ()=>{
	const viewport_width = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)

	if (viewport_width > 768){
		accordionSelector('.nearch_unfold')
	} else {
		console.log(viewport_width);
		let papa = document.querySelector('.Nearch_link')
		window.location.replace(papa.href)
	}
}


// shareButton = d.querySelector('.log_title');
// shareButton.addEventListener('click', async () => {
//   try {
//     await navigator.share({ title: "Example Page", url: "" });
//     console.log("Data was shared successfully");
//   } catch (err) {
//     alert(err.message)
//     // console.error("Share failed:", err.message);
//   }
// });








// console.log(JSON.stringify({page:2,tax:[{taxonomy:'category',parent:'categorias',terms:'test'},]}))
// let test = {
//   tax:{
//     categorias:{taxonomy:'category',parent:'categorias',category:'test'},
//     otro:{pepe:'pepe',},
//   }
// }
// console.log('test',JSON.stringify(test))

// fil_pa_sea stands for "filter pagination search"
const fil_pa_sea = (cycle_container, filter, page, keyword, posts_per_page = false)=>{
  let card  = cycle_container.dataset.card;
  let cycle = cycle_container.dataset.cycle ? cycle_container.dataset.cycle : 'filters';
  // c.log('saved query: ', window[cycle].query);
  let query = JSON.parse(window[cycle].query);
  query.category_name = '';
  query.cat = '';
  // console.log(query)


  // URL HANDLING
  let search = location.search.substring(1),
  params = new URLSearchParams(search),
  url_no_params = w.location.href.split('?')[0],
  url_params = '',
  args = params.get(cycle) ? JSON.parse(params.get(cycle)) : {};
  // c.log('args: ', args)


	// posts_per_page part
	if (posts_per_page != false) {
		query.posts_per_page = posts_per_page;
	}
	// end of posts_per_page part


  // filters part
  // modelo: filters={page:2,tax:[{taxonomy:'category',parent:'categorias',terms:'test'},]}
  query.tax_query = {}
  query.tax_query['relation'] = 'AND';
  // TODO: que pasa si hay varios filtros en un mismo ciclo????
  if(!args.tax) args.tax = {}
  if(filter){
    if( filter.terms == '0' ){
      delete args.tax[filter.parent];
      // delete query.tax_query[filter.parent];
    } else {
      args.tax[filter.parent] = {
        terms:   filter.terms,
        taxonomy:filter.taxonomy,
        parent:  filter.parent,
      }
    }
  }
  if( !Object.keys(args.tax).length ) delete args.tax;
  // end of filters part

  // page part
  if ( !page ) page = query.paged ? query.paged : 1;
  let current = args.page ? args.page : 1;
  if ( page == 'next' ) { page = current + 1; }
  if ( page == 'prev' ) { page = current - 1; }
  args.page = page;
  if (page == 1) delete args.page;
  // end of page part


  // search part
  // c.log('keyword: ', keyword);
  if (keyword) args.search = keyword;
  if (keyword === '') delete args.search;
  if ( !args.search ) delete args.search;
  // end of search part

  if( !!Object.keys(args).length ){
    params.set(cycle, JSON.stringify(args))
    url_params = '?' + params.toString();
  } else {
    url_params = '';
  }
  w.history.replaceState('', 'Title', url_no_params + url_params);

	if (cycle == 'search' && document.querySelector('.Nearch_link')) {
		let links = [...document.querySelectorAll('.Nearch_link')]
		links.forEach((item, i) => {
			item.href = lt_data.homeurl + '/search' + url_params
		});
	}
  // END OF URL HANDLING


  // QUERY HANDLING
  query.paged = page;

  for (var item in args.tax) {
    if(args.tax[item].parent && args.tax[item].taxonomy && args.tax[item].terms){
      query.tax_query[args.tax[item].parent] = {
        'taxonomy' : args.tax[item].taxonomy,
        'field'    : 'slug',
        'terms'    : args.tax[item].terms,
      }
    }
  }

  query.s = keyword;

  query = JSON.stringify(query)
  window[cycle].query = query
  // c.log('query: ', query)
  // END OF QUERY HANDLING



  var formData = new FormData();
  formData.append( 'action', 'lt_pagination_2' );
  formData.append( 'query', query );
  // formData.append( 'page', page );
  formData.append( 'card', card );
  ajax3(formData).then( respuesta => {
    // console.log(respuesta)
    cycle_container.innerHTML = respuesta;

    // This part activates the pagination on click
    paginators = [...document.querySelectorAll('.pagination_link')]
    if (paginators){ activate_paginators(paginators); }
  });
}

// Reading time text parser function
function strip(html){
   let doc = new DOMParser().parseFromString(html, 'text/html');
   return doc.body.textContent || "";
}

const reading_time = (content) => {
  let word_count = strip(content).split(' ').length;
  let words_per_minute = 200;
  let readingTime = Math.ceil(word_count / words_per_minute)
  return readingTime
}
