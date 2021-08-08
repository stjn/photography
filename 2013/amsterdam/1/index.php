<?php 
	// Settings
	$placename = "Amsterdam";
	$coordinates = "52°22'N 4°54'E";
	$photodate = "January 2013";
	$camera = "Nikon D7000";
	$mapid = "stijn.hbmp4a9c";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = true;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>