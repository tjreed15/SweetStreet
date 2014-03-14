function changeCloud(itemName){
	itemLocation = "specials/sections/" + itemName + ".txt";
	//source="specials/pictures/" + itemName + ".png";
	if(itemName == "wackyWednesday"){title="Wacky Wednesday";}
	else if(itemName == "fantasticFriday"){title="FAN-tastic Friday";}
	else if(itemName == "septemberSweetReceipt"){title="September Sweet Receipt";}
	else if(itemName == "manicMonday"){title="Manic Monday";}
	else if(itemName == "terrificTuesday"){title="Terrific Tuesday";}
	else if(itemName == "thirstyThursday"){title="Thirsty Thursday";}
<<<<<<< HEAD
	else if(itemName == "thanksgiving"){title="Thanksgiving Specials";}
	else if(itemName == "caramelPop"){title="Caramel Apple Pop Special";}
	else if(itemName == "weekendWarmUp"){title="Weekend Warm-Ups";}
=======
	
>>>>>>> 122320806a51ddb3289d6b9c06f7e667ef6fb68c
	if(title != document.getElementById("title").firstChild.innerHTML){
		playSound("specials/sounds/hover.wav", 0, itemName+"HoverSound");
		load("cloudWriting", itemLocation);
		document.getElementById("title").firstChild.innerHTML = title;
		//document.getElementById("imageContent").src = source;
	}
}


function load(divName, fileName){
	if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
	else xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(divName).firstChild.innerHTML = xmlhttp.responseText;
			centerVertically(divName);
		}
	}
	xmlhttp.open('GET', fileName, true);
	xmlhttp.send();
}

function centerVertically(divName){
	p = document.getElementById(divName);
	div = document.getElementById(divName).parentNode;
	height = (p.getBoundingClientRect().height/div.getBoundingClientRect().height)*100;
	newTop = 100-height;
	newTop = newTop/2;
	p.style['top'] = newTop + "%";
}