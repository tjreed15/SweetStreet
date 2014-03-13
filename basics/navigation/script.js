//***********************************************************************************************************//
//*********************************		Spin Signs		*****************************************************//
//***********************************************************************************************************//
var looper;
var spinning = {}; 
function spin(elemID){
	if(spinning[elemID]>0){
		return false;
	}
	else{
		playSound("basics/navigation/sounds/" + elemID + ".wav", 0, "basics/navigation/sounds/" + elemID + ".wav");
		spinning[elemID]=0;
		spinOnce(elemID);
	}
}

function spinOnce(elemID){
	var elem = document.getElementById(elemID);	
	if(navigator.userAgent.match("Chrome")){
		elem.style.WebkitTransform = "rotate("+spinning[elemID]+"deg)";
	} else if(navigator.userAgent.match("Firefox")){
		elem.style.MozTransform = "rotate("+spinning[elemID]+"deg)";
	} else if(navigator.userAgent.match("MSIE")){
		elem.style.msTransform = "rotate("+spinning[elemID]+"deg)";
	} else if(navigator.userAgent.match("Opera")){
		elem.style.OTransform = "rotate("+spinning[elemID]+"deg)";
	} else {
		elem.style.transform = "rotate("+spinning[elemID]+"deg)";
	}
	if(spinning[elemID] > 359){
		spinning[elemID] = 0;
	}else{
		spinning[elemID]+=5;
		looper = setTimeout('spinOnce(\''+elemID+'\')',1);
	}
}


//***********************************************************************************************************//
//*********************************			Select		*****************************************************//
//***********************************************************************************************************//
function selectNavigation(navigation){
	var selected = document.getElementById(navigation);
	//selected.style['background-color'] = 'white';
	//selected.style['border-color'] = 'red';
	selected.style['background-image'] = "url('basics/navigation/blankSignB.png'), url('http://www.sweetstreet.biz/basics/navigation/blankSignB.png')";
	text = selected.children[0]; //First Child was not working
	text.style['color']='white';
}
