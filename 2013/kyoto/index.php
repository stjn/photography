<?php 
	// Settings
	$placename = "Kyoto";
	$coordinates = "35°0'N 135°45'E";
	$photodate = "October 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.gli9c73j";
	$privatePhotos = array();
	$ignorePhotos = array("6706", "6715", "6716", "6725", "6727", "6740", "6746", "6750", "6751", "6758");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
