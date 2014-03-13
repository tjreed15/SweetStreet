<?php
	$file = file("sweets/categories.txt");
	$midPoint = count($file)/2;
	for($i=0; $i<count($file); $i++){
		$category = trim($file[$i]);
		if($i<$midPoint){
?>	
		<div id=<?php echo $category."Rect";?> class="rect row1">
			<div id="<?php echo $category;?>SignSquare" class="signSquare">
				<img src="sweets/signPics/<?php echo $category?>Sign.png" />
			</div>
			<div id="<?php echo $category;?>PicSquare" class="picSquare">
				<div class="button">
					<div class="buttonBackground"></div>
					<div class="outButton"><img src="sweets/button.png" /></div>
				</div>
				<div class="buttonPhoto">
					<img src="sweets/buttonPics/<?php echo $category?>.png" />
				</div>
				<div id="<?php echo $category;?>Bite" class="bite" style="top:0;"><img src="sweets/bite3.png" /></div>
			</div>
			<div class="mouseListenerCover coverRow1" onMouseOut="hideSign('<?php echo $category;?>');" onMouseOver="showSign('<?php echo $category;?>');" onClick="showContent('<?php echo $category?>')"></div>
		</div>
<?php
		}
		else{
?>

		<div id=<?php echo $category."Rect";?> class="rect row2">
			<div id="<?php echo $category;?>PicSquare" class="picSquare">
				<div class="button">
					<div class="buttonBackground"></div>
					<div class="outButton"><img src="sweets/button.png" /></div>
				</div>
				<div class="buttonPhoto">
					<img src="sweets/buttonPics/<?php echo $category?>.png" />
				</div>
				<div id="<?php echo $category;?>Bite" class="bite" style="bottom:0;"><img src="sweets/bite4.png" /></div>
			</div>
			<div id="<?php echo $category;?>SignSquare" class="signSquare">
				<img src="sweets/signPics/<?php echo $category?>Sign.png" />
			</div>
			<div class="mouseListenerCover coverRow2" onMouseOut="hideSign('<?php echo $category;?>');" onMouseOver="showSign('<?php echo $category;?>');" onClick="showContent('<?php echo $category?>')"></div>
		</div>
		
<?php 
		} 
	}	
?>