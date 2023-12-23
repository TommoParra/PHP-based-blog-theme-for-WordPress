d=document;w=window;c=console;w.onload=()=>{growUpController.setup()
obseController.setup()
carouselController.setup()
d.getElementById("load").style.top="-100vh";}
async function ajax2(formData,url=lt_data.ajaxurl){try{let response=await fetch(url,{method:'POST',body:formData,});return await response.json();}catch(err){console.error(err);}}
async function ajax3(formData,url=lt_data.ajaxurl){try{let response=await fetch(url,{method:'POST',body:formData,});return await response.text();}catch(err){console.error(err);}}
const send_contact_mail=async()=>{if(captcha.site_key){let token=await grecaptcha.execute(captcha.site_key,{action:'submit'});token_input=document.querySelector('.token');token_input.setAttribute('value',token)}
document.querySelector('.Formative').submit();}
const send_comment_xD=async()=>{let form=document.querySelector('#commentform')
if(form.querySelector('[name="author"]')&&!form.querySelector('[name="author"]').value){notify('Error','por favor, introduce un nombre')
return}
if(form.querySelector('[name="email"]')&&!form.querySelector('[name="email"]').value){notify('Error','por favor, introduce un email')
return}
if(!form.querySelector('[name="comment"]').value){notify('Error','por favor, escribe un mensaje')
return}
if(!form.querySelector('#terminos_y_condiciones').checked){notify('Error','por favor, acepta los terminos y condiciones')
return}
if(captcha.site_key){let token=await grecaptcha.execute(captcha.site_key,{action:'submit'});token_input=form.querySelector('.token');token_input.setAttribute('value',token)}
form.querySelector('#commentform').submit.click();}
const altClassFromSelector=(clase,selector,dont_remove=false)=>{const elementos=[...d.querySelectorAll(selector)];elementos.forEach(elemento=>{if(dont_remove){elemento.classList.forEach(item=>{if(dont_remove.findIndex(element=>element==item)==-1&&item!=clase){elemento.classList.remove(item);}});}
if(elemento.classList.contains(clase)){if(dont_remove){if(dont_remove.findIndex(element=>element==clase)==-1){elemento.classList.remove(clase)}}else{elemento.classList.remove(clase)}}else{if(clase){elemento.classList.add(clase)}}})}
const notify=(title,message)=>{let sign=d.querySelector('#alert');sign.querySelector('.alert_title').innerText=title;sign.querySelector('.alert_txt').innerText=message;sign.classList.add('visible');}
function goBack(){w.history.back()}
const accordionSelector=(selector)=>{var acc=d.querySelectorAll(selector);acc.forEach((item,i)=>{item.classList.toggle("active");if(item.style.maxHeight!=0){item.style.maxHeight=null;}else{item.style.maxHeight=item.scrollHeight+20+"px";}});}
let menu_items=document.querySelectorAll('.menu_item_arrow')
menu_items.forEach((item,i)=>{item.onclick=(e)=>{let accordion=item.parentElement.parentElement.querySelector('.sub_menu')
accordion.parentElement.classList.toggle("active");console.log(accordion.style.maxHeight);if(accordion.style.maxHeight!=0){accordion.style.maxHeight=null;}else{accordion.style.maxHeight=accordion.scrollHeight+32+"px";}}});let menu_action=(event)=>{let element=event.target;let viewport_width=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)
if(viewport_width>768){event.preventDefault()
accordionSelector(element.dataset.selector)}else{window.location.replace(element.dataset.href)}}
const activate_paginators=(paginators)=>{paginators.forEach((item,i)=>{item.onclick=(self)=>{let page=self.target.dataset.pagination;let cycle_name=self.target.dataset.cycleContainer;let cycle_container=d.querySelector('[data-cycle='+cycle_name+']');console.log(self.target);fil_pa_sea(cycle_container,false,page,false)}});}
const activate_filters=(filters)=>{filters.forEach((item,i)=>{let element=item;let keep_going=true;let cycle_name='';let cycle_container;i=0;var button=item,parent=button.querySelector('input').dataset.parent,category=button.querySelector('input').dataset.slug,taxonomy=button.querySelector('input').dataset.taxonomy;while(keep_going){cycle_name=element.dataset.cycleContainer;if(cycle_name){cycle_container=d.querySelector('[data-cycle='+cycle_name+']')
keep_going=false;}else if(element==d.querySelector('body')){c.log(item)
c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
keep_going=false;}else{element=element.parentElement;}
i++;}
item.onchange=(self)=>{let filter={taxonomy:taxonomy,parent:parent,terms:category,}
fil_pa_sea(cycle_container,filter,false,false);}});}
const activate_searchers=(searchers)=>{console.log(searchers);searchers.forEach(searcher=>{let element=searcher;let cycle_container;let keep_going=true;while(keep_going){cycle_name=element.dataset.cycleContainer;if(cycle_name){cycle_container=d.querySelector('[data-cycle='+cycle_name+']')
keep_going=false;}else if(element==d.querySelector('body')){c.log('has configurado mal el filtro, debes poner \'data-cycle-container="name"\'')
keep_going=false;}else{element=element.parentElement;}}
var searchTimeOut;searcher.oninput=()=>{timer=(searcher.dataset.timer)?searcher.dataset.timer:1200;clearTimeout(searchTimeOut);searchTimeOut=setTimeout(()=>{if(searcher.classList.contains('NearchSearcher')){nearch_search(cycle_container,searcher);}else{fil_pa_sea(cycle_container,false,false,searcher.value);}},timer);}});}
filterers=[...document.querySelectorAll('[data-cycle-container] .selectBoxOption')]
if(filterers){activate_filters(filterers)}
paginators=[...document.querySelectorAll('.pagination_link')]
if(paginators){activate_paginators(paginators)}
searchers=[...document.querySelectorAll('.Searcher')]
if(searchers){activate_searchers(searchers)}
let nearch_search=async(cycle_container,searcher)=>{if(searcher.value==''){cycle_container.innerHTML='';document.querySelector('.nearch_tags').innerHTML='';}else{fil_pa_sea(cycle_container,false,false,searcher.value);let tags=await tp_get_tags(searcher.value)
console.log('tags');document.querySelector('.nearch_tags').innerHTML=tags;}}
let tp_get_tags=async(value)=>{var formData=new FormData();formData.append('action','tp_get_tags');formData.append('search',value);let response=await fetch(lt_data.ajaxurl,{method:'POST',body:formData,});return await response.text();}
let nearch_button=()=>{const viewport_width=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)
if(viewport_width>768){accordionSelector('.nearch_unfold')}else{console.log(viewport_width);let papa=document.querySelector('.Nearch_link')
window.location.replace(papa.href)}}
const fil_pa_sea=(cycle_container,filter,page,keyword,posts_per_page=false)=>{let card=cycle_container.dataset.card;let cycle=cycle_container.dataset.cycle?cycle_container.dataset.cycle:'filters';let query=JSON.parse(window[cycle].query);query.category_name='';query.cat='';let search=location.search.substring(1),params=new URLSearchParams(search),url_no_params=w.location.href.split('?')[0],url_params='',args=params.get(cycle)?JSON.parse(params.get(cycle)):{};if(posts_per_page!=false){query.posts_per_page=posts_per_page;}
query.tax_query={}
query.tax_query['relation']='AND';if(!args.tax)args.tax={}
if(filter){if(filter.terms=='0'){delete args.tax[filter.parent];}else{args.tax[filter.parent]={terms:filter.terms,taxonomy:filter.taxonomy,parent:filter.parent,}}}
if(!Object.keys(args.tax).length)delete args.tax;if(!page)page=query.paged?query.paged:1;let current=args.page?args.page:1;if(page=='next'){page=current+1;}
if(page=='prev'){page=current-1;}
args.page=page;if(page==1)delete args.page;if(keyword)args.search=keyword;if(keyword==='')delete args.search;if(!args.search)delete args.search;if(!!Object.keys(args).length){params.set(cycle,JSON.stringify(args))
url_params='?'+params.toString();}else{url_params='';}
w.history.replaceState('','Title',url_no_params+url_params);if(cycle=='search'&&document.querySelector('.Nearch_link')){let links=[...document.querySelectorAll('.Nearch_link')]
links.forEach((item,i)=>{item.href=lt_data.homeurl+'/search'+url_params});}
query.paged=page;for(var item in args.tax){if(args.tax[item].parent&&args.tax[item].taxonomy&&args.tax[item].terms){query.tax_query[args.tax[item].parent]={'taxonomy':args.tax[item].taxonomy,'field':'slug','terms':args.tax[item].terms,}}}
query.s=keyword;query=JSON.stringify(query)
window[cycle].query=query
var formData=new FormData();formData.append('action','lt_pagination_2');formData.append('query',query);formData.append('card',card);ajax3(formData).then(respuesta=>{cycle_container.innerHTML=respuesta;paginators=[...document.querySelectorAll('.pagination_link')]
if(paginators){activate_paginators(paginators);}});}
function strip(html){let doc=new DOMParser().parseFromString(html,'text/html');return doc.body.textContent||"";}
const reading_time=(content)=>{let word_count=strip(content).split(' ').length;let words_per_minute=200;let readingTime=Math.ceil(word_count/words_per_minute)
return readingTime}
;/*! This file is auto-generated */
!function(c,d){"use strict";var e=!1,n=!1;if(d.querySelector)if(c.addEventListener)e=!0;if(c.wp=c.wp||{},!c.wp.receiveEmbedMessage)if(c.wp.receiveEmbedMessage=function(e){var t=e.data;if(t)if(t.secret||t.message||t.value)if(!/[^a-zA-Z0-9]/.test(t.secret)){for(var r,a,i,s=d.querySelectorAll('iframe[data-secret="'+t.secret+'"]'),n=d.querySelectorAll('blockquote[data-secret="'+t.secret+'"]'),o=0;o<n.length;o++)n[o].style.display="none";for(o=0;o<s.length;o++)if(r=s[o],e.source===r.contentWindow){if(r.removeAttribute("style"),"height"===t.message){if(1e3<(i=parseInt(t.value,10)))i=1e3;else if(~~i<200)i=200;r.height=i}if("link"===t.message)if(a=d.createElement("a"),i=d.createElement("a"),a.href=r.getAttribute("src"),i.href=t.value,i.host===a.host)if(d.activeElement===r)c.top.location.href=t.value}}},e)c.addEventListener("message",c.wp.receiveEmbedMessage,!1),d.addEventListener("DOMContentLoaded",t,!1),c.addEventListener("load",t,!1);function t(){if(!n){n=!0;for(var e,t,r=-1!==navigator.appVersion.indexOf("MSIE 10"),a=!!navigator.userAgent.match(/Trident.*rv:11\./),i=d.querySelectorAll("iframe.wp-embedded-content"),s=0;s<i.length;s++){if(!(e=i[s]).getAttribute("data-secret"))t=Math.random().toString(36).substr(2,10),e.src+="#?secret="+t,e.setAttribute("data-secret",t);if(r||a)(t=e.cloneNode(!0)).removeAttribute("security"),e.parentNode.replaceChild(t,e)}}}}(window,document);