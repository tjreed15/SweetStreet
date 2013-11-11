<?php
	$nLines = 10;
	for($i=0; $i<$nLines; $i++){
		if($i == $nLines-1) echo '<div id="lastStreetLine" class="streetLine"></div>';
		else echo '<div class="streetLine"></div>';
	}
?>