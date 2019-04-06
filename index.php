<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Jessica Ruiz - Web Designer & Developer based in London, Ontario</title>
	<meta name="description" content="Hiring? Don't look any further. I am here and ready to find my dream job in web design or front-end development. Based in London, Ontario. Check out my work.">

<script name="mail error handling">
    
    document.addEventListener('DOMContentLoaded', function () { 
        
    document.getElementById("contact_form").onsubmit = function () {
    var nameInput = document.forms["contact_form"]["name"].value;
    var subjectInput = document.forms["contact_form"]["subject"].value;
    var emailInput = document.forms["contact_form"]["email"].value;
    var messageInput = document.forms["contact_form"]["message"].value;



    var submit = true;




    if (nameInput == null || nameInput == "") {
        nameError = "Please enter your name";
        var popUp = document.querySelector('#name_error');
        popUp.style.backgroundColor = '#ff0000';
        document.getElementById("name_error").innerHTML = nameError;
        submit = false;
        
    
    }

 	if (subjectInput == null || subjectInput == "" ) {
        subjectError = "Please enter a subject";
        var popUp = document.querySelector('#subject_error');
        popUp.style.backgroundColor = '#ff0000';
        document.getElementById("subject_error").innerHTML = subjectError;
        submit = false;
    }


    if (emailInput == null || emailInput == ""  ) {
        emailError = "Please enter your email";
        var popUp = document.querySelector('#email_error');
        popUp.style.backgroundColor = '#ff0000';
        document.getElementById("email_error").innerHTML = emailError;
        submit = false;
    }


    if (messageInput == null || messageInput == "") {
        messageError = "Please enter a message";
        var popUp = document.querySelector('#message_error');
        popUp.style.backgroundColor = '#ff0000';
        document.getElementById("message_error").innerHTML = messageError;
        submit = false;
    }
  

    return submit;
}

function removeErrorPop() {
document.getElementById(this.id + "_error").style.display = 'none';

}

document.getElementById("name").onkeyup = removeErrorPop;
document.getElementById("subject").onkeyup = removeErrorPop;
document.getElementById("email").onkeyup = removeErrorPop;
document.getElementById("message").onkeyup = removeErrorPop;

    
 
    });       
 </script>



<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen, projection">


</head>


<body>


<div class="top-container">

<!--Logo-->
<figure id="logo">
</figure>

<!--Navigation-->
<nav class="main-nav">




<button id="button">
	<span class="hidden">Toggle</span>
</button>

<ul id="burgerMenu">


<button id="buttonClose">
	<span class="hidden">Toggle</span>
	
</button>


	<li>
		<a href="#">About me</a>
	</li>

		<li>
		<a href="#">Work</a>
	</li>
	<li>
		<a href="#">Get in touch</a>
	</li>


</ul>
</nav>
<!--Top-container Ends--->
</div>



<!--Hero Banner--->
	<header id="banner" class="grid">
		<div class="bg-image"></div>
		<div class="container-text">
				<h1> Hello, I'm Jessica</h1>
				<h2> Are you hiring? Don't look any further!</h2>
			
	
						<p> I have a strong passion for anything web related. Development and Design is my true dream job!</p>
					
						<a href="file:///Users/jessicaruiz/Desktop/Portfolio%20NEW/portfolio-build-jessicaruiz/assets/ruiz_resume2018.pdf" class="btn-hero">Resume</a>
						</div>




		<!--Social Media Icons-->
		
	<div class="social-links">
		<div id="github">github</div>
		<div id="twitter">twitter</div>
		<div id="instagram">instagram</div>
	</div>


	</header>


<!--Main Wrapper--->
<main id="main-wrapper">	

<!---About Me-->
<section id="aboutMe">
<div class="container-text">	
	<h1>About me</h1>
			<p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue.
			</p>
			
			<p>
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urnamollis ornare vel eu leo.
			</p>
			</div>	
</section>

<!--Portfolio-->
<section id="portfolio" class="grid">

		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
	


		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
		<div class="box">
			<!---img-->
			<img src="./assets/images/hero.jpg" alt="">
				<!--Hover state-->
				<div class="hover-state">
					<h3 class="box-title">
					Venenatis Mollis Dapibus
					</h3>
					<a href="#" class="btn-main"> View Project</a>	
				</div>
			</div>
	
</section>


<!---Contact-->

<section id="contact" class="grid">

<div class="box">
	<div class="container-text">
	<h1> Get in touch</h1>
		<p>Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Etiam porta sem malesuada magna mollis euismod.</p>
	</div>
</div>

<form method="post" action="process-mailer.php" name="contact_form" id="contact_form">
    <input type="text" id="name" name="name" aria-describedby="name-format" placeholder="Full Name"> <span class="error"><p id="name_error"></p></span>
    <input type="text" id="subject" name="subject" placeholder="Subject"> <span class="error"><p id="subject_error"></p></span>
    
    <input type="email" id="email" name="email" placeholder="Email"> <span class="error"><p id="email_error"></p></span>

    <input type="textarea" id="message" name="message" placeholder="Message"> <span class="error"><p  id="message_error"></p></span>

    <button id="submit" type="submit" name="submit" >Submit</button>
</form>


</section>	


<footer id="main-footer">
	

<div class="social-links2">
	<ul>
		<li>twiitter
		</li>

		<li>github
		</li>

		<li>instagram
		</li>

	</ul>
</div>
<div>Jessica Ruiz &copy;2018</div>

</footer>


</main>
<!--Main Wrapper Ends-->
<script src="./js/main.js"></script>
</body>
</html>


