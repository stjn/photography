<?php 
	// Settings
	$placename = "Edinburgh";
	$coordinates = "55°57'N 3°13'W";
	$lat = "55.953252";
	$lon = "-3.188266";
	$zoom = 13;
	$tagline = "A day in Europe's officious capital";
	$photodate = "March 2015";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.64737833";
	$privatePhotos = array("");
	$ignorePhotos = array("");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html_beta.php'); 
?>