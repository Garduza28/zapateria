<?php 
   if(isset($_GET['lat'])){
      $latitude=$_GET['lat'];
      $longitude=$_GET['lon']; 
  }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script>
		
		function iniciarMap(){
		    var coord = {lat:<?php echo $latitude ?>,lng:<?php echo $longitude ?>};
		    var map = new google.maps.Map(document.getElementById('map'),{
		      zoom: 10,
		      center: coord
		    });
		    var marker = new google.maps.Marker({
		      position: coord,
		      map: map
		    });
		}
	</script>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
                   <style>
          #map {
	height: 500px;
	width: 100%;
}
          </style>
</body>
</html>