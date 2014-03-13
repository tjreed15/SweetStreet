<div id="navigation" onLoad="preloadAllSounds();">
	<div id="pole"><img src="basics/navigation/candyPole.jpg" /></div>
	<div id="signContainer">
		<div class="signWrapper">
			<div id="index" class="sign" title="Home Page" onMouseOver="spin('index');">
				<a href="index.php">Home</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="sweets" class="sign" title="Delicious Edible Sweets" onMouseOver="spin('sweets');">
				<a href="sweets.php">Sweets</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="treats" class="sign" title="Fun Toys and Treats" onMouseOver="spin('treats');">
				<a href="treats.php">Treats</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="gifts" class="sign" title="Gifts For Your Friends and Family" onMouseOver="spin('gifts');">
				<a href="gifts.php">Gifts</a>
			</div>
		</div>	
		<div class="signWrapper">
			<div id="parties" class="sign" title="Throw a Fun Party" onMouseOver="spin('parties');">
				<a href="parties.php">Parties</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="specials" class="sign" title="Weekly and Monthly Specials" onMouseOver="spin('specials');">
				<a href="specials.php">Specials</a>
			</div>
		</div>	
		<div class="signWrapper">
			<div id="pictures" class="sign" title="Pictures" onMouseOver="spin('pictures');">
				<a href="pictures.php">Pictures</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="about" class="sign" title="About Sweet Street" onMouseOver="spin('about');">
				<a href="about.php">About</a>
			</div>
		</div>
		<div class="signWrapper">
			<div id="contact" class="sign" title="Contact Us" onMouseOver="spin('contact');">
				<a href="contact.php">Contact</a>
			</div>
		</div>
	</div>
	<div id="sound"></div>
	<?php 
		$file = basename($_SERVER['PHP_SELF']);
		$file = substr($file, 0, strlen($file)-4);
	?>
	<script>selectNavigation("<?php echo $file;?>");</script>
</div>
