<?php
	$nClouds = 1;
	for($i=0; $i<$nClouds; $i++){
		$top = rand(0, 20);
		$left = rand(0, 100);
?>
		<div id="cloudMotionContainer" style="top:<?php echo $top;?>%;">
			<div class="cloud" style="left:<?php echo $left;?>%;"><img src="index/cloud.png" /></div>
		</div>
<?php	
	}
?>