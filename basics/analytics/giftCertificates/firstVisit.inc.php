<?php
	$totalCounterRead = fopen("basics/analytics/totalCounter.txt", "r");
	$totalHits = fgets($totalCounterRead);
	fclose($totalCounterRead);
	if((!isset($_COOKIE['visited']) || empty($_COOKIE['visited'])) && $totalHits<25){
?>
		<div id="firstVisit">
			<div id="firstVisitWriting"><p>Welcome to the new website!<br />You are one of the first 25 users to see it! We hope you enjoy!</p></div>
			<div id="firstVisitImg"><img src="basics/analytics/giftCertificates/giftCertificate.png" /></div>
			<div id="exitFirstVisit" onClick="exitFirstVisit();"><img src="basics/analytics/giftCertificates/exitButton.png" /></div>
			<div id="claimFirstVisit" onClick="claimPrize('<?php echo md5($totalHits);?>');"><img src="basics/analytics/giftCertificates/claimButton.png" /></div>
		</div>
<?php
	}
?>