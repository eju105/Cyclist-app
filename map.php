<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="initial-scale=1.0">
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
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 75%;
      }
    </style>

    <script src='OSC.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
	<body>
	
	<div class="container">
		
		 <div id="map"></div>
		 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDBvYkcdEmVmb8-l1kE_Q0upC9g7W1J5Y0'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.com/'>embed a google map in website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=0ecdcc22461337ef41073c5bb098f1bca60c9960'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(40.70159098700379,-73.98902740478515),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.70159098700379,-73.98902740478515)});infowindow = new google.maps.InfoWindow({content:'<strong>Park It</strong><br>25 Chapel<br>11237 Brooklyn<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		    
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBvYkcdEmVmb8-l1kE_Q0upC9g7W1J5Y0&callback=initMap"
		    async defer></script>

   </div>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<p><a class="btn btn-primary btn-lg" href="index2.php" role="button">Back</a></p>
    		</div>
    		<div class="col-md-6">
    			<p><a class="btn btn-primary btn-lg" href="video.php" role="button">Log Out and Ride Safely</a></p>
    		</div>
    	</div>
    		
    </div>
    	

    </div>



	<div class="container">
			<div class="row">
			    	<footer class="col-sm-12">
			    		<p class="text-center">&copy; Copyright 2016</p>
		    		</footer>
			</div>
		</div>

		<script src="js/jquery.2.2.4.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>