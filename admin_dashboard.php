<?php
	session_start();
	if(isset($_SESSION['user_id'])){
	}
	else{
		header('Location: admin_login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Admin Dashboard</title>
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/stylesheet.css" rel="stylesheet" />
		<style>
			* {box-sizing:border-box}
			.mySlides {display:none}
			/* Slideshow container */
			.slideshow-container {
			 	max-width: 1000px;
			  	position: relative;
			  	margin: auto;
			}
			/* Caption text */
			.text {
			  	color: black;
			  	font-size: 20px;
			  	padding: 8px 12px;
			  	position: absolute;
			  	bottom: -35px;
			  	width: 100%;
			  	text-align: center;
			}
			/* Number text (1/3 etc) */
			.numbertext {
			  	color: lightblue;
			  	font-size: 12px;
			  	padding: 8px 12px;
			  	position: absolute;
			  	top: 0px;
			}
			/* The dots/bullets/indicators */
			.dot {
			 	height: 13px;
			  	width: 13px;
			  	margin: 0 2px;
			  	background-color: #bbb;
			  	border-radius: 50%;
			  	display: inline-block;
			  	bottom: -80px
			  	transition: background-color 0.6s ease;
			}
			.active {
			  	background-color: #717171;
			}
			/* Fading animation */
			.fade {
			  	-webkit-animation-name: fade;
			  	-webkit-animation-duration: 1.5s;
			  	animation-name: fade;
			  	animation-duration: 1.5s;
			}
			@-webkit-keyframes fade {
			  	from {opacity: 0.4}
			  	to {opacity: 1}
			}
			@keyframes fade {
			  	from {opacity: 0.4}
			  	to {opacity: 1}
			}
			img {
			    display: block;
			    margin: 0px auto;
			    border: 1px solid #ddd;
			    border-radius: 4px;
			    padding: 5px;
			    width: 150px;
			}
			img:hover {
			    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
			}
	</style>
	</head>
	<body>
		<!-- This is the header section -->
		<div class="container-fluid" id="header">	 
		<!-- Add logo and heading in this section -->
			<a href="admin_dashboard.php"><img id="logo" src="images/logo.jpg" alt="Logo" /></a>
			<h3>Student Management</h3>		 
		</div>
		<!-- This is the navigation section -->
		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="100">	<!-- navbar-inverse -->
			<!-- Following container-fluid is a block element(match_parent) -->
			<div class="container-fluid">	
				<!-- Adds a logo/name to navbar and hamburger icon-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
						<!-- To collapse the navbar using hamburger icon -->
						<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
					</button>
					<!-- Logo/name -->
					<a class="navbar-brand" href="index.php">SMS</a>	<!-- Logo is always to the left -->
				</div>
				<div class="collapse navbar-collapse" id="navCollapse">
					<!-- Navbar buttons -->
					<ul class="nav navbar-nav">
						<li><a href="admin_dashboard.php" class="active">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
							<ul class="dropdown-menu" style="margin-top: 0px; margin-left: 0px;">
								<li><a href="add_student.php">Insert</a></li>
								<li><a href="update_student.php">Update</a></li>
								<li><a href="delete_student.php">Delete</a></li>
							</ul>
						</li>
					</ul>
					<!-- Glyphicons -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
						<li><a href="admin_logout.php"><span class="glyphicon glyphicon-log-in"></span> Admin Logout
						</a></li>
					</ul>      
				</div>
			</div>  
		</nav>
		<!-- This is the main section -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<!-- main is used to add our own styling -->
					<div class="main" id="firstMain">	
						<h1><b>Welcome Admin <?php echo $_SESSION['user_name'];?></b></h1>
						<div class="slideshow-container">
							<div class="mySlides fade">
								<div class="numbertext">1 / 3</div>
							  	<img src="images/slider1.jpg" style="width: 50%; max-height: 200px;" >
							  	<div class="text">Insert</div>
							</div>
							<div class="mySlides fade">
								<div class="numbertext">2 / 3</div>
								<img src="images/slider2.jpg" style="width: 50%; max-height: 200px;" >
								<div class="text">Delete</div>
							</div>
							<div class="mySlides fade">
								<div class="numbertext">3 / 3</div>
							  	<img src="images/slider3.jpg" style="width: 50%; max-height: 200px;" >
							  	<div class="text">Update</div>
							</div>
						</div>
						<br />
						<div style="text-align: center;">
							<span class="dot"></span>
							<span class="dot"></span>
							<span class="dot"></span>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<!-- This is the footer section -->
		<div id="footer">
			<ul>
				<li><a href="">About SMS</a></li>
				<li><a href="">Help</a></li>
				<li><a href="">Contact Us</a></li>	 
			</ul>
			&copy; 2018 sms.com.  All Rights Reserved.
		</div> 
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/form.js"></script>
		<script>
			var slideIndex = 0;
			showSlides();
			function showSlides() {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    for (i = 0; i < slides.length; i++) {
			       slides[i].style.display = "none";
			    }
			    slideIndex++;
			    if (slideIndex > slides.length) {slideIndex = 1}
			    for (i = 0; i < dots.length; i++) {
			        dots[i].className = dots[i].className.replace(" active", "");
			    }
			    slides[slideIndex-1].style.display = "block";
			    dots[slideIndex-1].className += " active";
			    setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
	</body>
</html>