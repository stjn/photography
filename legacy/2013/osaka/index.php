<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Osaka | Stijn Out Photography</title>
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
			<div class="location">Osaka</div>
			<div class="info">Photographs by Stijn Out</div>
		</div>
		<!-- Photos -->
		<div id="photos">
			<?php
				include('../../php/render-responsive.php');
				renderPhotos(array(
				//	OSAKA	
					"_DSF6528.jpg",
					"_DSF6533.jpg",
				//	"_DSF6535.jpg",
					"_DSF6542.jpg",
					"_DSF6546.jpg"));
					halfWidth("_DSF6541.jpg", "_DSF6551.jpg");
					renderPhotos(array(
				//	"_DSF6556.jpg",
					"_DSF6557.jpg"));
					halfWidth("_DSF6560.jpg", "_DSF6564.jpg");
					renderPhotos(array(
				//	"_DSF6566.jpg",
					"_DSF6567.jpg",
				//	"_DSF6568.jpg",
					"_DSF6571.jpg",
					"_DSF6575.jpg",
				//  "_DSF6578.jpg",	
					"_DSF6605.jpg",
					"_DSF6583.jpg",
					"_DSF6586.jpg",
					"_DSF6590.jpg"));
					halfWidth("_DSF6599.jpg", "_DSF6601.jpg");
					renderPhotos(array(
					"_DSF6603.jpg",
				//	"_DSF6604.jpg",
					"_DSF6607.jpg",
					"_DSF6614.jpg",
					"_DSF6619.jpg"));
					halfWidth("_DSF6769.jpg", "_DSF6774.jpg");
					renderPhotos(array(
				//	"_DSF6770.jpg",
				//	"_DSF6771.jpg",
					"_DSF6775.jpg",
					"_DSF6778.jpg",
					"_DSF6781.jpg",
					"_DSF6784.jpg",
					"_DSF6789.jpg",
				//	"_DSF6792.jpg",
					"_DSF6794.jpg",
					"_DSF6796.jpg",
					"_DSF6797.jpg",
					"_DSF6799.jpg",
					"_DSF6805.jpg",
				//	"_DSF6812.jpg",
					"_DSF6815.jpg",
					"_DSF6821.jpg"));
					halfWidth("_DSF6825.jpg", "_DSF6829.jpg");
					renderPhotos(array(
				//	"_DSF6825.jpg",
				//	"_DSF6829.jpg",
					"_DSF6831.jpg"));
					halfWidth("_DSF6851.jpg", "_DSF6839.jpg");
					renderPhotos(array(
				//	"_DSF6833.jpg",
				//	"_DSF6836.jpg",
					"_DSF6838.jpg",
				//	"_DSF6839.jpg",
					"_DSF6841.jpg"));
					halfWidth("_DSF6845.jpg", "_DSF6844.jpg");
					renderPhotos(array(
					"_DSF6846.jpg",
				//	"_DSF6849.jpg",
				//	"_DSF6851.jpg",
					"_DSF6852.jpg",
					"_DSF6854.jpg",
				//	"_DSF6857.jpg",
					"_DSF6858.jpg" ));
				//	"_DSF6859.jpg",
				halfWidth("_DSF6861.jpg", "_DSF6873.jpg");
				renderPhotos(array(
				//	"_DSF6861.jpg",
					"_DSF6863.jpg",
					"_DSF6867.jpg",
				//	"_DSF6873.jpg",
				//	"_DSF6877.jpg",
					"_DSF6881.jpg",
					"_DSF6883.jpg"));
				halfWidth("_DSF6885.jpg", "_DSF6887.jpg");
				renderPhotos(array(	
				//	"_DSF6885.jpg",
					"_DSF6892.jpg",
					"_DSF6886.jpg",
				//	"_DSF6887.jpg",
				//	"_DSF6889.jpg",
					"_DSF6897.jpg",
					"_DSF6910.jpg",
					"_DSF6912.jpg",
				//	"_DSF6913.jpg",
				//	"_DSF6916.jpg",
					"_DSF6918.jpg",
					"_DSF6921.jpg",
					"_DSF6925.jpg",
					"_DSF6928.jpg",
					"_DSF6929.jpg",
					"_DSF6931.jpg",
				//	"_DSF6932.jpg",
				//	"_DSF6934.jpg",
					"_DSF6941.jpg",
					"_DSF6947.jpg",
				//	"_DSF6952.jpg",
				//	"_DSF6961.jpg",
					"_DSF6963.jpg",
					"_DSF6970.jpg"));
				halfWidth("_DSF6971.jpg","_DSF6973.jpg");
				renderPhotos(array(	
				//	"_DSF6974.jpg",
					"_DSF6975.jpg",
				//	"_DSF6979.jpg",
					"_DSF6980.jpg",
					"_DSF6983.jpg",
					"_DSF6992.jpg"));
				halfWidth("_DSF6988.jpg","_DSF6993.jpg");
				renderPhotos(array(
					"_DSF6994.jpg",
					"_DSF6995.jpg",
					"_DSF6997.jpg",
					"_DSF6996.jpg",
					"_DSF7002.jpg",
				//	"_DSF7003.jpg",
					"_DSF7005.jpg",
					"_DSF7004.jpg",
					"_DSF7006.jpg",
					"_DSF7007.jpg",
					"_DSF7010.jpg",
					"_DSF7017.jpg",
					"_DSF7020.jpg",
					"_DSF7271.jpg"));
				halfWidth(	
					"_DSF7280.jpg",
					"_DSF7303.jpg");
				renderPhotos(array(	
					"_DSF7308.jpg",
					"_DSF7324.jpg",
					"_DSF7263.jpg"
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
			var map = L.mapbox.map('map', 'stijn.glbf94oj', {scrollWheelZoom: false, zoomControl: false});
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