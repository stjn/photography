<?php 
	// Settings
	$placename = "Prague";
	$coordinates = "50°5'N 14°25'E";
	$photodate = "March 2012";
	$camera = "Nikon D7000";
	$mapid = "";
	$privatePhotos = array("6102");
	$ignorePhotos = array();
	$nested = false;
	$devMode = true;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
