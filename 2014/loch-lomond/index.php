<?php 
	// Settings
	$placename = "Loch Lomond";
	$coordinates = "56°6'N 4°36'W"; 
	$tagline = "On the shores of Scotland's largest loch";
	$photodate = "July 2014";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.j879n247";
	$privatePhotos = array("10816", "10819", "10822", "10829", "10832", "10836", "10844", "10849", "10867", "10869", "10881", "10884");
	$ignorePhotos = array("10809", "10812", "10813", "10833", "10839", "10840", "10841", "10842", "10845", "10847", "10850", "10851", "10852", "10868", "10871");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>