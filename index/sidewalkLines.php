<?php
	$nLines = 6;
	for($i=0; $i<$nLines; $i++){
		if($i == $nLines-1) echo '<div class="sidewalkLine" id="lastSidewalkLine"></div>';
		else echo '<div class="sidewalkLine"></div>';
	}
?>