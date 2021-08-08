<?php 
	// Settings
	$placename = "Tokyo";
	$coordinates = "35°0'N 135°45'E";
	$photodate = "November 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.gli9c73j";
	$privatePhotos = array();
	$ignorePhotos = array("7366", "7376", "7380", "7463");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
