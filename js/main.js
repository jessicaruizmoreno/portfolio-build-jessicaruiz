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


//validation errors for html5  required data form 


var form  = document.getElementsByTagName('form')[0];
var mail = document.getElementById("mail");

var error = mail;
while ((error = error.nextSibling).nodeType != 1);
var mailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

function addEvent(element, event, callback) {
  var previousEventCallBack = element["on"+event];
  element["on"+event] = function (e) {
    var output = callback(e);

    // A callback that returns `false` stops the callback chain
    // and interrupts the execution of the event callback.
    if (output === false) return false;

    if (typeof previousEventCallBack === 'function') {
      output = previousEventCallBack(e);
      if(output === false) return false;
    }
  }
};



addEvent(window, "load", function () {
	var test = mail.value.length === 0 || mailRegExp.test(mail.value);

  mail.className = test ? "valid" : "invalid";
});

// This defines what happens when the user types in the field
addEvent(mail, "input", function () {
  var test = mail.value.length === 0 || mailRegExp.test(mail.value);
  if (test) {
    mail.className = "valid";
    error.innerHTML = "";
    error.className = "error";
  } else {
    mail.className = "invalid";
  }
});

// This defines what happens when the user tries to submit the data
addEvent(form, "submit", function () {
  var test = mail.value.length === 0 || mailRegExp.test(mail.value);

  if (!test) {
    mail.className = "invalid";
    error.innerHTML = "I expect an e-mail, darling!";
    error.className = "error active";

    // Some legacy browsers do not support the event.preventDefault() method
    return false;
  } else {
    mail.className = "valid";
    error.innerHTML = "";
    error.className = "error";
  }
});
	


})();