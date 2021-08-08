<?php
	header('Content-type: text/html; charset=utf-8');
	$photoPage = true;
	if(isset($_COOKIE['PrivateAccess'])){ $friendzone = true; }
	else{ $friendzone = false; }	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			<?php echo $placename; ?> | Stijn Out Photography
		</title>		
		<?php include($nested.'../../architecture/php/load-externals.php'); ?>		
	</head>
	<body class="photo-page">		
		<aside id="loading">
			<i id="loading-spinner" class="fa fa-spin fa-circle-o-notch fa-2x spinner"></i>
		</aside>
		<a id="backhome" href="<?php echo $nested.'../../'; ?>">
			<i class="fa fa-fw fa-home"></i>
		</a>
		<div id="backtotop">
			<i class="fa fa-fw fa-angle-double-up"></i>
		</div>
		<div id="content">
			<div id="map"></div>
			<header id="brochure">
				<hgroup id="container-loc">
					<h1 id="location">
						<?php echo $placename;?>
					</h1>
					<h2 id="coords">
						<i class="fa fa-lg fa-map-marker"></i><?php echo $coordinates;?>
					</h2>
				</hgroup>
			</header>
			
			<div id="fade"></div>
			<main id="photos">
				<div id="starthere"><i class="fa fa-angle-double-down icon-pulse"></i></div>

				<table id="meta">
					<?php
						$totalFilesize = 0;
						$nTablerows = 0;
						$nphotos = 0;
						$nphotostring = " photos";
						if($devMode){ $nphotostring = " public"; }
						
						// Count photos on page and devide into categories, depending on viewing mode.
						$photos = glob('i/*.jpg', GLOB_BRACE);
						foreach($photos as $file) {
							$nphotos++;
							$photoId = preg_replace("/[^0-9]/", "", $file);
							if(!in_array($photoId, $ignorePhotos)){
								$totalFilesize += filesize($file);
							}
						}
						$totalFilesize = number_format($totalFilesize / 1048576, 2) . ' MB';
							
						if($friendzone && !$devMode){
							$nphotos -= count($ignorePhotos);
						}
						else{
							$nphotos = $nphotos - count($ignorePhotos) - count($privatePhotos);
						}

						function tableRow($icon, $string){
							global $nTablerows;
							$nTablerows++;
							echo '<tr id="meta-row'.$nTablerows.'">
									<td class="meta-icon"><i class="fa fa-fw '.$icon.'"></i></td>
									<td class="meta-info">'.$string.'</td>
								  </tr>';
						}
					
						// Render table
						tableRow("fa-clock-o", $photodate);
						tableRow("fa-camera", $camera);
						tableRow("fa-th", $nphotos . $nphotostring);
						if($devMode){
							if(count($privatePhotos) > 0){
								tableRow("fa-child", count($privatePhotos)." private");
							}
							if(count($ignorePhotos) > 0){
								tableRow("fa-times", count($ignorePhotos)." hidden");
							}
							tableRow("fa-hdd-o", $totalFilesize);
						}
						else if($friendzone){
							tableRow("fa-child", "Friend mode");
						}
					?>
					
				</table>
				<?php // Render Photos
					$photos = glob('i/*.jpg', GLOB_BRACE);
					foreach($photos as $file) {
						list($width, $height) = getimagesize($file);
						$photoId = preg_replace("/[^0-9]/", "", $file);
						$vertical = false;
				
						// Print photo if not private. If private, only print when user has access to private photos. Don't print ignored photos.
						if( (($friendzone || ( !$friendzone && !in_array($photoId, $privatePhotos))) &&  !in_array($photoId, $ignorePhotos)) || $devMode ){
							if($devMode){	
								if(in_array($photoId, $privatePhotos)){
									echo "<div class='photo-id private'><i class='fa fa-fw fa-child'></i> ".$photoId."</div>";
								}
								else if(in_array($photoId, $ignorePhotos)){
									echo "<div class='photo-id ignored'><i class='fa fa-fw fa-times'></i> ".$photoId."</div>";
								}
								else{
									echo "<div class='photo-id'>".$photoId."</div>";
								}
							}
							if($width > 1200){
								$height = 1200 * $height / $width;
								$width = 1200;
							}
							if($height > $width){
								$vertical = "vertical";
								$width *= 0.7;
								$height *= 0.7;
							}
							echo "<img class='lazy photo ".$vertical."' id='photo-".$photoId."' data-original='".$file."' src='".$nested."../../architecture/images/white.jpg' alt='".$placename." | Stijn Out Photography' width='".$width."' height='".$height."'/>";
						}
					}
				?>		
			</main>
			
			<div id="blackbox">
				<div id="fade-bottom"></div>
				<?php include($nested.'../../architecture/php/events.php'); ?>
			</div>
			<?php include($nested.'../../architecture/php/copyright.php'); ?>
		</div>
		<div id="map-bottom"></div>
		<script type="text/javascript">
			var devMode = <?php $devMode ? print "true": print "false"; ?>;
			var mapId = "<?php echo $mapid; ?>";
			var friendZone = <?php $friendzone ? print "true": print "false"; ?>;
		</script>
		<script src="<?php echo $nested; ?>../../architecture/js/photopage.js" type="text/javascript"></script>
	</body>
</html>