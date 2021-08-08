<?php 
	// Settings
	$placename = "Vaals";
	$coordinates = "50°46'N 6°1'E";
	$photodate = "February 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.id054gh8";
	$privatePhotos = array();
	$ignorePhotos = array("9313", "9316", "9318", "9319", "9327", "9343", "9357");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php');
?>