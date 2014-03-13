//***************************************************************************************************************//
//********************************	Door Functions		*********************************************************//
//***************************************************************************************************************//
function clickHandle(){
	//window.location.href="/PHP/loggingin/";
}

function openDoor(){
	document.getElementById("doorTop").style['visibility'] = "hidden";
	playSound("index/sounds/doorOpen.wav", 0, "index/sounds/doorOpen.wav");
}

function closeDoor(){
	document.getElementById("doorTop").style['visibility'] = "visible";
	playSound("index/sounds/doorClose.wav", 0, "index/sounds/doorClose.wav");
}


//***************************************************************************************************************//
//********************************	Gumball Machine		*********************************************************//
//***************************************************************************************************************//
function dropGumball(){
	document.getElementById("gumballMachine").innerHTML = "<img src='index/gumballMachine.gif?" + new Date().getTime() + "' />";
	setTimeout("stopDrop()", 5000);
	playSound("index/sounds/gumballMachine.wav", 4610, "index/sounds/gumballMachine.wav"); 
}

function stopDrop(){
	document.getElementById("gumballMachine").innerHTML = "<img src='index/gumballMachine.png' />";
}

function addCoin(){
	document.body.style.cursor = "url(index/quarter.cur),default";
	playSound("index/sounds/coin.wav", 100, "index/sounds/coin.wav");  //  preload
}

function removeCoin(){
	document.body.style.cursor = "default";
}

//***************************************************************************************************************//
//********************************		Move Clouds		*********************************************************//
//***************************************************************************************************************//
timers = new Array();
function moveClouds(){
	clouds = document.getElementsByClassName('cloud');
	for(var i=0; i<clouds.length; i++){
		moveCloud(clouds[i], i);
	}
	//clouds[clouds.length-1].animate({left: '+=5'}, 5000).moveClouds();
}

function moveCloud(cloud, i){
	var elem = cloud;
	var left = cloud.getBoundingClientRect().left;
	timers[i] = setInterval(function() {
		elem.style.left = (left+=1) + "px";
		if (left > document.getElementById("cloudMotionContainer").getBoundingClientRect().width) {
			clearInterval(timers[i], i);
			resetCloud(elem);
		}
	}, 100);
}

function resetCloud(cloud, i){
	cloud.style.left = '0px';
	moveCloud(cloud, i);
}


//***************************************************************************************************************//
//********************************	Sidewalk Lines		*********************************************************//
//***************************************************************************************************************//
function rotateAnimation(el,degrees){
	var elem_array = document.getElementsByClassName(el);
	var elem_size = elem_array.length;
	for(var i=0; i<elem_size; i++){
		var elem = elem_array[i];
		switch(i){
		case 0: degrees=50; break;
		case 1: degrees=40; break;
		case 2: degrees=15; break;
		case 3: degrees=-10; break;
		case 4: degrees=-35; break;
		case 5: degrees=-50; break;
		}
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
		
		var old_height = (elem.offsetHeight)? elem.offsetHeight : elem.style.pixelHeight; 
		old_height -= 2; //To Account for border
		var new_height = old_height/Math.cos((degrees*(Math.PI/180)));
		elem.style['height'] =  new_height+'px';
		var up_shift = (old_height - new_height)/2;
		elem.style['margin-top'] = up_shift+'px';
	}
}


//***************************************************************************************************************//
//********************************		Slide Show		*********************************************************//
//***************************************************************************************************************//
var pictureList = [];
var index = 0;
function downloadPictures(){
	fileName = "basics/slideshow/slideshow.inc.php";
	sections = document.getElementsByClassName("slideshow");
	var xmlhttp;
	if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
	else xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			lines = xmlhttp.responseText.split("<br />");
			for(i=0; i<lines.length; i++){
				pictureList[i] = lines[i];
			}
			nextImage();
		}
	}
	xmlhttp.open('GET', fileName, true);
	xmlhttp.send();
}

function nextImage(){
	div = document.getElementById("slideshow");
	div.removeChild(div.childNodes[0]);
	img = new Image(); // width, height values are optional params 
	img.src = "basics/slideshow/pictures/" + pictureList[index];
	div.appendChild(img);
	
	index++;
	if(index==pictureList.length) index=0;
	setTimeout('nextImage()', 8000);
}
