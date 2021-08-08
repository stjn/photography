<?php 
	// Settings
	$placename = "London";
	$coordinates = "51°31'N 0°7'W";
	$photodate = "September 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.map-ton5i3d9";
	$privatePhotos = array("5206");
	$ignorePhotos = array("5233", "5255");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
