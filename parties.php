<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="parties/style.css" />
	
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="parties/script.js"></script>

</head>
<body onLoad="preloadSounds('parties'); download('parties', null, null);">
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="rightOfNav">
			<div id="aboveCart">
				<div id="umberella">
					<div id="pole"><img src="parties/cartPics/slantedPole.png" /></div>
					<div id="overhang"><img src="parties/cartPics/umberella.png" /></div>
					<!--<div id="logo"><img src="parties/cartPics/logoRotatedBent2.png" /></div>-->
				</div>
				<div id="balloonNav">
					<div id="partyFavorsWrapper" class="wrapper">
						<div id="partyFavorsBalloon" class="balloon"><img src="parties/cartPics/orangeBalloon.png" /></div>
						<div id="partyFavorsPoppedBalloon" class="poppedBalloon"><img src="parties/cartPics/poppedBalloon.png" /></div>
						<div id="partyFavorsTitle" class="title"><p>Party Favors</p></div>
					</div>
					<div id="scavengerHuntsWrapper" class="wrapper">
						<div id="scavengerHuntsBalloon" class="balloon"><img src="parties/cartPics/redBalloon.png" /></div>
						<div id="scavengerHuntsPoppedBalloon" class="poppedBalloon"><img src="parties/cartPics/poppedBalloon.png" /></div>
						<div id="scavengerHuntsTitle" class="title"><p>Scavenger Hunts</p></div>
					</div>
					<div id="candyBuffetsWrapper" class="wrapper">
						<div id="candyBuffetsBalloon" class="balloon"><img src="parties/cartPics/yellowBalloon.png" /></div>
						<div id="candyBuffetsPoppedBalloon" class="poppedBalloon"><img src="parties/cartPics/poppedBalloon.png" /></div>
						<div id="candyBuffetsTitle" class="title"><p>Candy Buffets</p></div>
					</div>
					<div id="specialOrdersWrapper" class="wrapper">
						<div id="specialOrdersBalloon" class="balloon"><img src="parties/cartPics/blueBalloon.png" /></div>
						<div id="specialOrdersPoppedBalloon" class="poppedBalloon"><img src="parties/cartPics/poppedBalloon.png" /></div>
						<div id="specialOrdersTitle" class="title"><p>Special Orders</p></div>
					</div>
					<div id="balloonsWrapper" class="wrapper">
						<div id="balloonsBalloon" class="balloon"><img src="parties/cartPics/greenBalloon.png" /></div>
						<div id="balloonsPoppedBalloon" class="poppedBalloon"><img src="parties/cartPics/poppedBalloon.png" /></div>
						<div id="balloonsTitle" class="title"><p>Balloons</p></div>
					</div>
				</div>
				<div id="mouseHandle">
					<div id="partyFavorsMouseHandle" class="mouseHandler" onClick="changeSection('partyFavors');" onMouseOver="inflate('partyFavors', 'orange');" onMouseOut="deflate('partyFavors', 'orange');"></div>
					<div id="scavengerHuntsMouseHandle" class="mouseHandler" onClick="changeSection('scavengerHunts');" onMouseOver="inflate('scavengerHunts', 'red');" onMouseOut="deflate('scavengerHunts', 'red');"></div>
					<div id="candyBuffetsMouseHandle" class="mouseHandler" onClick="changeSection('candyBuffets');" onMouseOver="inflate('candyBuffets', 'yellow');" onMouseOut="deflate('candyBuffets', 'yellow');"></div>
					<div id="specialOrdersMouseHandle" class="mouseHandler" onClick="changeSection('specialOrders');" onMouseOver="inflate('specialOrders', 'blue');" onMouseOut="deflate('specialOrders', 'blue');"></div>
					<div id="balloonsMouseHandle" class="mouseHandler" onClick="changeSection('balloons');" onMouseOver="inflate('balloons', 'green');" onMouseOut="deflate('balloons', 'green');"></div>
				</div>
			</div>
			<div id="cart">
				<div id="logo"><img src="index/logo.png" /></div>
				<div id="textArea">
					<p id="content"></p>
				</div>
			</div>
			<div id="wheelContainer">
				<div id="bigWheel"><img src="parties/cartPics/wheel.png" /></div>
				<div id="smallWheel"><img src="parties/cartPics/wheel.png" /></div>
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