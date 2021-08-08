<?php 
	// Settings
	$placename = "Motormuis";
	$coordinates = "51°31'N 5°24'E";
	$photodate = "January 2012";
	$camera = "Nikon D7000";
	$mapid = "";
	$privatePhotos = array();
	$ignorePhotos = array();
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
