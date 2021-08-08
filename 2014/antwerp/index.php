<?php 
	// Settings
	$placename = "Antwerp";
	$coordinates = "51°13'N 4°24'E";
	$tagline = "Street scenes from the city of diamonds";
	$photodate = "June 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.ii04kiln";
	$privatePhotos = array("10157", "10167", "10232", "10253", "10254", "10281", "10317");
	$ignorePhotos = array("10181", "10225", "10276", "10294", "10296", "10297", "10303", "10310", "10326", "10333", "10348");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>