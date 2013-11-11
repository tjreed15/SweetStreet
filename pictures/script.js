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
	setTimeout('nextImage()', 3000);
}
