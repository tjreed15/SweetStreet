function initializeSmoke(){
	playSound("about/sounds/trainHorn.wav", 0, "about/sounds/trainHorn.wav");
	playSound("about/sounds/crossingBells.wav", 0, "about/sounds/crossingBells.wav");
	addSmoke();
	setTimeout("addSmoke()", 500);
	
	setTimeout("addSmoke()", 2500);
	setTimeout("addSmoke()", 3000);
	
	moveSmoke();
}

function addSmoke(){
	document.getElementById("smokeContainer").innerHTML += "<div class='smoke smokeDrift' style='bottom:0%; right:0%;'><img src='about/smoke.png' /></div> ";
}

function moveSmoke(){
	upSpeed = 0.25;
	leftSpeed = 0.25;
	smokeDrift = document.getElementsByClassName("smokeDrift");
	containerLeft = document.getElementById("smokeContainer").getBoundingClientRect().left;
	for(i=0; i<smokeDrift.length; i++){
		smokeLeft = smokeDrift[i].getBoundingClientRect().left-containerLeft;
		smokeDrift[i].style.left = (smokeLeft-leftSpeed) + "px";
		smokeTop = smokeDrift[i].getBoundingClientRect().top;
		smokeDrift[i].style.top = (smokeTop-upSpeed) + "px";
		if(smokeTop<(0-smokeDrift[i].getBoundingClientRect().height)){
			smokeDrift[i].parentNode.removeChild(smokeDrift[i]);
			addSmoke();
		}
	}
	setTimeout("moveSmoke()", 5);
}

