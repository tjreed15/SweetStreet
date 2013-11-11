//****************************************************************************************************************//
//*************************************		Unwrapping Candy Bar		******************************************//
//****************************************************************************************************************//
function unwrapCandy(){
	playSound("sweets/sounds/openWrapper.wav", 0, "sweets/sounds/openWrapper.wav");
	setTimeout("nextImage()", 6500);
}

function nextImage(){
	document.getElementById('candyBarImg').src = "sweets/candyBar/candyWrapper13.png"
	document.getElementById('candyWrapper').style.width = "10%";
}




//****************************************************************************************************************//
//*************************************		Signs And Loaded Content		**************************************//
//****************************************************************************************************************//
currCategory = ""; //To Start
open = false; //To Start
nLinesPerSection = 5;
headerLength = 2;

function showSign(id){
	playSound("sweets/sounds/quickPop.wav", 0, id+"SignSound");
	if(!open){
		sign = document.getElementById(id+"SignSquare");
		sign.style.visibility = 'visible';
	}
}

function hideSign(id){
	sign = document.getElementById(id+"SignSquare");
	sign.style.visibility = 'hidden';
}

function showContent(category){
	row1 = document.getElementsByClassName("row1");
	row2 = document.getElementsByClassName("row2");
	candyWrapper = document.getElementById("candyWrapper");
	sections = document.getElementsByClassName("section");
	mainContent = document.getElementById("loadContent");
	removeContent();
		
	//Close Content
	if(currCategory==category){
		open=false;
		for(i=0; i<row1.length; i++){
			row1[i].style['top'] = "0";
			row2[i].style['bottom'] = "0";
			//document.getElementById("candyWrapper").style.visibility = "visible";
			candyWrapper.style['top'] = '20%';
			candyWrapper.style['height'] = '60%';
		}
		selectCategory(category="");
		currCategory = "";
		mainContent.style['z-index'] = '0';
		document.getElementById("seeMore").innerHTML = "";
	}
	
	//Open Content
	else{
		open = true;
		for(i=0; i<row1.length; i++){
			row1[i].style['top'] = "-25%";
			row2[i].style['bottom'] = "-25%";
			//document.getElementById("candyWrapper").style.visibility = "hidden";
			candyWrapper.style['top'] = '-10%';
			candyWrapper.style['height'] = '120%';
		}
		selectCategory(category);
		loadContent(currCategory = category);
		mainContent.style['z-index'] = '10';
		playSound("sweets/sounds/bite.wav", 0, category+"BiteSound"); 
	}
}



function loadContent(category){
	fileName = "sweets/candyLists/" + category + ".txt";
	sections = document.getElementsByClassName("section");
	var xmlhttp;
	if(window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
	else xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			lines = xmlhttp.responseText.split("\n");
			loadHeader(lines.slice(0, headerLength));
			if(lines.length > (sections.length*nLinesPerSection)){seeMore(category);}
			else{document.getElementById("seeMore").innerHTML = "";}
			lines = lines.slice(headerLength, (sections.length*nLinesPerSection)+headerLength);
			for(i=0; i<lines.length; i++){
				writeToSection(sections[i%3], lines[i]);
			}
		}
	}
	xmlhttp.open('GET', fileName, true);
	xmlhttp.send();
}


function selectCategory(category){
	if(category !="") document.getElementById(category+"Bite").style.visibility = "visible";
	if(currCategory != "") document.getElementById(currCategory+"Bite").style.visibility = "hidden";
}


function removeContent(){
	loadHeader(["", ""]);
	sections = document.getElementsByClassName("section");
	for(i=0; i<sections.length; i++){
		sections[i].firstChild.innerHTML = "";
	}
}

function loadHeader(lines){
	document.getElementById("title").firstChild.innerHTML = lines[0];
	document.getElementById("subTitle").firstChild.innerHTML = lines[1];
}

function writeToSection(section, string){
	section.firstChild.innerHTML += string + "<br>";
}

function seeMore(category){
	document.getElementById("seeMore").innerHTML = "<a onClick=\"viewCategory('" + category + "');\">See All</a>";
}

function viewCategory(category){
	document.location.href = "basics/textPage.php?section=sweets&file=candyLists/"+category+".txt";
}	