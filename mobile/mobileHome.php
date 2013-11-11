<!DOCTYPE html>
<html>
<head>
	<style>
		html, body, img{
			width:100%;
			height:100%;
			overflow:hidden;
		}
	
		div{
			position:absolute;
		}
		
		#backgroundImage{
			top:0;
			left:0;
			width:100%;
			height:100%;
		}	
		
		#backgroundFilter{
			top:10%;
			left:10%;
			width:80%;
			height:70%;
			border:0.1em solid black;
			border-radius:5%;
			background-color: rgba(0, 0, 0, 0.5);
			overflow:none;
		}
		
		#backgroundFilter #frame{
			border:none;
			width:100%;
			height:100%;
		}
		
		#sections{
			border:0.1em solid black;
		}
		
		.aWrapper{
			bottom:-0.1em;
			left:-0.1em;
			width:100%;
			height:10%;
		}

		.option{
			border-left:0.1em solid black;
			top:0;
			width:20%;
			height:100%;
			background-color:grey;
			overflow:hidden;
		}
		
		.option p{
			position:absolute;
			width:100%;
			text-align:center;
			margin:0;
			top:45%;
		}
		
		.a1{left:0%;}
		.a2{left:20%;}
		.a3{left:40%;}
		.a4{left:60%;}
		.a5{left:80%;}
		
		.mouseHandle{
			top:0;
			width:20%;
			height:100%;
		}
		
		
	</style>
	
	<script>
		sweets_arr = ["", "", "", "", "", "", "", "", ];
		treats_arr = ["", "games", "pillows", "lunchBoxes", "toys", "jewelry"];
		
	
		function changeSection(num){
			alert(option_arr[num]);
			document.getElementById("frame").src = "../treats/sections/" + option_arr[num] + ".txt";
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
	</script>
</head>
<body>
	<div id="backgroundImage"><img src="mobileBackground.png" /></div>
	<div id="backgroundFilter">
		<iframe id="frame"></iframe>
	</div>
	<div id="sections" class="aWrapper">
		<div id="option1" class="option a1"><p>Option #1</p></div>
		<div id="option2" class="option a2"><p>Option #2</p></div>
		<div id="option3" class="option a3"><p>Option #3</p></div>
		<div id="option4" class="option a4"><p>Option #4</p></div>
		<div id="option5" class="option a5"><p>Option #5</p></div>
	</div>
	<div id="mouseHandler" class="aWrapper">
		<div id="option1MouseHandle" class="mouseHandle a1" onClick="changeSection(1);"></div>
		<div id="option2MouseHandle" class="mouseHandle a2" onClick="changeSection(2);"></div>
		<div id="option3MouseHandle" class="mouseHandle a3" onClick="changeSection(3);"></div>
		<div id="option4MouseHandle" class="mouseHandle a4" onClick="changeSection(4);"></div>
		<div id="option5MouseHandle" class="mouseHandle a5" onClick="changeSection(5);"></div>
	</div>
</body>
</html>