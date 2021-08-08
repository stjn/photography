<?php 
	// Settings
	$placename = "London";
	$coordinates = "51°31'N 0°7'W";
	$photodate = "October 2012";
	$camera = "Nikon D7000";
	$mapid = "stijn.map-ton5i3d9";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
