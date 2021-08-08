<?php 
	// Settings
	$placename = "Amsterdam & Cologne";
	$coordinates = "52°22'N 4°54'E";
	$photodate = "May 2013";
	$camera = "Nikon D7000";
	$mapid = "stijn.hbmp4a9c";
	$privatePhotos = array();
	$ignorePhotos = array("710620", "710781");
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>