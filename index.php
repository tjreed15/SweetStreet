<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="basics/basics.css" />
	<link rel="stylesheet" type="text/css" href="basics/navigation/style.css" />
	<link rel="stylesheet" type="text/css" href="index/style.css" />

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<!--<script type="text/javascript" src="basics/pageChange.js"></script>-->
	<script type="text/javascript" src="basics/navigation/script.js"></script>
	<script type="text/javascript" src="basics/script.js"></script>
	<script type="text/javascript" src="index/script.js"></script>

</head>
<body bgcolor="#E6E6FA" onLoad="download('index', 'downloadPictures', null); preloadSounds('index');">
	<script type="text/javascript"> checkMobile(); </script>
	<?php include_once("basics/analytics/counter.inc.php"); ?>
	<?php //include_once("basics/analytics/giftCertificates/firstVisit.inc.php"); ?>
	<?php include_once("basics/loading/loading.php");?>
	<div id="mainContent">
		<div id="topContainer">
			<div id="background">
				<img src="index/background.png" />
				<?php include_once("index/clouds.php");?>
				<script>moveClouds();</script>
			</div>
			<div id="building">
				<div id="overhang">
					<div id="sectionContainer">
						<?php include_once("index/overhang.php"); ?>
					</div>
					<div id="logoContainer">
						<img id="logo" src="index/logo.png" />
					</div>
				</div>
				<div id="addressRow">
					<p id="address">301 Hartz Ave., Suite 109 Danville, CA 94526</p>
				</div>
				<div id="door">
					<div id="doorContents">
						<img src="index/frontRegister.jpg" style="width:101%; height:102%;" />
					</div>
					<div id="doorFrame">
						<div id="doorTop" class="doorElement">
							<div id="doorSign">
								<div id="doorStrings"><img src="index/hangStrings.png" /></div>
								<div id="doorHours"><img src="index/StoreHours.jpg" /></div>
							</div>
						</div>
						<div id="doorBottom" class="doorElement">
							<div id="doorHandle" onclick="clickHandle();"></div>
						</div>
					</div>
				</div>
				<div id="mouseListenerForDoor"  onMouseOver="openDoor();" onMouseOut="closeDoor();"></div>
				<div id="openCloseSign">
					<?php //echo "<img src='index/closed.gif' />";?>
				</div>
				<div id="window">
					<div class="shutter" id="leftShutter"><img src="index/leftShutter.png" /></div>
					<div id="slideshow">
						<img />
					</div>
					<div id="windowWritingContainer">
						<p class="windowWriting">Candy - Gelato - Chocolate - Gifts</p>
					</div>
					<div class="shutter" id="rightShutter"><img src="index/rightShutter.png" /></div>
				</div>
			</div>
		</div>	
		<div id="sidewalk">
			<div id="sidewalkTop">
				<?php include_once("index/sidewalkLines.php"); ?>
			</div>
			<div id="sidewalkFront"></div>
		</div>
		<div id="gumballMachine" onClick="dropGumball();" onMouseOver="addCoin();" onMouseOut="removeCoin();"><img src="index/gumballMachine.png" /></div>
		<div id="street">
			<div id="streetLineContainer">
				<?php include_once("index/streetLines.php"); ?>
			</div>
			<?php include_once("basics/TJ/TJLogo.inc.php"); ?>
		</div>
	</div>
	<script>rotateAnimation("sidewalkLine",45);</script>
	<?php include_once("basics/navigation/navigation.inc.php"); ?>
	<?php include_once("basics/mute.inc.php");?>
</body>
</html>