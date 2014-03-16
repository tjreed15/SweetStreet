<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="about/style.css" />
	
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="about/script.js"></script>

</head>
<body onLoad="preloadSounds('about'); download('about', 'initializeSmoke', null);">
	<script type="text/javascript"> checkMobile(); </script>
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="background">
			<div id="aboveTrain"></div>
			<div id="belowTrainLeft"></div>
			<div id="belowTrainRight"></div>
		</div>
		<div id="smokeContainer"></div>
		<div id="backStreet"><img src="about/street.png" /></div>
		<div id="tracks"><img src="about/tracks.png" /></div>
		<div id="engine"><img src="about/engine.png" /></div>
		<div id="trainCar"><img src="about/trainCar3.png" /></div>
		<div id="title"><h1>About</h1></div>
		<div id="crossingGuard"><img src="about/railroadCrossing.gif" /></div>
		<div id="text">
			<iframe id="textFrame" src="about/writing.inc.php"></iframe>
		</div>
		<div id="engineWindow">
			<div id="engineWindowPicture"><img src="about/didiFace.jpg" /></div>
			<div id="engineWindowCover"></div>
		</div>
		<div id="street">
			<div id="streetLineContainer">
				<!--<?php include_once("index/streetLines.php"); ?>-->
			</div>
			<?php include_once("basics/TJ/TJLogo.inc.php"); ?>
		</div>
	</div>
	<?php include_once("basics/navigation/navigation.inc.php"); ?>
	<?php include_once("basics/mute.inc.php");?>
</body>
</html>