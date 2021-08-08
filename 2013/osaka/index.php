<?php 
	// Settings
	$placename = "Osaka";
	$coordinates = "34°42'N 135°30'E";
	$photodate = "November 2013";
	$camera = "Fujifilm X-E1";
	$mapid = "stijn.glbf94oj";
	$privatePhotos = array();
	$ignorePhotos = array("6535", "6556", "6568", "6578", "6604", "6769", "6770", "6771", "6792", "6812", "6825", "6829", "6833", "6836", "6839", "6841", "6844", "6845", "6849", "6851", "6857", "6858", "6861", "6873", "6877", "6885", "6887", "6889", "6913", "6916", "6932", "6934", "6952", "6961", "6974", "6979", "7003", "7020");
	$nested = false;
	$devMode = false;
	
	// Include
	if($nested){$nested = "../";}
	include($nested.'../../architecture/php/render-html.php'); 
?>