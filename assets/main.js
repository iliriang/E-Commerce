/*Menu Show */
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
    });
  }
};

showMenu("nav-toggle", "nav-menu");

/*  Remove Menu */

const navLink = document.querySelectorAll(".nav__link"),
  navMenu = document.getElementById("nav-menu");

function linkAction() {
  navMenu.classList.remove("show");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/* Scroll Sections Active Link */

const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", scrollActive);
function scrollActive() {
  const scrollY = window.pageYOffset;
  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  });
}

window.onscroll = () => {
  const nav = document.getElementById("header");
  if (this.scrolly >= 200) nav.classList.add("scroll-header");
  else nav.classList.remove("scroll-header");
};

const sizes = document.querySelectorAll(".size__tallas");

function changeSize() {
  sizes.forEach((size) => size.classList.remove("active"));
  this.classList.add("active");
}

sizes.forEach((size) => size.addEventListener("click", changeSize));




// nav.addEventListener('click', function handleClick(event) {
//   event.target.classList.add('active');
// });


let div= document.getElementsByClassName('cart')[0];
let overlay = document.getElementsByClassName('overlay')[0];

function addClass(){
  div.classList.add('active');
  overlay.classList.add('cart-open');
}

function removeClass(){
  div.classList.remove('active');
  overlay.classList.remove('cart-open');
}




let hid=document.getElementsByClassName('text-content');


let product=document.getElementById('product-1');

var names = [];
localStorage.setItem("names", JSON.stringify(names));





function addToCart(e, i){
  e.preventDefault();

  let product1 = document.getElementsByClassName("sneaker__name")[i];  
  hid[0].className = "text-content hidden";
  localStorage.setItem('productName', product1.innerHTML);

  let cmimi1= document.getElementsByClassName("sneaker__preci")[i];
  localStorage.setItem('productPrice', cmimi1.innerHTML);

  let photo1= document.getElementsByClassName("sneaker__img")[i]
  localStorage.setItem('productPhoto', photo1.getAttribute('src'));

  addClass();
  getProducts();

}

function getProducts(){
  let getProduct1 = localStorage.getItem('productName');
  let product1 = document.getElementsByClassName('product-name')[0];
  product1.innerHTML =  getProduct1


  let getCmimi1=localStorage.getItem('productPrice');
  let cmimi1 = document.getElementsByClassName('product-price')[0];
  cmimi1.innerHTML =  getCmimi1
   
  let getPhoto1=localStorage.getItem('productPhoto');
  let photo1 = document.getElementsByClassName('product-img')[0];
  photo1.src = getPhoto1
}

