<?php 
	// Settings
	$placename = "Amsterdam";
	$coordinates = "52°22'N 4°54'E";
	$photodate = "February 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.hbmp4a9c";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = true;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>