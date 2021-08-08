<?php
	include('settings.php');
	if(isset($_COOKIE['PrivateAccess'])){
		$friendzone = true; 
	}
	else{
		$friendzone = false;
	}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $placename; ?> | Stijn Out Photography</title>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
		<link rel="shortcut icon" type="image/png" href="http://stijnout.com/other/nikon.png" />	
		
		<!-- Google analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19002091-1']);
		  _gaq.push(['_trackPageview']);
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
		<!-- Load scripts -->
		<script type="text/javascript" src="//use.typekit.net/gop3wud.js"></script> <!-- Kit: Photolog Moscow -->
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script src="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js"></script>
		<script src="http://stijn.cc/resources/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/jquery.lazyload.min.js" type="text/javascript"></script>
		
		<!-- Load stylesheets -->
		<link href="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css" rel='stylesheet' />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>		
		<!-- Loading screen -->
		<div id="loading">
			<i id="loading-spinner" class="fa fa-spin fa-circle-o-notch fa-2x spinner"></i>
		</div>
		<div id="backtotop">
			<i class="fa fa-angle-double-up"></i>
		</div>
		<div id="content">
			<!-- Photoshoot introduction-->
			<div id="map"></div>
			<div id="brochure">
				<div id="container-loc">
					<span id="location">
						<?php echo $placename;?>
					</span>
					<div id="coords">
						<i class="fa fa-lg fa-map-marker"></i><?php echo $coordinates;?>
					</div>
				</div>
				
			</div>
			
			<!--
			<div id="brochure">

				<div class="location">
					<?php echo $placename;?>
					<div id="coords">
						<i class="fa fa-lg fa-map-marker"></i><?php echo $coordinates;?>
					</div>
				</div>
				
			</div> -->
			
			<div id="fade"></div>
			<!-- Photos -->
			<div id="photos">
				<div id="starthere"><i class="fa fa-angle-double-down icon-pulse"></i></div>

				<table id="meta">
					<tr id="meta-row1">
						<td class="meta-icon"><i class="fa fa-fw fa-clock-o"></i></td>
						<td class="meta-info"><?php echo $photodate;?></td>
					</tr>
					<tr id="meta-row2">
						<td class="meta-icon"><i class="fa fa-fw fa-camera"></i></td>
						<td class="meta-info"><?php echo $camera;?></td>
					</tr>
					<tr id="meta-row3">
						<td class="meta-icon"><i class="fa fa-fw fa-th"></i></td>
						<td class="meta-info">
							<?php
								// Calculate photo count
								$nphotos = 0;
								$photos = glob('i/*.jpg', GLOB_BRACE);
								foreach($photos as $file) {
									$nphotos++;
									}
								if(!$friendzone){
									$nphotos -= count($privatePhotos);
									}	
								echo $nphotos." photos";
							?>
						</td>
					</tr>
					<?php
						if($friendzone){
							echo '	<tr id="meta-row4">
										<td class="meta-icon"><i class="fa fa-fw fa-child"></i></td>
										<td class="meta-info">Friend mode</td>
									</tr>';
						}
					?>
					
				</table>
				<?php
					$photos = glob('i/*.jpg', GLOB_BRACE);
					foreach($photos as $file) {
						list($width, $height) = getimagesize($file);
						$photoId = substr($file, 6, -4);

						// Print photo if not private. If private, only print when user has access to private photos.
						if($friendzone || ( !$friendzone && !in_array($photoId, $privatePhotos)) ){
							if($devMode){	
								if(in_array($photoId, $privatePhotos)){
									echo "<div class='photo-id private'>PRIVATE: ".$photoId."</div>";
								}
								else{
									echo "<div class='photo-id'>".$photoId."</div>";
								}
							}
							echo "<img class='lazy photo' id='photo-".$photoId."' data-original='".$file."' src='http://stijn.cc/resources/images/white.jpg' alt='' width='".$width."' height='".$height."'/>";
						}
					}
				?>		
			</div>
			
			<div id="blackbox">
				<div id="fade-bottom"></div>
				<?php 
					include('bottom-catalog.php');
				?>
			</div>
			<div id="map-bottom"></div>
		</div>
		
		<script type="text/javascript">
			// Options
			var loadingThreshold = 5000;
			var devMode = <?php $devMode ? print "true": print "false"; ?>;
			var mapId = "<?php echo $mapid; ?>";

			// Map: render map
			if(!devMode){
				var map = L.mapbox.map('map', mapId, {scrollWheelZoom: false, zoomControl: false});
					map.dragging.disable();
					map.touchZoom.disable();
					map.doubleClickZoom.disable();
					map.scrollWheelZoom.disable(); 
				var mapBottom = L.mapbox.map('map-bottom', mapId, {scrollWheelZoom: false, zoomControl: false});	
					mapBottom.dragging.disable();
					mapBottom.touchZoom.disable();
					mapBottom.doubleClickZoom.disable();
					mapBottom.scrollWheelZoom.disable();
			}
		
			// Jquery
			$(document).ready(function() {
				
				<?php 
					if($friendzone){
						echo '	friendUrl = document.URL + "friends";
								window.history.replaceState("", document.title, friendUrl);';
					}
				?>
				
				//Lazyload images, based on window width
				$("img.photo").show().lazyload({ threshold : loadingThreshold});
				
				// Render opening screen in correct size
				window_size = $(window).height();
				window_width = $(window).width();
				
				// Calculate brochure
				var locationWidth = function(){ return $("#location").width(); };
				var locationFontsize = 200;
				var maxLocationwidth = window_width * 0.7;

				while(locationWidth() > maxLocationwidth && locationFontsize > 20){
					locationFontsize -= 10;
					$("#location").css("font-size", locationFontsize + "px");
					if(locationFontsize == 100){
						$("#location").css("letter-spacing", "normal");	
					}
				}
				
				setTimeout(function (){
					finalWidth = $("#location").delay(100).width();
				    $("#container-loc").css("width", finalWidth + "px");
				    if(locationFontsize !== 200){
				   		borderWidth = locationFontsize * 0.15;
				   		coordBottom = borderWidth * (-2) - 20;
				   		coordRight = borderWidth * (-0.5);
					    $("#container-loc").css("border", borderWidth + "px solid #fff");
					    $("#coords").css("bottom", coordBottom+"px").css("right", coordRight+"px");
				    }
		        }, 100);
				
				brochureSize = $("#brochure").height();
				topping = (window_size - brochureSize) / 2;
				brochure_height = window_size - topping;
				window_extend = window_size + 70;
				easyStart = window_extend + 200;
				catalogHeight = $("#blackbox").height() + 100;

				$('#map').css('height', window_extend + 'px');
				$('#map-bottom').css('height', catalogHeight + 'px');
				$('#brochure').css('padding-top', topping + 'px');
				$('#brochure').css('padding-bottom', topping + 'px');
				$('#fade').css('top', window_extend + 'px');
				$(window).load(function(){
					$('#loading-spinner').delay(500).fadeOut(500);
		            $('#loading').delay(1000).fadeOut(750, function(){
		                setTimeout(function (){
					       $("#starthere").show();
				        }, 1000);
	                });
				});

				var scrollStarted = false;
				var backToTop = false;
				var backToTopAnimation = false;
				$(window).scroll(function() {
					if(window_width >= 1580 && !scrollStarted){
						if($(window).scrollTop() > 400){
							$("#meta").delay(300).fadeIn();
							scrollStarted = true;
							}
					}
	                if (!backToTop && !backToTopAnimation && $(window).scrollTop() > easyStart) {
	                    $('#backtotop').fadeIn();
	                    backToTop = true;
	                } 
	                else if(backToTop && !backToTopAnimation && $(window).scrollTop() < easyStart){
		                $('#backtotop').fadeOut();
		                backToTop = false;
	                }
	            });

				$("#starthere").click(function(){
					$("html, body").animate({ scrollTop: window_size}, 1000);
				});
				
				$("#backtotop").click(function(){
					$(this).fadeOut();
					backToTopAnimation = true;
					$("html, body").animate({ scrollTop: 300}, 0, function(){
						backToTopAnimation = false;
						setTimeout(function(){
							$("html, body").animate({ scrollTop: 0}, 1000);
						}, 100);
					});
					backToTop = false;
				});
	
			});
		</script>
	</body>
</html>