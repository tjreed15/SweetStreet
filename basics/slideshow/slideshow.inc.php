<?php
	$directory = "../../basics/slideshow/pictures"; //Dont include final slash
	if($handle = opendir($directory .'/')){
		while($file = readdir($handle)){
			if($file!='.' && $file!='..'){
				echo $file . '<br />';
			}	
		}
	}
?>