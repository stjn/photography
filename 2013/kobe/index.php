<?php 
	// Settings
	$placename = "Kobe";
	$coordinates = "34°41'N 135°11'E";
	$photodate = "October 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.gli6kpd3";
	$privatePhotos = array();
	$ignorePhotos = array("6626", "6627", "6634", "6638", "6642", "6646", "6654", "6657", "6664", "6669", "6680", "6681", "6686", "6688");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>