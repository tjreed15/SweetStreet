function changeSection(sectionName){
	playSound("gifts/sounds/click.wav", 0, sectionName+"ClickSound");
	sectionLocation = "gifts/sections/" + sectionName + ".txt";
	source="gifts/pictures/" + sectionName + ".png";
	if(sectionName == "kabobs"){title="Kabobs";}
	else if(sectionName == "leis"){title="Leis";}
	else if(sectionName == "baskets"){title="Baskets";}
	else if(sectionName == "boxes"){title="Boxes";}
	else if(sectionName == "bouquets"){title="Bouquets";}
	else if(sectionName == "partyFavors"){title="Party Favors";}
	else if(sectionName == "corporateGifts"){title="Corporate Gifts";}
	
	load("textArea", sectionLocation);
	//document.getElementById("title").innerHTML = title;
	//document.getElementById("imageContent").src = source;
}


function load(divName, fileName){
	if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
	else xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(divName).firstChild.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET', fileName, true);
	xmlhttp.send();
}

var rotating = {};
function animate(id){
	rotating[id] = true;
	setTimeout("rotate('"+id+"', 10)", 0);
	playSound("gifts/sounds/mouseOver.wav", 0, id+"MouseOverSound");
}

function rotate(id, degrees){
	if(!rotating[id]) return;
	var elem = document.getElementById(id+"BallWrapper");
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+degrees+"deg)";
	} else {
		elem.style.transform = "rotate("+degrees+"deg)";
	}
	degrees+=10;
	setTimeout("rotate('"+id+"', "+degrees+")", 10);
}


function unAnimate(id){
	rotating[id] = false;
	degrees = 0;
	var elem = document.getElementById(id+"BallWrapper");
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+degrees+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+degrees+"deg)";
	} else {
		elem.style.transform = "rotate("+degrees+"deg)";
	}
}

		