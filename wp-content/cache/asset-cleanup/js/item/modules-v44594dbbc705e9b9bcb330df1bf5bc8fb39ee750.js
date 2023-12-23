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