<?php 
	// Settings
	$placename = "Friesland & Groningen";
	$coordinates = "53°14'N 6°25'E";
	$photodate = "April 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.i3j4i11k";
	$privatePhotos = array("10021", "10093");
	$ignorePhotos = array();
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>