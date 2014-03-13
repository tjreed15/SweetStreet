//***********************************************************************************************************//
//**********************************	Change Item		*****************************************************//
//***********************************************************************************************************//
function changeItem(itemName){
	playSound("treats/sounds/click.wav", 0, itemName+"ClickSound");
	itemLocation = "treats/sections/" + itemName + ".txt";
	source="treats/pictures/" + itemName + ".png";
	if(itemName == "lunchBoxes"){title="Lunch Boxes";}
	else if(itemName == "toys"){title="Toys";}
	else if(itemName == "games"){title="Games";}
	else if(itemName == "stuffedAnimals"){title="Stuffed Animals";}
	else if(itemName == "pillows"){title="Pillows";}
	else if(itemName == "jewelry"){title="Jewelry";}
	
	load("textContent", itemLocation);
	document.getElementById("title").innerHTML = title;
	document.getElementById("contentI").innerHTML = "<img src='" + source + "' />";
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

		




//***********************************************************************************************************//
//**********************************		Animate		*****************************************************//
//***********************************************************************************************************//
function animate(id){
	document.getElementById(id+"Text").style['color'] = 'cyan';
	document.getElementById(id+"Text").style['text-shadow'] = "-0.1em -0.1em 0 black, 0.1em -0.1em 0 black, -0.1em 0.1em 0 black, 0.1em 0.1em 0 black";
	playSound("treats/sounds/mouseOver.wav", 0, id+"MouseOverSound");
}

function unAnimate(id){
	document.getElementById(id+"Text").style['color'] = 'black';
	document.getElementById(id+"Text").style['text-shadow'] = "-0.1em -0.1em 0 cyan, 0.1em -0.1em 0 cyan, -0.1em 0.1em 0 cyan, 0.1em 0.1em 0 cyan";
}
	
function changeColor(){
	elems = document.getElementsByTagName("p");
	
}



//***********************************************************************************************************//
//**********************************	Move Truck		*****************************************************//
//***********************************************************************************************************//
endPoint = 30;  //left:30%
function moveTruck(){
	playSound("treats/sounds/horn.wav", 0, "treats/sounds/horn.wav");
	var truck = document.getElementById('truckContainer');
	timer = setInterval(function() {
		move(truck);
		if (left > 100) {
			clearInterval(timer);
			resetTruck(truck, 0);
			moveTruckAgain();
		}
	}, 100);
}

function resetTruck(truck, location){
	truck.style.left = (left=location) + '%';
	rotateWheels(5*(left-30));
}

function moveTruckAgain(){
	var truck = document.getElementById('truckContainer');
	timer2 = setInterval(function() {
		move(truck);
		if (left > endPoint) {
			clearInterval(timer2);
			resetTruck(truck, endPoint);
		}
	}, 100);
}


function move(truck){
	left = (truck.getBoundingClientRect().left/document.documentElement["clientWidth"])*100;
	truck.style.left = (left+=1) + "%";
	rotateWheels(5*(left-30));
}



function rotateWheels(degrees){
	var elem_array = document.getElementsByClassName("tire");
	var elem_size = elem_array.length;
	for(var i=0; i<elem_size; i++){
		var elem = elem_array[i];
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
}




//***********************************************************************************************************//
//**********************************	Change Light	*****************************************************//
//***********************************************************************************************************//
redTime = 30000;
yellowTime = 2000;
greenTime = 5000;
opacity = 0.35;

function startLightChange(){
	changeLight('red');
}

function changeLight(color){
	if(color==="red"){
		setOpacity("redLight", 1, 100);
		setOpacity("yellowLight", opacity, opacity*100);
		setOpacity("greenLight", opacity, opacity*100);
		setTimeout("changeLight('green')", redTime);
	}
	else if(color==="yellow"){
		setOpacity("redLight", opacity, opacity*100);
		setOpacity("yellowLight", 1, 100);
		setOpacity("greenLight", opacity, opacity*100);
		setTimeout("changeLight('red')", yellowTime);
	}
	else if(color==="green"){
		setTimeout("moveTruck();", 0);
		setOpacity("redLight", opacity, opacity*100);
		setOpacity("yellowLight", opacity, opacity*100);
		setOpacity("greenLight", 1, 100);
		setTimeout("changeLight('yellow')", greenTime);
	}
}


function setOpacity(id, opacityA, opacityB){
	document.getElementById(id).style.opacity = ''+opacityA;
	document.getElementById(id).filter = 'alpha(opacity=' + opacityB + ')';
}

