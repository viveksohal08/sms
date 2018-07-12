<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact Us</title>
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/stylesheet.css" rel="stylesheet" />
	</head>
	<body>
		<!-- This is the header section -->
		<div class="container-fluid" id="header">	 
		<!-- Add logo and heading in this section -->
			<a href="index.php"><img id="logo" src="images/logo.jpg" alt="Logo" /></a>
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
						<li><a href="index.php" class="active">Home</a></li>
					</ul>
					<!-- Glyphicons -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
						<li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login
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
						<div align="center">
							<h1>Send E-mail</h1>
							<form id="theContactForm" action="contactform.php" method="POST" onsubmit="return validateContactForm();">
								<p>
									<div class="trow">
										<label for="name">Name:</label>
										<input type="text" id="name" name="name" placeholder="Enter name"><span class="asterisk"> *</span><br> <br>
									</div>
									<div class="trow">
										<label for="email">Email:</label>
										<input type="email" id="email" name="email" placeholder="Enter your E-mail address"><span class="asterisk"> *</span><br> <br>
									</div>
									<div class="trow">
										<label for="phone">Subject:</label>
										<input type="text" id="subject" name="subject" placeholder="Enter subject"><span class="asterisk"> *</span><br> <br>
									</div>
									<div class="trow">
										<label for="address">Message:</label>
										<textarea id="message" rows="5" cols="22" name="message" placeholder="Enter message"></textarea> <span class="asterisk"> *</span><br>
										<br>
									</div>
									<div class="trow">
										<input type="submit" value="Send Mail" name="submit" />
									</div>
								</p>
							</form>
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
		<script src="js/contactform.js"></script>
	</body>
</html>