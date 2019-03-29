// JavaScript Document
(function(){
	"use strict";
	console.log("fired");

//hamburger menu
var button = document.querySelector("#button");
var burgerMenu = document.querySelector("#burgerMenu");
var closeButton = document.querySelector("#buttonClose");

function hamburgerMenu() {
	burgerMenu.classList.toggle("slideToggle");
	button.classList.toggle("expanded");
	closeButton.classList.toggle("expanded");
}



button.addEventListener("click", hamburgerMenu, false);
		
closeButton.addEventListener("click", hamburgerMenu, false);




	


})();