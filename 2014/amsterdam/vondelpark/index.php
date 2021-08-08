<?php 
	// Settings
	$placename = "Vondelpark";
	$coordinates = "52°21'N 4°52'E";
	$photodate = "December 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.kk0ja0d7";
	$privatePhotos = array();
	$ignorePhotos = array("11736", "11744", "11748", "11751", "11752", "11763");
	$nested = true;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>