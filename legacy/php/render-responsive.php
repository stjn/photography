<?php 
// Set up function: half width photo
function halfWidth($imageA, $imageB){	
	// Substitute for small version of image
	$imageA = substr($imageA, 0, -4) .'s'. substr($imageA, -4);
	$imageB = substr($imageB, 0, -4) .'s'. substr($imageB, -4);   
	// Settings
	$widthTotal = 1200;
	$widthNotebook = 1000;
	$widthGutter = 25;
	// Calculations
	list($widthA, $heightA) = getimagesize($imageA);
	$ratioA = $widthA/$heightA;
	list($widthB, $heightB) = getimagesize($imageB);
	$ratioB = $widthB/$heightB;
	// Normal width
	$height = ($widthTotal - $widthGutter) / ( $ratioA + $ratioB );
	$height = round($height,0);	
	$finalwidthA = round(($height*$ratioA),0);
	$finalwidthB = round(($height*$ratioB),0);
	$relwidthA = $finalwidthA / $widthTotal * 100;
	$relwidthA = $finalwidthA / $widthTotal * 100;
	// Notebook width
	$notebookheight = ($widthNotebook - $widthGutter) / ( $ratioA + $ratioB );
	$notebookheight = round($notebookheight,0);	
	$notebookwidthA = round(($notebookheight*$ratioA),0);
	$notebookwidthB = round(($notebookheight*$ratioB),0);
	$notebookrelwidthA = $notebookwidthA / $widthNotebook * 100;
	$notebookrelwidthA = $notebookwidthA / $widthNotebook * 100;
	
	// Render results	  	
	echo "<div class='duo wide'>
			<img data-original='".$imageA."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$finalwidthA."' height='".$height."' class='first lazy lazy-wide'/>
			<img data-original='".$imageB."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$finalwidthB."' height='".$height."' class='second lazy lazy-wide'/>
			<noscript>
				<img src='".$imageA."' alt='' width='".$finalwidthA."' height='".$height."' class='first'/>
				<img src='".$imageB."' alt='' width='".$finalwidthB."' height='".$height."' class='second'/>
			</noscript>
		</div>
		<div class='clear'></div>
			
		<div class='duo notebook'>
			<img data-original='".$imageA."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$notebookwidthA."' height='".$notebookheight."' class='first lazy lazy-notebook'/>
			<img data-original='".$imageB."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$notebookwidthB."' height='".$notebookheight."' class='second lazy lazy-notebook'/>
			<noscript>
				<img src='" . $imageA . "' alt='' width='" . $notebookwidthA . "' height='" . $notebookheight . "' class='first'/>
				<img src='" . $imageB . "' alt='' width='" . $notebookwidthB . "' height='" . $notebookheight . "' class='second'/>
			</noscript>
		</div>
		<div class='clear'></div>";
	}

// Set up function for array of full width photos	
function renderPhotos($photoarray){
	foreach ($photoarray as &$phoot) {
	    list($widthH, $heightH) = getimagesize($phoot);
	    $phootSmall = substr($phoot, 0, -4) .'-1000'. substr($phoot, -4);
	    list($widthSmall, $heightSmall) = getimagesize($phootSmall);
	    echo "<img class='lazy photo phoot-big' data-original='".$phoot."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$widthH."' height='".$heightH."'/>
			<img class='lazy photo phoot-small' data-original='".$phootSmall."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$widthSmall."' height='".$heightSmall."'/>
			<noscript>
				<img class='photo phoot-big' src='".$phoot."' alt='' width='".$widthH."' height='".$heightH."'/>
				<img class='photo phoot-small' src='".$phootSmall."' alt='' width='".$widthSmall."' height='".$heightSmall."'/>
			</noscript>";
	}
}	
?>