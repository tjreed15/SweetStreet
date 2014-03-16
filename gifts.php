<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="gifts/style.css" />
	
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="gifts/script.js"></script>

</head>
<body onLoad="preloadSounds('gifts'); download('gifts', null, null);">
	<script type="text/javascript"> checkMobile(); </script>
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="rightOfNav">
			<div id="tree"><img src="gifts/tree.png" /></div>
			<div id="balls">
				<div id="kabobsBallWrapper" class="ballWrapper">
					<div id="kabobsBall" class="ball"></div>
					<p id="kabobsLabel" class="label">Kabobs</p>
				</div>
				<div id="leisBallWrapper" class="ballWrapper" onClick="changeSection('leis');" onMouseOver="animate('leis');" onMouseOut="unAnimate('leis');">
					<div id="leisBall" class="ball"></div>
					<p id="leisLabel" class="label">Leis</p>
				</div>
				<div id="basketsBallWrapper" class="ballWrapper" onClick="changeSection('baskets');"onMouseOver="animate('baskets');" onMouseOut="unAnimate('baskets');">
					<div id="basketsBall" class="ball"></div>
					<p id="basketsLabel" class="label">Baskets</p>
				</div>
				<div id="boxesBallWrapper" class="ballWrapper" onClick="changeSection('boxes');" onMouseOver="animate('boxes');" onMouseOut="unAnimate('boxes');">
					<div id="boxesBall" class="ball"></div>
					<p id="boxesLabel" class="label">Boxes</p>
				</div>
				<div id="bouquetsBallWrapper" class="ballWrapper" onClick="changeSection('bouquets');" onMouseOver="animate('bouquets');" onMouseOut="unAnimate('bouquets');">
					<div id="bouquetsBall" class="ball"></div>
					<p id="bouquetsLabel" class="label">Bouquets</p>
				</div>
				<div id="partyFavorsBallWrapper" class="ballWrapper" onClick="changeSection('partyFavors');" onMouseOver="animate('partyFavors');" onMouseOut="unAnimate('partyFavors');">
					<div id="partyFavorsBall" class="ball"></div>
					<p id="partyFavorsLabel" class="label">Party Favors</p>
				</div>
				<div id="corporateGiftsBallWrapper" class="ballWrapper" onClick="changeSection('corporateGifts');" onMouseOver="animate('corporateGifts');" onMouseOut="unAnimate('corporateGifts');">
					<div id="corporateGiftsBall" class="ball"></div>
					<p id="corporateGiftsLabel" class="label">Corporate Gifts</p>
				</div>
			</div>
			<div id="mouseHandle">
				<div id="kabobsMouseHandler" class="mouseHandler" onClick="changeSection('kabobs');" onMouseOver="animate('kabobs');" onMouseOut="unAnimate('kabobs');"></div>
				<div id="leisMouseHandler" class="mouseHandler" onClick="changeSection('leis');" onMouseOver="animate('leis');" onMouseOut="unAnimate('leis');"></div>
				<div id="basketsMouseHandler" class="mouseHandler" onClick="changeSection('baskets');" onMouseOver="animate('baskets');" onMouseOut="unAnimate('baskets');"></div>
				<div id="boxesMouseHandler" class="mouseHandler" onClick="changeSection('boxes');" onMouseOver="animate('boxes');" onMouseOut="unAnimate('boxes');"></div>
				<div id="bouquetsMouseHandler" class="mouseHandler" onClick="changeSection('bouquets');" onMouseOver="animate('bouquets');" onMouseOut="unAnimate('bouquets');"></div>
				<div id="partyFavorsMouseHandler" class="mouseHandler" onClick="changeSection('partyFavors');" onMouseOver="animate('partyFavors');" onMouseOut="unAnimate('partyFavors');"></div>
				<div id="corporateGiftsMouseHandler" class="mouseHandler" onClick="changeSection('corporateGifts');" onMouseOver="animate('corporateGifts');" onMouseOut="unAnimate('corporateGifts');"></div>
			</div>
			<div id="textArea"><p></p></div>
			<div id="treeSign"><p><?php include_once("gifts/treeSignWriting.txt"); ?></p></div>
			<div id="signPin"><img src="gifts/pin.png" /></div>
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