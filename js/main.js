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
var mail = document.getElementById('mail');
var name = document.getElementById('name');
var subject = document.getElementById('subject');



//error vars in arrays//  
var errorEmail = mail;
while ((errorEmail = errorEmail.nextSibling).nodeType != 1);


var errorName = name;
while ((errorName = errorName.nextSibling).nodeType != 1);


var errorSubject = subject;
while ((errorSubject = errorSubject.nextSibling).nodeType != 1);






//regExp codes//
var mailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var nameRegExp =/^[a-zA-Z\s]+$/;
var subjectRegExp= /^[a-zA-Z\s]+$/;







function addEvent(element, event, callback) {
  var previousEventCallBack = element["on"+event];
  element["on"+event] = function (e) {
    var output = callback(e);
if (output === false) return false;

    if (typeof previousEventCallBack === 'function') {
      output = previousEventCallBack(e);
      if(output === false) return false;
    }
  }
}

addEvent(window, "load", function () {
  var test = mail.value.length === 0 || mailRegExp.test(mail.value);
  mail.className = test ? "valid" : "invalid";

});



addEvent(mail, "input", function () {
  var test = mail.value.length === 0 || mailRegExp.test(mail.value);

  if (test) {
    mail.className = "valid";
    errorEmail.innerHTML = "";
    errorEmail.className = "errorEmail";
  } else {
    mail.className = "invalid";
  }
});



    

addEvent(form, "submit", function () {
 var test = mail.value.length === 0 || mailRegExp.test(mail.value);

  if (!test) {
    mail.className = "invalid";
    errorEmail.innerHTML = "Enter Valid Email Please!";
    errorEmail.className = "errorEmail active";

    
   return false;
  } else {
    
      
    mail.className = "valid";
    errorEmail.innerHTML = "";
    errorEmail.className = "errorEmail";
    
 
  }
  
});




function addEvent2(element, event, callback) {
  var previousEventCallBack = element["on"+event];
  element["on"+event] = function (e) {
    var output = callback(e);
if (output === false) return false;

    if (typeof previousEventCallBack === 'function') {
      output = previousEventCallBack(e);
      if(output === false) return false;
    }
  }
}

addEvent2(window, "load", function () {
var test2 = name.value.length === 0 || nameRegExp.test(name.value);
  name.className = test2 ? "valid" : "invalid";
});


addEvent2(name, "input", function () {
  var test2 = name.value.length === 0 || nameRegExp.test(name.value);
  if (test2) {
    name.className = "valid";
    errorName.innerHTML = "";
    errorName.className = "errorName";
  } else {
    name.className = "invalid";
  }
});




addEvent2(form, "submit", function () {
 var test2 = name.value.length === 0 || nameRegExp.test(name.value);
  if (!test2) {
   
    name.className = "invalid";
    errorName.innerHTML = "Enter Your Full Name Please!";
    errorName.className = "errorName active";
    
   return false;
  } else {
    
      
   name.className = "valid";
    errorName.innerHTML = "";
    errorName.className = "errorName";
 
  }
  
});









function addEvent3(element, event, callback) {
  var previousEventCallBack = element["on"+event];
  element["on"+event] = function (e) {
    var output = callback(e);
if (output === false) return false;

    if (typeof previousEventCallBack === 'function') {
      output = previousEventCallBack(e);
      if(output === false) return false;
    }
  }
}




addEvent3(window, "load", function () {
var test3 = subject.value.length === 0 || subjectRegExp.test(subject.value);
  subject.className = test3 ? "valid" : "invalid";
});



addEvent3(subject, "input", function () {
  var test3 = subject.value.length === 0 || subjectRegExp.test(subject.value);
  if (test3) {
    subject.className = "valid";
    errorSubject.innerHTML = "";
    errorSubject.className = "errorSubject";
  } else {
    subject.className = "invalid";
  }
});



addEvent3(form, "submit", function () {
 var test3 = subject.value.length === 0 || subjectRegExp.test(subject.value);
  if (!test3) {
   
    
    subject.className = "invalid";
    errorSubject.innerHTML = "Please Enter a Subject!";
    errorSubject.className = "errorSubject active";
    
   return false;
  } else {
    
      
   
    subject.className = "valid";
    errorSubject.innerHTML = "";
    errorSubject.className = "errorSubject";
 
  }
  
});



})();
