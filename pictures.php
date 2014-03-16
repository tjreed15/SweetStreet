<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="pictures/style.css" />
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="pictures/script.js"></script>

</head>
<body onLoad="preloadSounds('pictures'); download('pictures', 'downloadPictures', null);">
	<script type="text/javascript"> checkMobile(); </script>
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="background"><img src="pictures/background.png"></div>
		<div id="billboardTop"><img src="pictures/billboardTop.png" /></div>
		<div id="billboardBase"><img src="pictures/billboardBase.png" /></div>
		<div id="frame">
			<div id="slideshow">
				<img />
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