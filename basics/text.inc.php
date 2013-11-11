<?php
	if(isset($_GET['section']) && !empty($_GET['section']) && isset($_GET['file']) && !empty($_GET['file'])){
		$fileName = "../" . $_GET['section'] . "/" . $_GET['file'];
		$read = fopen($fileName, "r");
		$string = fread($read, filesize($fileName));
		fclose($read);
		$line_arr = explode("\n", $string);
		$title = $line_arr[0];
		unset($line_arr[0]);
		unset($line_arr[1]);
		$toPrint = implode("<br />", $line_arr);
		echo "<h1>" . $title . "</h1>";
		echo $toPrint;
	}
?>