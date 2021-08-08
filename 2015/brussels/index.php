<?php 
	// Settings
	$placename = "Brussels";
	$coordinates = "50°51'N 4°21'E";
	$tagline = "A day in Europe's officious capital";
	$photodate = "March 2015";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.ljkj8ko4";
	$privatePhotos = array("");
	$ignorePhotos = array("");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>