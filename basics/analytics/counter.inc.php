<?php
	$page = $_SERVER['PHP_SELF'];
	$page = substr(strrchr($page, "/"), 1);
	$page = substr($page, 0, -4);
	if(!isset($_COOKIE[$page . 'Counter'])){
		$pageCounterRead = fopen("basics/analytics/" . $page . "Counter.txt", "r");
		$pageHits = fgets($pageCounterRead);
		fclose($pageCounterRead);

		$pageHits = $pageHits + 1;
	
		$pageCounterWrite = fopen("basics/analytics/" . $page . "Counter.txt", "w");
		fwrite($pageCounterWrite, $pageHits);
		fclose($pageCounterWrite);
	}
	if(!isset($_COOKIE['totalCounter'])){
		$totalCounterRead = fopen("basics/analytics/totalCounter.txt", "r");
		$totalHits = fgets($totalCounterRead);
		fclose($totalCounterRead);

		$totalHits = $totalHits + 1;
	
		$totalCounterWrite = fopen("basics/analytics/totalCounter.txt", "w");
		fwrite($totalCounterWrite, $totalHits);
		fclose($totalCounterWrite);
	}
?>