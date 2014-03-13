<!DOCTYPE html>
<html>
<head>

	<style>
		div{
			position:relative;
			float:left;
			border-style:solid;
		}
		#background{
			width:25%;
			height:66%;
		}
		#building{
			width:74%;
			height:66%;
		}
		#sidewalk{
			width:100%;
			height:25%;
		}
		#street{
			width:100%;
			height:9%;
		}
		#door{
			width:300px;
			height:500px;
		}
		#doorInfo{
			border-style:none;
			top:-500px;
			left:40px;
		}
		#doorInfo img{
			width:250px;
		}
		#openDoor{
			width:300px;
			height:500px;
		}

		#closedDoor{
			width:300px;
			height:500px;
		}
		#window{
			margin-left:100px;
			width:500px;
			height:332px;
		}
		#slideshow {  
			height:332px; 
			width:500px; 
			margin: auto;
			background: url("slideshow-bg.png") repeat-x scroll left top transparent;
			padding: 10px;
		}

		#slideshow img { 
			position:absolute; 
			left:10px; top:10px; 
			width:450px;
			height:300px;
			border-style:solid;
			//border-color:red;
		}
	</style>

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>	
	<script src="doorScript.js"></script>
	<script>
		$(function(){ 
			$('#slideshow img:gt(0)').hide(); 
			setInterval(function(){$('#slideshow :first-child').fadeOut().next('img').fadeIn().end().appendTo('#slideshow');}, 3000);}
		);
	</script>

</head>
<body bgcolor="#E6E6FA">
	<div id="background">
	Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background Background
	</div>
	<div id="building">
		<div id="door">
			<div id="closedDoor">
				<img src="closedDoor2.jpg" />
			</div>
			<div id="openDoor">
				<img src="openDoor2.jpg" />
				<div id="doorInfo">
					<img src="http://i1263.photobucket.com/albums/ii628/SweetStreetDanville/StoreHours_zps16fffcf0.jpg" />
				</div>
			</div>
		</div>
		<div id="window">
			<div id="slideshow">
				<?php
					$directory = "slideshow/window";
					if($handle = opendir($directory .'/')){
						while($file = readdir($handle)){
							if($file!='.' && $file!='..'){
								echo '<img src="' . $directory.'/'.$file . '" />';
							}	
						}
					}
				?>
			</div>
		</div>
	</div>
	<div id="sidewalk"></div>
	<div id="street"></div>
</body>
</html>