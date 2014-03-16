<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="specials/style.css" />

	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="specials/script.js"></script>

</head>
<body onLoad="preloadSounds('specials'); download('specials', null, null);">
	<script type="text/javascript"> checkMobile(); </script>
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="cloud">
			<div id="cloudImage"><img src="index/cloud.png" /></div>
			<div id="cloudWriting"><p></p></div>
		</div>
		<div id="school"><img src="specials/school.png"></div>
		<div id="bush1"><img src="specials/bush.png" /></div>
		<div id="bush2"><img src="specials/bush.png" /></div>
		<div id="title"><p></p></div>
		<div id="window1">
			<p id="wackyWednesday" onMouseOver="changeCloud('wackyWednesday');">Wacky Wednesday</p>
			<p id="fantasticFriday" onMouseOver="changeCloud('fantasticFriday');">FAN-tastic Friday</p>
		</div>
		<div id="window2">
			<p id="weekendWarmUp" onMouseOver="changeCloud('weekendWarmUp');">Weekend Warm-Ups</p>
			<p id="septemberSweetReceipt" onMouseOver="changeCloud('septemberSweetReceipt');">September Sweet Receipt</p>
			<p id="manicMonday" onMouseOver="changeCloud('manicMonday');">Manic Monday</p>
			<p id="terrificTuesday" onMouseOver="changeCloud('terrificTuesday');">Terrific Tuesday</p>
			<p id="thirstyThursday" onMouseOver="changeCloud('thirstyThursday');">Thirsty Thursday</p>
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