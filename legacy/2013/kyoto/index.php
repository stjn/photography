<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kyoto | Stijn Out Photography</title>
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
			<div class="location">Kyoto</div>
			<div class="info">Photographs by Stijn Out</div>
		</div>
		<!-- Photos -->
		<div id="photos">
			<?php
				include('../../php/render-responsive.php');
				renderPhotos(array(
					"_DSF6691.jpg",
					"_DSF6694.jpg",
					"_DSF6696.jpg",
					"_DSF6697.jpg",
					"_DSF6700.jpg",
				//	"_DSF6706.jpg",
					"_DSF6710.jpg",
				//	"_DSF6715.jpg",		
				//  "_DSF6716.jpg",
					"_DSF6718.jpg",
					"_DSF6719.jpg",
					"_DSF6721.jpg",
					"_DSF6722.jpg",
				//	"_DSF6725.jpg",
				//	"_DSF6727.jpg",
					"_DSF6731.jpg",
					"_DSF6732.jpg",
					"_DSF6734.jpg",
				//	"_DSF6740.jpg",
					"_DSF6741.jpg",
				//	"_DSF6744.jpg",
				//	"_DSF6746.jpg",
					"_DSF6749.jpg",
				//	"_DSF6750.jpg",
					"_DSF6753.jpg"));
					halfWidth("_DSF6758.jpg", "_DSF6763.jpg");
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
			var map = L.mapbox.map('map', 'stijn.gli9c73j', {scrollWheelZoom: false, zoomControl: false});
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