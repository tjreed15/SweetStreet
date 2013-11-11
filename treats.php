<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="treats/style.css" />

	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="treats/script.js"></script>
	
	
</head>
<body onLoad="preloadSounds('treats'); download('treats', 'startLightChange', null);">
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php"); ?>
	<div id="mainContent">
		<div id="banner">
			<div id="cloudContainer">
				<div id="cloud"><img src="index/cloud.png" /></div>
				<h1 id="title"></h1>
			</div>
		</div>
		<div id="city">
			<div id="cityBackground">
				<div id="background"><img src="treats/buildings.png" /></div>
				<div id="contentP"><p id="textContent"></p></div>
				<div id="contentI"></div>
			</div>
			<div id="cityForeground">
				<div id="truckContainer">
					<img src="treats/truck.png" />
					<div id="stuffedAnimal" class="tire" onMouseOver="animate('stuffedAnimals');" onMouseOut="unAnimate('stuffedAnimals');" onClick="changeItem('stuffedAnimals');">
						<img src="treats/tire.png" />
						<div class="itemBackground"></div>
						<div class="itemWrapper"><p id="stuffedAnimalsText">STUFFED ANIMALS</p></div>
					</div>
					<div id="pillows" class="tire" onMouseOver="animate('pillows');" onMouseOut="unAnimate('pillows');" onClick="changeItem('pillows');">
						<img src="treats/tire.png" />
						<div class="itemBackground"></div>
						<div class="itemWrapper"><p id="pillowsText">PILLOWS</p></div>
					</div>
					<div id="jewelry" class="tire" onMouseOver="animate('jewelry');" onMouseOut="unAnimate('jewelry');" onClick="changeItem('jewelry');">
						<img src="treats/tire.png" />
						<div class="itemBackground"></div>
						<div class="itemWrapper"><p id="jewelryText">JEWELRY</p></div>
					</div>
				</div>
				<div id="streetLight">
					<div id="pole"></div>
					<div id="lightTop">
						<div id="lightContainer">
							<div class="light" id="redLight"></div>
							<div class="light" id="yellowLight"></div>
							<div class="light" id="greenLight"></div>
						</div>
						<div id="labelContainer">
							<div class="label" id="lunchBoxesLabel" onClick="changeItem('lunchBoxes');" onMouseOver="animate('lunchBoxes');" onMouseOut="unAnimate('lunchBoxes');"><p id="lunchBoxesText">LUNCH BOXES</p></div>
							<div class="label" id="toysLabel" onClick="changeItem('toys');" onMouseOver="animate('toys');" onMouseOut="unAnimate('toys');"><p id="toysText">TOYS</p></div>
							<div class="label" id="gamesLabel" onClick="changeItem('games');" onMouseOver="animate('games');" onMouseOut="unAnimate('games');"><p id="gamesText">GAMES</p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="street">
			<div id="streetLineContainer">
				<?php //include_once("index/streetLines.php"); ?>
			</div>
			<?php include_once("basics/TJ/TJLogo.inc.php"); ?>
		</div>
	</div>
	<?php include_once("basics/navigation/navigation.inc.php"); ?>
	<?php include_once("basics/mute.inc.php");?>
</body>
</html>