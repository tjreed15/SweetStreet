//********************************************************************************************//
//****************************		Sounds		**********************************************//
//********************************************************************************************//
var navigationSounds = ["about", "contact", "gifts", "index", "parties", "pictures", "specials", "sweets", "treats"];
var indexSounds = ["doorOpen", "doorClose", "gumballMachine", "coin"];
var sweetsSounds = ["quickPop", "bite", "openWrapper"];
var treatsSounds = ["click", "horn"];
var giftsSounds = ["click", "mouseOver"];
var partiesSounds = ["balloonPop"];
var specialsSounds = ["hover"];
var picturesSounds = [];
var aboutSounds = ["crossingBells", "trainHorn"];
var contactSounds = [];

var sounds = {"navigation": navigationSounds,"index":indexSounds, "sweets":sweetsSounds, "treats":treatsSounds, "gifts":giftsSounds, "parties":partiesSounds, "specials":specialsSounds, "pictures":picturesSounds, "about":aboutSounds, "contact":contactSounds};
function preloadSounds(page){
	for(i=0; i<sounds[page].length; i++){
		preloadSound(page + "/sounds/" + sounds[page][i] + ".wav");
	}
	for(i=0; i<sounds["navigation"].length; i++){
		preloadSound("basics/navigation/sounds/" + sounds["navigation"][i] + ".wav");
	}
}

//Silently plays sound to keep it in cache
function preloadSound(src){
	var sound = document.createElement("audio");
	sound.autoPlay = false;
	sound.src = src;
	sound.setAttribute('id', src);
	document.body.appendChild(sound);
	return sound;
}

var soundsPlayed = {};
function playSound(src, timeOff, id) {
	var soundPlayed = soundsPlayed['p:' + src];
	var now = new Date().getTime();
	if (!soundPlayed || (now - soundPlayed) > timeOff) {
		soundsPlayed['p:' + src] = now;
		var sound = document.getElementById(id);
		if(sound == null){
			sound = document.createElement("audio");
			sound.autoPlay = false;
			sound.src = src;
			sound.setAttribute('id', id);
			document.body.appendChild(sound);
		}
		if(getCookie('muted') && getCookie('muted')=='muted') {
			return;
		}
		else{
			sound.play();
		}
	}
}


//********************************************************************************************//
//****************************		Muting		**********************************************//
//********************************************************************************************//
function toggleMute(){
	muted = getCookie('muted');
	sounds=document.getElementsByTagName('audio');
	if(muted == 'notMuted'){ //Mute it now
		document.getElementById('muteButton').innerHTML = "<img src='basics/muted.png' />";
		setCookie('muted', 'muted', 100*24*60*60);
		for(i=0;i<sounds.length;i++){
			sounds[i].volume=0;
		}
	}
	else{ //Unmute it now
		document.getElementById('muteButton').innerHTML = "<img src='basics/unMuted.png' />";
		setCookie('muted', 'notMuted', 100*24*60*60);
		for(i=0;i<sounds.length;i++){
			sounds[i].volume=1;
		}
	}
}




//********************************************************************************************//
//****************************		Cookies		**********************************************//
//********************************************************************************************//
function setCookie(name, value, seconds) {
   var date = new Date();
   date.setTime(date.getTime()+(seconds*1000));
   var expires = "; expires="+date.toGMTString();
   document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(c_name + "=");
	if(c_start == -1) return false;
	else{
		c_start = c_value.indexOf("=", c_start)+1;
		c_end = c_value.indexOf(";", c_start);
		if(c_end == -1) c_end = c_value.length;
		c_value = unescape(c_value.substring(c_start, c_end));
		return c_value;
	}
}



//****************************************************************************************************************//
//*************************************		Loading Page		**************************************************//
//****************************************************************************************************************//
function download(from, after, parameters){
	if(!getCookie('totalCounter'))setCookie('totalCounter', 'counted', 2*60*60);
	if(!getCookie(from+'Counter'))setCookie(from+'Counter', 'counted', 2*60*60);
	node = document.getElementById("loading").style.display = "none";
	node = document.getElementById("mainContent").style.display = "block";
	var fn = window[after];
	if(typeof fn === 'function') {
		fn(parameters);
	}
}


//****************************************************************************************************************//
//*************************************			First Visit		**************************************************//
//****************************************************************************************************************//
function exitFirstVisit(){
	document.getElementById("firstVisit").style['display'] = "none";
}

function claimPrize(num){
	setCookie("visited", num, 100*24*60*60);
	window.location.href = "basics/analytics/giftCertificates/giftCertificatePrint.php?num="+num;
}
