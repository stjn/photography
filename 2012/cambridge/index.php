<?php 
	// Settings
	$placename = "Cambridge";
	$coordinates = "52°12'N 0°7'E";
	$photodate = "October 2012";
	$camera = "Nikon D7000";
	$mapid = "stijn.map-v8yvlbdu";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
