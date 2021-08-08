<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nara | Stijn Out Photography</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=1020"/>
		<link rel="icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
		<link rel="shortcut icon" type="image/png" href="http://stijnout.com/other/nikon.png" />	
		<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.css' rel='stylesheet' />
		<!--[if lte IE 8]>
	    	<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.ie.css' rel='stylesheet' >
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="http://stijnout.com/photolog/css/minimal-lime.css">
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
		<script type="text/javascript" src="//use.typekit.net/gop3wud.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script src="http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/jquery.lazyload.min.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/jquery.stellar.min.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/iscroll4.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- Back to top anchor -->
		<div name="top"></div>
		
		<!-- Loading screen -->
		<div id="loading" class="loading-invisible">
		  <p>Loading&hellip;</p>
		</div>
		<script type="text/javascript">
		  document.getElementById("loading").className = "loading-visible";
		  var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
		  var oldLoad = window.onload;
		  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
		  window.onload = newLoad;
		</script>
		
		<!-- Photoshoot introduction-->
		<div id="map"></div>
		<div id="brochure">
			<div class="location">Nara</div>
			<div class="info">Photographs by Stijn Out</div>
		</div>
		<!-- Photos -->
		<div id="photos">
			<?php
				include('../../php/render-responsive.php');
				renderPhotos(array(
					"_DSF7025.jpg",
				//	"_DSF7029.jpg",
					"_DSF7034.jpg",
				//	"_DSF7035.jpg",
					"_DSF7039.jpg",
					"_DSF7040.jpg",
					"_DSF7043.jpg",
				//	"_DSF7047.jpg",
				//	"_DSF7048.jpg",
					"_DSF7050.jpg",
					"_DSF7053.jpg",
				//	"_DSF7055.jpg",
					"_DSF7056.jpg",
					"_DSF7065.jpg",
					"_DSF7073.jpg",
					"_DSF7076.jpg"));
				halfWidth("_DSF7090.jpg", "_DSF7096.jpg");
				renderPhotos(array(
					"_DSF7094.jpg",
				//	"_DSF7092.jpg",
				//	"_DSF7101.jpg",
					"_DSF7103.jpg",
				//	"_DSF7106.jpg",
					"_DSF7107.jpg",
				//	"_DSF7108.jpg",
					"_DSF7109.jpg",
				//	"_DSF7110.jpg",
					"_DSF7112.jpg",
				//	"_DSF7114.jpg",
					"_DSF7118.jpg",
				//	"_DSF7121.jpg",
					"_DSF7126.jpg",
				//	"_DSF7131.jpg",
				//	"_DSF7135.jpg",
					"_DSF7137.jpg",
				//	"_DSF7139.jpg",
					"_DSF7140.jpg"));
				halfWidth("_DSF7144.jpg", "_DSF7141.jpg");
				renderPhotos(array(	
					"_DSF7148.jpg",
				//	"_DSF7151.jpg",
				//	"_DSF7156.jpg",
					"_DSF7161.jpg",
					"_DSF7163.jpg",
					"_DSF7166.jpg",
				//	"_DSF7168.jpg",
					"_DSF7170.jpg",
				//	"_DSF7175.jpg"
					));
				halfWidth("_DSF7185.jpg", "_DSF7186.jpg");
				renderPhotos(array(	
				//	"_DSF7187.jpg",
					"_DSF7188.jpg",
					"_DSF7193.jpg",
					"_DSF7199.jpg",
					"_DSF7202.jpg",
					"_DSF7206.jpg",
					"_DSF7208.jpg",
					"_DSF7211.jpg",
					"_DSF7216.jpg",
				//	"_DSF7218.jpg",
					"_DSF7219.jpg",
				//	"_DSF7222.jpg",
				//	"_DSF7223.jpg",	
					"_DSF7224.jpg",
				//	"_DSF7225.jpg",	
					"_DSF7226.jpg",
					"_DSF7234.jpg"));
				halfWidth("_DSF7247.jpg","_DSF7246.jpg");
				renderPhotos(array(
				//	"_DSF7239.jpg",
				//	"_DSF7240.jpg",
				//	"_DSF7241.jpg",
					"_DSF7242.jpg"));
				halfWidth("_DSF7249.jpg","_DSF7251.jpg");
				renderPhotos(array(
					"_DSF7255.jpg",
					"_DSF7257.jpg"
				));	
			?>		
		</div>
		<div id="blackbox">
			<a href="#">Back to top</a><br/><br/>
			<a href="http://stijnout.com/photolog">Return to photolog</a>
		</div>
		<script type="text/javascript">
			// Options
			var loadingThreshold = 5000;

			// Map: render map
			var map = L.mapbox.map('map', 'stijn.gli9obn8', {scrollWheelZoom: false, zoomControl: false});
			map.dragging.disable();
			map.touchZoom.disable();
			map.doubleClickZoom.disable();
			map.scrollWheelZoom.disable();
		
			// Jquery
			$(document).ready(function() {
				// Render opening screen in correct size
				window_size = $(window).height();
				window_width = $(window).width();
				
				//Lazyload images, based on window width
				if(window_width > 1280){	$("img.phoot-big, .lazy-wide").show().lazyload({ threshold : loadingThreshold});			}
				else{						$("img.phoot-small, .lazy-notebook").show().lazyload({ threshold : loadingThreshold});		}
				
				// Calculate brochure
				topping = (window_size - 300) / 2 + 75;
				bottoming = (window_size - 300) / 2 - 70;
				brochure_height = window_size - topping;
				loading_padding = (window_size - 60) / 2;
				$('#loading').css('padding-top', loading_padding + 'px');
				$('#map').css('height', window_size + 'px');
				//$('#brochure').css('height', brochure_height + 'px');
				$('#brochure').css('padding-top', topping + 'px');
				$('#brochure').css('padding-bottom', bottoming + 'px');
			//	$('#brochure').css('left', lefting + 'px');
			//	$('#story').css('margin-top', window_size + 'px');
				});
				
			// Activate Stellar.js if browser isnt' WebKit Mobile
			(function(){
				  var ua = navigator.userAgent,
				    isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);
				
				  if (isMobileWebkit === false) {
				    $.stellar({ responsive: true});
				  }
				
				})();	
		</script>
	</body>
</html>