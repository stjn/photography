<?php 
	// Settings
	$placename = "Amstelland";
	$coordinates = "52°17'N 4°55'E";
	$photodate = "January 2013";
	$camera = "Nikon D7000";
	$mapid = "stijn.hbmp4a9c";
	$privatePhotos = array();
	$ignorePhotos = array("709922", "709677", "709662");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>