<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="sweets/style.css" />
	
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="sweets/script.js"></script>

</head>
<body onLoad="preloadSounds('sweets'); download('sweets', 'unwrapCandy', null);">
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php"); ?>
	<div id="mainContent">
		<div id="background">
			<img src="sweets/street2.png" />
			<div id="cover"></div>
		</div>
		<div id="loadContent">
			<div id="title"><h1></h1></div>
			<div id="subTitle"><h3></h3></div>
			<div id="sections">
				<div class="section"><p></p></div>
				<div class="section"><p></p></div>
				<div class="section"><p></p></div>
			</div>
			<div id="seeMore"></div>
		</div>
		<div id="menu">
			<?php include_once("sweets/categories.inc.php");?>
		</div>
		<div id="candyWrapper"><img id="candyBarImg" src="sweets/unwrapCandy.gif?<?php echo time();?>" /></div>
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