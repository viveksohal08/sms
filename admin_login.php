<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Admin login</title>
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
						<li><a href="index.php">Home</a></li>
					</ul>
					<!-- Glyphicons -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
						<li><a href="admin_login.php" class="active"><span class="glyphicon glyphicon-log-in">
						</span> Admin Login	</a></li>
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
						<h1><b>Admin Login!</b></h1>
						<p align="center"><b>Please login to insert, update or delete a student.</b></p>
						<p align="center">The fields marked in red are compulsory.</p>
						<div align="center">
							<form id="theLoginForm" action="admin_login.php" method="POST" 
							onsubmit="return validateLoginForm();">
								<p>
									<div class="row">
										<label for="id">Username:&nbsp;</label>
										<input type="text" id="username" name="username"
										placeholder="Enter username" />
										<span class="asterisk"> *</span>
									</div>
									<br />
									<div class="row">
										<label for="id">Password:&nbsp;</label>
										<input type="password" id="pass" name="pass"
										placeholder="Enter password" />
										<span class="asterisk"> *</span>
									</div>
									<br />
									<div class="row">
										<input type="submit" value="Login" name="submit" />
									</div>
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<?php
			include "db_handler.php";
			if(isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['pass'];	
				$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) == 1) {
				    $row = mysqli_fetch_assoc($result);
				    $user_id = $row["id"];
				    session_start();
				    $_SESSION["user_id"] = $user_id;
				    $_SESSION["user_name"] = $username;
				    header("Location: admin_dashboard.php"); 	
				} else {
		?>
			<script>
				alert("Invalid username and password combination.");
			</script>
		<?php
				}
				mysqli_close($conn);
			}
		?>
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
		<script src="js/loginform.js"></script>
	</body>
</html>