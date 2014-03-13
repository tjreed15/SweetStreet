<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="contact/style.css" />

	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="contact/script.js"></script>
		
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAKJ5TvlVhzmmioO_beSvxBmhwpdl4H6Q4"></script>
	<script src="https://maps.gstatic.com/intl/en_us/mapfiles/450c/maps2.api/main.js" type="text/javascript"></script>


</head>
<body onLoad="preloadSounds('contact'); download('contact', 'initializeMap', null);">
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="book">
			<div id="bookImage"><img src="contact/book.png" /></div>
			<div id="leftPage">
				<div id="logoContainer"><div id="logo"><img src="index/logo.png" /></div></div>
				<div id="addressBox">
					<p><strong>Adress:</strong></p>
					<address>
						301 Hartz Ave., Suite 109<br />
						Danville, CA 94526
					</address>
					<p><strong>Phone:</strong> 925-837-9338</p>
					<p><strong>Fax:</strong> 925-837-9339</p>
					<p><strong>Email:</strong> didi.reed@sweetstreet.biz</p>
				</div>
				<div id="socialMediaBox">
					<div class="mediaButton"><a href="http://www.facebook.com/SweetStreet1" title="Like us on Facebook!" target="_blank"><img src="contact/facebook.png" /></a></div>
					<div class="mediaButton"><a href="http://www.yelp.com/biz/sweet-street-danville" title="Rate us on Yelp!" target="_blank"><img src="contact/yelp.png" /></a></div>
					<div class="mediaButton"><a href="http://twitter.com/SweetStreetBiz" title="Follow us on Twitter!" target="_blank"><img src="contact/twitter.png" /></a></div>
					<div class="mediaButton"><a href="https://foursquare.com/v/sweet-street/4d58a7a97c0b370476d5e508?ref=atw" title="Check-in on Foursquare!" target="_blank"><img src="contact/foursquare.png" /></a></div>
				</div>
			</div>
			<div id="rightPage">
				<div id="map"><img src="contact/map.png" /></div>
			</div>
		</div>
		<div id="street">
			<div id="streetLineContainer">
				<?php include_once("index/streetLines.php"); ?>
			</div>
			<?php include_once("basics/TJ/TJLogo.inc.php"); ?>
		</div>
	</div>
	<?php include_once("basics/navigation/navigation.inc.php"); ?>
	<?php include_once("basics/mute.inc.php");?>
</body>
</html>