<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="link"><a href="/"><img src="back.png" /></a></div>
	<?php
		if(isset($_GET['num'])){
			echo "<div id='writing'><p>Enjoy a free small gelato on us! All you have to do is print this page and bring it in to claim your prize!</p></div>";
			echo "<div id='image'><img src='images/" . $_GET['num'] . ".png' /></div>";
			echo "<div id='printButton' onClick='window.print();'><img src='printButton.png' /></div>";
		}
		else{
			echo "<p id='errorMessage'>We are sorry. There has been a problem loading your gift certificate. Feel free to contact us or stop by the store and ask what we can do to help!</p>";
		}
	?>
</body>
</html>