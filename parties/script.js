function changeSection(sectionName){
	playSound("parties/sounds/balloonPop.wav", 0, sectionName+"PopSound");
	resizeLogo();
	try{
		document.getElementsByClassName("selectedBalloon")[0].className = document.getElementsByClassName("selectedBalloon")[0].className.replace("selectedBalloon", ''); //Remove the selected class
		document.getElementsByClassName("selectedPoppedBalloon")[0].className = document.getElementsByClassName("selectedPoppedBalloon")[0].className.replace("selectedPoppedBalloon", ''); //Remove the selected class
	}
	catch(e){}
	sectionLocation = "parties/sections/" + sectionName + ".txt";
	source = "parties/" + sectionName + ".png";
	if(sectionName == "partyFavors"){title="Party Favors";}
	else if(sectionName == "scavengerHunts"){title="Scavenger Hunts";}
	else if(sectionName == "candyBuffets"){title="Candy Buffets";}
	else if(sectionName == "specialOrders"){title="Special Orders";}
	else if(sectionName == "balloons"){title="Balloons";}
	
	load("content", sectionLocation);
	/*document.getElementById("title").innerHTML = title;*/
	/*document.getElementById("imageContent").src = source;*/
	
	document.getElementById(sectionName + "Balloon").className += " selectedBalloon";
	document.getElementById(sectionName + "PoppedBalloon").className += " selectedPoppedBalloon";
}


function load(divName, fileName){
	if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
	else xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(divName).innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET', fileName, true);
	xmlhttp.send();
}

function resizeLogo(){
	document.getElementById("logo").style['width'] = "45%";
	document.getElementById("logo").style['height'] = "25%";
}


//********************************************************************************************************************//
//*********************************************		Mouse In/Out		**********************************************//
//********************************************************************************************************************//
function inflate(sectionName, color){
	document.getElementById(sectionName + 'Balloon').innerHTML = "<img src='parties/cartPics/"+color+"BalloonBlownUp.png' />";
}

function deflate(sectionName, color){
	document.getElementById(sectionName + 'Balloon').innerHTML = "<img src='parties/cartPics/"+color+"Balloon.png' />";	
}
		