/*!/wp-content/cache/asset-cleanup/js/item/modules-v44594dbbc705e9b9bcb330df1bf5bc8fb39ee750.js*/
/*!/wp-content/themes/tudespacho/js/modules.js*/
d=document;w=window;c=console;String.prototype.capitalize=function(){return this.charAt(0).toUpperCase()+this.slice(1)}
c.lof=(message,farbe=!1)=>{if(farbe){c.log("%c"+message,"color:"+farbe)}else{c.log(message)}};selectBoxSpace={selectBoxPlanet:[],poblate:()=>{if(d.querySelector('.SelectBox')){var selectBoxes=d.querySelectorAll('.SelectBox');selectBoxes.forEach(selectBox=>{selectBoxSpace.selectBoxPlanet.push(new SelectBox(selectBox))})}},}
class SelectBox{constructor(element){this.element=element;this.list=element.querySelector('.selectBoxList');this.button=element.querySelector('.selectBoxButton');this.className=element.className;this.id=element.id;this.config={attributes:!0,childList:!0,characterData:!0}}
select(a,selectBoxId,current){if(!!a){d.querySelector(selectBoxId).classList.add('alt')}else{d.querySelector(selectBoxId).classList.remove('alt')}
d.querySelector(current).innerHTML=a;d.querySelector(selectBoxId).classList.remove('focus')
d.activeElement.blur()}}
const updateRequired=e=>{if(e.value==''){e.classList.remove('alt')}else{e.classList.add('alt')}}
if(d.querySelectorAll('.mateputInput')){mateput=d.querySelectorAll('.mateputInput');mateput.forEach(e=>{updateRequired(e);e.addEventListener('input',()=>{updateRequired(e)})})}
growUpController={growUps:[],setup:()=>{if(d.querySelectorAll('.GrowUp')){var growUps=d.querySelectorAll('.GrowUp');growUps.forEach(growUp=>{growUpController.growUps.unshift(new GrowUp(growUp))})}},again:()=>{growUpController.growUps.forEach(growUp=>{growUp.again()})}}
class GrowUp{constructor(element){this.element=element;this.className=element.className;this.target=element.dataset.target;this.step=50;this.timeDuration=2500;this.current=parseFloat(element.innerHTML);this.config={attributes:!0,childList:!0,characterData:!0}
this.init()}
init(){this.observer=new MutationObserver((mutations)=>{mutations.forEach((mutation)=>{if(mutation.type==='attributes'){if(mutation.target.className.includes('observed')){console.log(mutation.target.className)
this.grow()}}})});this.observer.observe(this.element,this.config)}
grow(){this.observer.disconnect();this.current=this.current+this.target/this.step;this.element.innerHTML=parseInt(this.current);if(parseFloat(this.element.innerHTML)<this.target){setTimeout(()=>{this.grow()},this.timeDuration/this.step)}else{this.element.innerHTML=this.target}}
again(){this.element.innerHTML=0;this.current=0;setTimeout(()=>{this.grow()},1000)}}
cuantosController={cuantoses:[],setup:()=>{if(d.querySelectorAll('.Cuantos')){var cuantoses=d.querySelectorAll('.Cuantos');cuantoses.forEach(cuantos=>{cuantosController.cuantoses.unshift(new Cuantos(cuantos))})}},}
class Cuantos{constructor(element){this.element=element;this.quantity=parseInt(element.querySelector('.cuantosQantity').value);element.querySelector('.cuantosPlus').onclick=()=>{this.changeQuantity(+1)}
element.querySelector('.cuantosMins').onclick=()=>{this.changeQuantity(-1)}}
changeQuantity(value){this.quantity+=value;if(this.quantity<=1){this.quantity=1}
this.element.querySelector('.cuantosQantity').value=this.quantity}}
obseController={obses:[],setup:()=>{if(d.querySelectorAll('.Obse')){var obses=d.querySelectorAll('.Obse');obses.forEach(obse=>{obseController.obses.unshift(new Obse(obse))})}}}
class Obse{constructor(element){this.j=1;this.id=element.id;this.observe=d.querySelector(element.dataset.observe);this.unobserve=element.dataset.unobserve;this.options={root:null,threshold:1,rootMargin:"0px 0px 0px 0px"};this.observer=new IntersectionObserver(function(entries,observer){entries.forEach(entry=>{if(entry.isIntersecting){element.classList.add('observed')
if(this.unobserve=='true'){observer.unobserve(entry.target)}}else{element.classList.remove('observed')}})},this.options);this.activate()}
activate(){this.observer.observe(this.observe)}}
carouselController={carousels:[],setup:()=>{if(d.querySelectorAll('.Carousel')){var carousels=d.querySelectorAll('.Carousel');carousels.forEach(carousel=>{carouselController.carousels.unshift(new Carousel(carousel))})}}}
class Carousel{constructor(gallery){this.j=1;this.elements=gallery.querySelectorAll('.Element');this.title=gallery.id;if(this.elements.length>1){gallery.querySelector('.NextButton').onclick=()=>{this.plusDivs(+1)}
gallery.querySelector('.PrevButton').onclick=()=>{this.plusDivs(-1)}
this.showDivs(this.j);setTimeout(this.carousel,8000)}}
showDivs(n){if(n>this.elements.length){this.j=1}
if(n<1){this.j=this.elements.length}
for(let i=0;i<this.elements.length;i++){this.elements[i].classList.add("inactive")}
this.elements[this.j-1].classList.remove("inactive")}
carousel(){this.j++;if(this.elements){for(i=0;i<this.elements.length;i++){this.elements[i].classList.add("inactive")}
if(this.j>this.elements.length){this.j=1}
this.elements[this.j-1].classList.remove("inactive");setTimeout(this.carousel,8000)}}
plusDivs(n){this.showDivs(this.j+=n)}}
cardSetupExecuter={cardSetup:()=>{console.log('holaaa')
d.querySelectorAll('[contenedor*="true"]').forEach((item,i)=>{let code=item.dataset.code,size=item.dataset.size,tip1=item.dataset.tip1,tip2=item.dataset.tip2,cond=item.dataset.cond,butn=item.querySelector('.cardAdd');butn.addEventListener('click',()=>{cartController.add({code:code,size:size,qty:item.querySelector('.cuantosQantity').value,tipo_1:tip1,tipo_2:tip2,condicion:cond,})})})}}
const cardSetup=()=>{console.log('holaaa')
d.querySelectorAll('[contenedor*="true"]').forEach((item,i)=>{let code=item.dataset.code,size=item.dataset.size,tip1=item.dataset.tip1,tip2=item.dataset.tip2,cond=item.dataset.cond,butn=item.querySelector('.cardAdd');butn.addEventListener('click',()=>{console.log('holaaa')
cartController.add({code:code,size:size,qty:item.querySelector('.cuantosQantity').value,tipo_1:tip1,tipo_2:tip2,condicion:cond,})})})}
;
/*!/wp-content/cache/asset-cleanup/js/item/main-v342cf2d4ccb1bc263fdf140132dcea799b501cd6.js*/
/* [inline: cdata] */var lt_data = {"ajaxurl":"https:\/\/tudespachoencasa.com\/wp-admin\/admin-ajax.php","homeurl":"https:\/\/tudespachoencasa.com","front_page":"1"};
var captcha = {"site_key":"6LeDcNgaAAAAANgz4Utqc1DSL5yN6OfbqG9EM60E"};
var search = {"query":"{\"post_type\":\"post\",\"posts_per_page\":2,\"cycle\":\"search\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":false,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};/* [/inline: cdata] */
/*!/wp-content/themes/tudespacho/js/custom.js*/
d=document;w=window;c=console;w.onload=()=>{growUpController.setup()
obseController.setup()
carouselController.setup()
d.getElementById("load").style.top="-100vh"}
async function ajax2(formData,url=lt_data.ajaxurl){try{let response=await fetch(url,{method:'POST',body:formData,});return await response.json()}catch(err){console.error(err)}}
async function ajax3(formData,url=lt_data.ajaxurl){try{let response=await fetch(url,{method:'POST',body:formData,});return await response.text()}catch(err){console.error(err)}}
const send_contact_mail=async()=>{if(captcha.site_key){let token=await grecaptcha.execute(captcha.site_key,{action:'submit'});token_input=document.querySelector('.token');token_input.setAttribute('value',token)
document.querySelector('.Formative').submit()}else{document.querySelector('.Formative').submit()}}
const send_comment_xD=async()=>{if(captcha.site_key){let token=await grecaptcha.execute(captcha.site_key,{action:'submit'});token_input=document.querySelector('.token');token_input.setAttribute('value',token)
document.querySelector('#commentform').submit.click()}else{document.querySelector('#commentform').submit.click()}}
const altClassFromSelector=(clase,selector,dont_remove=!1)=>{const elementos=[...d.querySelectorAll(selector)];elementos.forEach(elemento=>{if(dont_remove){elemento.classList.forEach(item=>{if(dont_remove.findIndex(element=>element==item)==-1&&item!=clase){elemento.classList.remove(item)}})}
if(elemento.classList.contains(clase)){if(dont_remove){if(dont_remove.findIndex(element=>element==clase)==-1){elemento.classList.remove(clase)}}else{elemento.classList.remove(clase)}}else{if(clase){elemento.classList.add(clase)}}})}
function goBack(){w.history.back()}
const accordionSelector=(selector)=>{var acc=d.querySelectorAll(selector);acc.forEach((item,i)=>{item.classList.toggle("active");if(item.style.maxHeight!=0){item.style.maxHeight=null}else{item.style.maxHeight=item.scrollHeight+20+"px"}})}
let menu_items=document.querySelectorAll('.menu_item_arrow')
menu_items.forEach((item,i)=>{item.onclick=(e)=>{let accordion=item.parentElement.parentElement.querySelector('.sub_menu')
accordion.parentElement.classList.toggle("active");console.log(accordion.style.maxHeight);if(accordion.style.maxHeight!=0){accordion.style.maxHeight=null}else{accordion.style.maxHeight=accordion.scrollHeight+32+"px"}}});let menu_action=(event)=>{let element=event.target;let viewport_width=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)
if(viewport_width>768){event.preventDefault()
accordionSelector(element.dataset.selector)}else{window.location.replace(element.dataset.href)}}
const activate_paginators=(paginators)=>{paginators.forEach((item,i)=>{item.onclick=(self)=>{let page=self.target.dataset.pagination;let cycle_name=self.target.dataset.cycleContainer;let cycle_container=d.querySelector('[data-cycle='+cycle_name+']');console.log(self.target);fil_pa_sea(cycle_container,!1,page,!1)}})}
const activate_filters=(filters)=>{filters.forEach((item,i)=>{let element=item;let keep_going=!0;let cycle_name='';let cycle_container;i=0;var button=item,parent=button.querySelector('input').dataset.parent,category=button.querySelector('input').dataset.slug,taxonomy=button.querySelector('input').dataset.taxonomy;while(keep_going){cycle_name=element.dataset.cycleContainer;if(cycle_name){cycle_container=d.querySelector('[data-cycle='+cycle_name+']')
keep_going=!1}else if(element==d.querySelector('body')){c.log(item)
c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
keep_going=!1}else{element=element.parentElement}
i++}
item.onchange=(self)=>{let filter={taxonomy:taxonomy,parent:parent,terms:category,}
fil_pa_sea(cycle_container,filter,!1,!1)}})}
const activate_searchers=(searchers)=>{console.log(searchers);searchers.forEach(searcher=>{let element=searcher;let cycle_container;let keep_going=!0;while(keep_going){cycle_name=element.dataset.cycleContainer;if(cycle_name){cycle_container=d.querySelector('[data-cycle='+cycle_name+']')
keep_going=!1}else if(element==d.querySelector('body')){c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
keep_going=!1}else{element=element.parentElement}}
var searchTimeOut;searcher.oninput=()=>{timer=(searcher.dataset.timer)?searcher.dataset.timer:1200;clearTimeout(searchTimeOut);searchTimeOut=setTimeout(()=>{if(searcher.classList.contains('NearchSearcher')){nearch_search(cycle_container,searcher)}else{fil_pa_sea(cycle_container,!1,!1,searcher.value)}},timer)}})}
filterers=[...document.querySelectorAll('[data-cycle-container] .selectBoxOption')]
if(filterers){activate_filters(filterers)}
paginators=[...document.querySelectorAll('.pagination_link')]
if(paginators){activate_paginators(paginators)}
searchers=[...document.querySelectorAll('.Searcher')]
if(searchers){activate_searchers(searchers)}
let nearch_search=async(cycle_container,searcher)=>{if(searcher.value==''){cycle_container.innerHTML='';document.querySelector('.nearch_tags').innerHTML=''}else{fil_pa_sea(cycle_container,!1,!1,searcher.value);let tags=await tp_get_tags(searcher.value)
console.log('tags');document.querySelector('.nearch_tags').innerHTML=tags}}
let tp_get_tags=async(value)=>{var formData=new FormData();formData.append('action','tp_get_tags');formData.append('search',value);let response=await fetch(lt_data.ajaxurl,{method:'POST',body:formData,});return await response.text()}
let nearch_button=()=>{const viewport_width=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)
if(viewport_width>768){accordionSelector('.nearch_unfold')}else{console.log(viewport_width);let papa=document.querySelector('.Nearch_link')
window.location.replace(papa.href)}}
const fil_pa_sea=(cycle_container,filter,page,keyword,posts_per_page=!1)=>{let card=cycle_container.dataset.card;let cycle=cycle_container.dataset.cycle?cycle_container.dataset.cycle:'filters';let query=JSON.parse(window[cycle].query);query.category_name='';query.cat='';let search=location.search.substring(1),params=new URLSearchParams(search),url_no_params=w.location.href.split('?')[0],url_params='',args=params.get(cycle)?JSON.parse(params.get(cycle)):{};if(posts_per_page!=!1){query.posts_per_page=posts_per_page}
query.tax_query={}
query.tax_query.relation='AND';if(!args.tax)args.tax={}
if(filter){if(filter.terms=='0'){delete args.tax[filter.parent]}else{args.tax[filter.parent]={terms:filter.terms,taxonomy:filter.taxonomy,parent:filter.parent,}}}
if(!Object.keys(args.tax).length)delete args.tax;if(!page)page=query.paged?query.paged:1;let current=args.page?args.page:1;if(page=='next'){page=current+1}
if(page=='prev'){page=current-1}
args.page=page;if(page==1)delete args.page;if(keyword)args.search=keyword;if(keyword==='')delete args.search;if(!args.search)delete args.search;if(!!Object.keys(args).length){params.set(cycle,JSON.stringify(args))
url_params='?'+params.toString()}else{url_params=''}
w.history.replaceState('','Title',url_no_params+url_params);if(cycle=='search'&&document.querySelector('.Nearch_link')){let links=[...document.querySelectorAll('.Nearch_link')]
links.forEach((item,i)=>{item.href=lt_data.homeurl+'/search'+url_params})}
query.paged=page;for(var item in args.tax){if(args.tax[item].parent&&args.tax[item].taxonomy&&args.tax[item].terms){query.tax_query[args.tax[item].parent]={'taxonomy':args.tax[item].taxonomy,'field':'slug','terms':args.tax[item].terms,}}}
query.s=keyword;query=JSON.stringify(query)
window[cycle].query=query
var formData=new FormData();formData.append('action','lt_pagination_2');formData.append('query',query);formData.append('card',card);ajax3(formData).then(respuesta=>{cycle_container.innerHTML=respuesta;paginators=[...document.querySelectorAll('.pagination_link')]
if(paginators){activate_paginators(paginators)}})}
function strip(html){let doc=new DOMParser().parseFromString(html,'text/html');return doc.body.textContent||""}
const reading_time=(content)=>{let word_count=strip(content).split(' ').length;let words_per_minute=200;let readingTime=Math.ceil(word_count/words_per_minute)
return readingTime}
;
/*!/wp-includes/js/wp-embed.min.js*/
/*! This file is auto-generated */
!function(c,d){"use strict";var e=!1,n=!1;if(d.querySelector)if(c.addEventListener)e=!0;if(c.wp=c.wp||{},!c.wp.receiveEmbedMessage)if(c.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){for(var r,a,i,s=d.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),n=d.querySelectorAll('blockquote[data-secret="'+t.secret+'"]'),o=0;o<n.length;o++)n[o].style.display="none";for(o=0;o<s.length;o++)if(r=s[o],e.source===r.contentWindow){if(r.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;r.height=i}if("link"===t.message)if(a=d.createElement("a"),i=d.createElement("a"),a.href=r.getAttribute("src"),i.href=t.value,i.host===a.host)if(d.activeElement===r)c.top.location.href=t.value}}},e)c.addEventListener("message",c.wp.receiveEmbedMessage,!1),d.addEventListener("DOMContentLoaded",t,!1),c.addEventListener("load",t,!1);function t(){if(!n){n=!0;for(var e,t,r=-1!==navigator.appVersion.indexOf("MSIE 10"),a=!!navigator.userAgent.match(/Trident.*rv:11\./),i=d.querySelectorAll("iframe.wp-embedded-content"),s=0;s<i.length;s++){if(!(e=i[s]).getAttribute("data-secret"))t=Math.random().toString(36).substr(2,10),e.src+="#?secret="+t,e.setAttribute("data-secret",t);if(r||a)(t=e.cloneNode(!0)).removeAttribute("security"),e.parentNode.replaceChild(t,e)}}}}(window,document);