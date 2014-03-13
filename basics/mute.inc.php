<?php
	if(!isset($_COOKIE['muted'])){
		setcookie('muted', 'notMuted', time()+(100*24*60*60));
	}
	if ($_COOKIE['muted']=='muted'){
?>
		<div id="muteButton"  onClick="toggleMute();"><img src="basics/muted.png" /></div>
<?php
	}
	else{
?>
		<div id="muteButton"  onClick="toggleMute();"><img src="basics/unMuted.png" /></div>
<?php	
	}
?>