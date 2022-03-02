<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/3ef9dc3e62.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="icon" type="image/jpg" href="image/school_icon.jpg" style="border-radius: 50%;">
	<link rel="stylesheet" type="text/css" href="login-style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;1,700&family=Oswald:wght@200;300&display=swap" rel="stylesheet">

	<style type="text/css">

		:root{
			--color: #ffe6e6;
		}
		.social-icons img{
		width: 30px;
		margin: 10px;
		cursor: pointer;
		border-radius: 50%;
		display: block;
}
		.forgot-password{
			display: block;
			font-family: 'nunito',sans-serif;
			text-align: center;
			margin-top: 5px;
		}
	 		a{
			text-decoration: none;
			color: black;
		}
		a:hover{
			text-decoration: underline;
		}
		.header img{
			width: 100px;
			height: auto;
			margin: 20px;
			border-radius: 50%;
		}
		.header h1{
			display:inline;
			position: absolute;
			margin-top: 50px;
			font-family: 'nunito',sans-serif;
		}
		.footer{
			background:var(--color);
		}

		.border{
			height: 5px;
			width: 100%;
			background-color: red;
			animation-name: under_name;
			animation-duration: 9s;
			animation-iteration-count: infinite;
			border-radius: 50px;
		}
		@keyframes under_name{
			0%{background: red;}
			25%{background: yellow;}
			50%{background: green;}
			75%{background: blue;}
			100%{background: orange;}
		}
		@media only screen and (max-width:500px){
			.border{
				width: 80%;
			}
			.social-icons img{
				display: inline;
				margin-left: 30px;
			}
			.schoolname {
			font-size: 20px;
			}
		

		}
	</style>
</head>

<body>
	<div class="header">
			<img class="school-icon" src="image/school_icon.jpg">
			<h1 class="schoolname">Mother Conception Academy of Deparo
			<div class="border"></div>
		</h1>
		</div>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log in</button>
				<button type="button" class="toggle-btn" onclick="register()">Details</button>
			</div>
		<form id="login" class="input-group">
			<i id="icons" class="fa-solid fa-user"></i><input type="text" class="input-field"  placeholder="LRN" required>
			
			
			<i  id="icons" class="fa-solid fa-lock" id="icon"></i><input type="text" class="input-field" placeholder="Enter Password" required>
			
				<a class="forgot-password" href="#">Forgot Password?</a>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn">Log In</button>
		</form>
		<form id="register" class="input-group">

			<h3 style="text-align: center;">Mother Conception Academy of Deparo School</h3>
			<p>Students Account provided only from Registrar.</p>
			<p>Outsiders are not Allowed!</p>
			<p>LRN is neccesary</p>
		</div>
		<div class="footer">
			<div class="footer-text">
				<h1>Why enroll at MCAD?</h1>
		
					<p class="slideshow">Study anytime, anywhere. With our online programs, you can study in the comfort of your own house, in the cozy ambience of coffee shops, or really anywhere you want.You even travel around the world while studying</p>
					<p class="slideshow">Reputable Professors. Learn from the best MCAD teachers</p>
					<p class="slideshow">Reasonable tuition Fee.Acquiring a subject doesn’t have to be so expensive anymore.
Previous</p>
				
			</div>
			<div class="social-icons">
			<a href="#"><img src="images/fb.png"></a>
			<a href="#"><img src="images/twitt.png"></a>
			<a href="#"><img src="images/instagram.png"></a>
			<a href="#"><img src="images/linkin.png"></a>
		</div>
			
		</div>
	</div>
<style type="text/css">
	.footer-text h1{
		font-family: 'nunito',sans-serif;
		text-align: center;
	}
	.slideshow{
		display: none;
	}
	p{
		text-align: center;
		margin-top: 10px;
	}
	@media only screen and (min-width:950px){
		.footer{
			padding: 40px;
			margin-top: 50px;
		}
	}
	@media only screen and (max-width:950px){
		.footer{
			margin-top: 50px;
		}
		.social-icons img{
			display: inline;
		}
	}
	
</style>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slideshow");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4500);    
}
</script>


	<script type="text/javascript">
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

	 	function register(){
	 		// body...
	 		x.style.left ="-400px";
	 		y.style.left="50px";
	 		z.style.left="110px"
	 	}
	 	function login(){
	 		// body...
	 		x.style.left ="50px";
	 		y.style.left="450px";
	 		z.style.left="0px"
	 	}
	</script>




</body>
</html>