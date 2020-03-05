// JavaScript Document
//hamburger menu
var button = document.querySelector(".menuBtn");
var burgerMenu = document.querySelector("#burgerMenu");
burgerMenu.style.display="none";

function hamburgerMenu() {
  burgerMenu.classList.toggle("slideToggle");
  if (burgerMenu.classList.contains("slideToggle")) {
  burgerMenu.style.display="block";
} else {
  burgerMenu.style.display="none";
}
  button.classList.toggle("expanded");
}



button.addEventListener("click", hamburgerMenu, false);
 