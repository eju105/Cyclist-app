<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<!--added favicon -->	
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<title> Park It App </title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">

	<style>
		body {
		    background-image: url("images/NYCracks.jpg"), url("images/NYCracks.jpg");
		    
		}
		</style>

</head>
<body>
		<!-- ADD AWESOME THINGS HERE -->
	<div class="container">
		<div class="row">
			<div class="jumbotron" id="jumbotron">
				
			
		 <?php
		 	//echo "Hello World!";
		 if(isset($_SESSION['sessionID'])){
		 	echo "<a id='logoutLink'>log out</a> | Welcome you are logged in";
		 	include("partials/profile.php");
		 }else{
		 	include("partials/registration.php");
		 	include("partials/login.php");

		 

		 }
			
		 ?>
			
			</div>
		</div>

	</div>

	<div class="container">
			<div class="row" id="row">
		    	<div class="jumbotron" id="jumbotron">
				  <h2>Find a Bike Rack!!</h2>
				  <img src="images/pic1.jpg" class="img-rounded" alt="pic1" width="404" height="236">
				  
					<p><a class="btn btn-primary btn-lg" href="map.php" role="button">Log In and Map</a></p>
				</div>	
			</div>
	</div>

	<div class="container">
			<div class="row" id="row">
		    	<div class="jumbotron" id="jumbotron">
				  <h2>Ride Safely and Logout</h2>
				  
					<p><a class="btn btn-primary btn-lg" href="video.php" role="button">LOGOUT</a></p>
				</div>	
			</div>
	</div>

<p><a class="btn btn-primary btn-lg" href="index.php" role="button">Return to LogIn</a></p>
	
	<div class="row">
			    	<footer class="col-sm-12">
			    		<p class="text-center">&copy; Copyright 2016</p>
			    	</footer>
	</div>
	<script src="js/jquery.2.2.4.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>