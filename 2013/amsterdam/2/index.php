<?php 
	// Settings
	$placename = "Amsterdam";
	$coordinates = "52°22'N 4°54'E";
	$photodate = "April 2013";
	$camera = "Nikon D7000";
	$mapid = "stijn.hbmp4a9c";
	$privatePhotos = array("710486");
	$ignorePhotos = array("710397", "710407", "710414", "710501");
	$nested = true;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>