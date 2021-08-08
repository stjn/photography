<?php 
	// Settings
	$placename = "Moscow";
	$coordinates = "55°45'N 37°37'E";
	$photodate = "July 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.map-v8yvlbdu";
	$privatePhotos = array("0529", "0566", "0575", "0667", "0687", "0689", "0724", "0818", "0905", "0934", "0946", "0953", "0954", "0960");
	$ignorePhotos = array("0889", "0550", "0552","0557", "0585", "0614", "0620", "0624", "0654", "0699", "0727", "0733", "0737", "0754", "0770", "0800", "0867", "0871", "0878", "0880", "5002", "5045", "5060");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>
