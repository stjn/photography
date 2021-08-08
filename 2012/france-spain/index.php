<?php 
	// Settings
	$placename = "France & Spain";
	$coordinates = "55°45'N 37°37'E";
	$photodate = "July 2012";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.map-v8yvlbdu";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
