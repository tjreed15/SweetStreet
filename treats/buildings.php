<?php
	$nBuildings = 3;
	$nWindows = 4;
	for($i=0; $i<$nBuildings; $i++){
		$id = ($i==1)? "leftBuilding": "rightBuilding";
		if($i>0) echo "<div id='" . $id ."' class='building'>";
		else echo "<div class='building'>";
		for($j=0; $j<$nWindows; $j++){
			$windowID = ($j%2==0)? 'window1':'window2';
			echo "<div class='window' id='" . $windowID ."'></div>";
		}
		echo "</div>";
	}
?>