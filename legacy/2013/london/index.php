<!DOCTYPE html>
<html lang="en">
	<head>
		<title>A Stroll Through Camden Town - Photos from London | Stijn Out Photography</title>
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=1000"/>
		<link rel="icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
		<link rel="shortcut icon" type="image/png" href="http://stijnout.com/other/nikon.png" />	
		<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.css' rel='stylesheet' />
		<!--[if lte IE 8]>
	    	<link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.ie.css' rel='stylesheet' >
		<![endif]-->
		<style type="text/css">
			body{
				background-color:#fff;
				margin:0;
				min-width: 700px;
				}
		
			.loading-invisible{
				display:none;
				}
			
			.loading-visible{
			    display:block;
			    position:fixed;
			    top:0;
			    left:0;
			    width:100%;
			    height:100%;
			    min-width: 700px;
			    text-align:center;
			    z-index:5000;
			    font-family:  "telefon-web", Helvetica Neue, Helvetica, Arial, sans-serif;
			    line-height: 0.8;
				font-size: 80px;
				font-weight: 200;
			    color:#fff;
			    background-color:#000;
			    text-transform: uppercase;
			    }  
			  
			#brochure{
				position: relative;
				margin-left:auto;
				margin-right: auto;
				height:300px;
				z-index:5;
				text-align: center;
				}
			
			#map{
				width:100%;
				min-width: 700px;
				height:700px;
				position: absolute;
				top:0;
				left:0;
				z-index: 0;
				background-color: #232323;
				}	
			
			.leaflet-control-attribution{display:none;}
						
			.location{
				font-family: "telefon-web", Futura, Times New Roman, Times, Georgia, serif;
				letter-spacing: -2px;
				font-size: 200px;
				margin:-50px auto 0 auto;
				text-align: center;
				text-shadow: 0px 2px 0px #000;
				color:#fff;
				text-transform: uppercase;
				-webkit-font-smoothing:antialiased;
				-webkit-font-kerning: normal;
				font-weight: bold;
				}
			
			.info{
				font-family:  "telefon-web", Helvetica Neue, Helvetica, Arial, sans-serif;
				font-size: 24px;
				margin:30px auto 0 auto;
				color:#000;
				font-weight: 200;
				width:700px;
				text-shadow: none;
				color:yellowgreen;
				text-shadow: 0px 2px 0px #000;
				-webkit-font-smoothing:antialiased;
				-webkit-font-kerning: normal;
				}
			
			#story{
				width:100%;
				min-width: 700px;
				background-color: #eee;
				background-image: url("http://stijn.cc/resources/patterns/subtle.jpg");
				position: relative;
				-moz-box-shadow: inset 0 0 15px 0px rgba(34,34,34,0.1);
				-webkit-box-shadow: inset 0 0 15px 0px rgba(34,34,34,0.1);
				box-shadow: inset 0 0 15px 0px rgba(34,34,34,0.1);
				padding:60px 0 75px 0;
				z-index: 5;
				}
			
			.stamp{
				width:250px;
				height: 223px;
				display: block;
				position: absolute;
				top:-35px;
				right:-70px;
				background-image: url("stamp250.png");
				opacity: 0.1;
				}
			
			.heading{
				font-family: "telefon-web", Futura, Helvetica, sans-serif;
				width:900px;
				margin:0 auto;
				text-align: left;
				font-size:90px;
				margin-bottom:30px;
				text-transform: uppercase;
				line-height: 1;
				color:#222;
				-webkit-font-smoothing:antialiased;
				-webkit-font-kerning: normal;
				text-shadow: 4px 4px 0px rgba(34,34,34,0.1);
				position: relative;	
				border-bottom: 1px dashed rgba(34,34,34,0.1);	
				padding-bottom:25px;
				}
				
			.intro{
				text-align: justify;
				margin:0 auto 0 auto;
				line-height: 1.3;
				font-family: "faunus-web";
				font-size: 20px;
				-webkit-font-smoothing:antialiased;
				-webkit-font-kerning: normal;
				color:#222;
				-webkit-column-count:3;
				-webkit-column-gap:50px;
				-moz-column-count:3;
				-moz-column-gap:50px;
				column-count:3;
				column-gap:50px;
				position: relative;
				border-bottom: 1px dashed rgba(34,34,34,0.1);	
				padding-bottom: 20px;
				}
				
			.signature{
				text-align: right;
				line-height: normal;
				font-size: 80px;
				font-family: "voluta-script-pro", "faunus-web";
				-webkit-font-smoothing:antialiased;
				-webkit-font-kerning: normal;
				margin:0;
				padding-right: 20px;
				}	
			
			#photos{
				z-index:11;
				padding-top:80px;
				width:1000px;
				text-align: center;
				margin-left:auto;
				margin-right:auto;
				position: relative;
				background-color: #fff;
				}
			#photos img{
				margin-bottom: 20px;
				background-color:#eee;
				}
			#photos img+img {		margin-top: 0px;} 
			#photos .duo img+img{	margin-bottom: 0;}
			#photos .duo img{		margin-top:0px;margin-bottom: 20px;}
			.first{	float:left;}
			.second{float:right;}
			.clear{display: block;clear: both;height: 5px;width:100%;}   
			.lazy {display: none;}

			#blackbox{
				width:100%;
				margin-top:100px;
				padding:50px 0;
				background-color:#232323;
				text-align: center;
				font-family:  "telefon-web", Helvetica Neue, Helvetica, Arial, sans-serif;
				font-size: 24px;
				font-weight: 200;
				text-shadow: none;
				-webkit-font-smoothing: antialiased;
				-webkit-font-kerning: normal;
				border-top:10px solid #ddd;
				}  
			
			#blackbox a{
				color:yellowgreen;
				text-decoration: none;
				border-bottom: 1px solid #232323;
				-webkit-transition:ease 0.4s;
				-moz-transition:ease 0.4s;
				transition:0.4s ease;
				text-shadow: 0px 2px 0px #000;
				}
			#blackbox a:hover{border-bottom: 1px solid yellowgreen;} 
			
			::selection{
				background:#000;
				color:#fff;
				text-shadow: none;
				}
			
			::-moz-selection{
				background:#000;
				color:#fff;
				text-shadow: none;
				}
			
			::-webkit-scrollbar {
				height: 10px;
				width: 8px;
				background-color: #232323;
				}  
			
			::-webkit-scrollbar-thumb:vertical {
				background-color: #fff;
				height: 50px;
				}
	
			p{	margin-top:0;
				}
			p+p{margin-top:1em;}	
			
			@media (max-width: 1000px) {
				.intro{
					width:600px;
					font-size: 20px;
					-webkit-column-count:1;
					-webkit-column-gap:0;
					-moz-column-count:1;
					-moz-column-gap:0;
					column-count:1;
					column-gap:0;
					
					border-bottom: 0;
					padding-bottom: 0;	
				}
				.heading{width:600px;font-size:70px;}
				#story{min-width: 700px;}
				.location{font-size: 130px;min-width:700px;}
				#photos{width:100%;padding-top:5px;background-color: #000;}
				#photos img{width:100%;height: auto;margin-bottom: 5px;}
				.loading-visible{max-width: 1000px;min-width: 700px;}
				#photos .duo img{		margin-top:0px;margin-bottom: 10px;}
				#photos .duo img+img {margin-bottom: 5px;}
			}
			@media (min-width: 1001px) and (max-width: 1140px) {
				.intro{
					width:900px;
					font-size: 20px;
					-webkit-column-count:2;
					-webkit-column-gap:40px;
					-moz-column-count:2;
					-moz-column-gap:40px;
					column-count:2;
					column-gap:40px;
				}
				#story{min-width: 1000px;}
				#photos{width:1000px;}
			}
			@media (min-width: 1141px) {
				.intro{
					width:1100px;
				}
			}
								
		</style>
		
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
		<div id="map" data-stellar-ratio="0.8"></div>
		<div id="brochure">
			<div class="location">London</div>
			<div class="info">Words and photographs by Stijn Out</div>
		</div>
		<div id="story">
			<div class="heading">
				A stroll through Camden Town
			</div> 
			<div class="intro">
				<p><strong>September 14, 2013</strong> &mdash; A quiet Sat&shy;urday morn&shy;ing in North Lon&shy;don. Au&shy;tumn has set in, and it has brought along its clas&shy;sic fea&shy;tures; the sky is grey, the grass is wet and the at&shy;mo&shy;sphere is gloomy. </p>
				<p>Yet, even on days as grim as today, the view from Prim&shy;rose Hill doesn't cease to astound. Turn&shy;ing around after the climb, I am greeted by Lon&shy;don's humble sky&shy;line, which is seem&shy;ingly un&shy;moved by the bland con&shy;di&shy;tions the deit&shy;ies of weath&shy;er have de&shy;cided to bring. Amidst non&shy;des&shy;cript high-rise, the BT  Tower dom&shy;in&shy;ates the view, and St Paul's cathed&shy;ral is situ&shy;ated some&shy;where in the dis&shy;tance. The River Thames is not vis&shy;ible, but the build&shy;ings on its south bank are: Lon&shy;don's re&shy;cently opened Shard looks de&shy;cept&shy;ively  small from up here, des&shy;pite be&shy;ing Europe's second highest build&shy;ing. The Lon&shy;don Eye is re&shy;duced to an in&shy;sig&shy;ni&shy;fic&shy;ant half circle. Mean&shy;while, cranes are care&shy;fully stack&shy;ing more ele&shy;ments on top of Lon&shy;don's ex&shy;ist&shy;ing sky&shy;line, like a paint&shy;er who can't re&shy;frain from adding ever more de&shy;tail to his can&shy;vas. The view from the hill is nev&shy;er fi&shy;nal.</p>
				<p>To the south&shy;east, Re&shy;gent's Canal runs through Cam&shy;den Town. The houses along the former towpath (whose main func&shy;tion now ap&shy;pears to be a run&shy;ning trail) must be some of Lon&shy;don's prime real es&shy;tate. Their wa&shy;ter&shy;front ter&shy;races are worth lust&shy;ing over, and the gar&shy;dens con&shy;tain enough fo&shy;liage to be con&shy;sidered small parks.</p>
				<p>As over&shy;crowded as the nearby Cam&shy;den Lock Mar&shy;ket is on week&shy;ends, so tran&shy;quil seem the neigh&shy;bour&shy;hoods in its prox&shy;im&shy;ity. Un&shy;deni&shy;ably, Lon&shy;don is an im&shy;mense city, but quiet dis&shy;tricts like these make it feel like an end&shy;less vil&shy;lage, rather than an over&shy;whelm&shy;ing met&shy;ro&shy;pol&shy;is.</p>
			</div>
		</div>

		<!-- Photos -->
		<div id="photos">
			<?php
				// Set up function: half width photo
				function halfWidth($imageA, $imageB){	
					// Substitute for small version of image
					$imageA = substr($imageA, 0, -4) .'s'. substr($imageA, -4);
					$imageB = substr($imageB, 0, -4) .'s'. substr($imageB, -4);   
					// Settings
					$widthTotal = 1000;
					$widthGutter = 25;
					// Calculations
					list($widthA, $heightA) = getimagesize($imageA);
					$ratioA = $widthA/$heightA;
					list($widthB, $heightB) = getimagesize($imageB);
					$ratioB = $widthB/$heightB;
					$height = ($widthTotal - $widthGutter) / ( $ratioA + $ratioB );
					$height = round($height,0);	
					$finalwidthA = round(($height*$ratioA),0);
					$finalwidthB = round(($height*$ratioB),0);
					$relwidthA = $finalwidthA / $widthTotal * 100;
					$relwidthA = $finalwidthA / $widthTotal * 100;
					// Render results	  	
					echo 
						"		<div class='duo'>
									<img data-original='" . $imageA . "' src='http://stijn.cc/resources/images/white.jpg' alt='' width='" . $finalwidthA . "' height='" . $height . "' class='first lazy'/>
									<img data-original='" . $imageB . "' src='http://stijn.cc/resources/images/white.jpg' alt='' width='" . $finalwidthB . "' height='" . $height . "' class='second lazy'/>
									<noscript>
										<img src='" . $imageA . "' alt='' width='" . $finalwidthA . "' height='" . $height . "' class='first'/>
										<img src='" . $imageB . "' alt='' width='" . $finalwidthB . "' height='" . $height . "' class='second'/>
									</noscript>
								</div>
								<div class='clear'></div>" . "\n";
					}

				// Set up function for array of full width photos	
				function renderPhotos($photoarray){
					foreach ($photoarray as &$phoot) {
					    list($widthH, $heightH) = getimagesize($phoot);
					    echo "	<img class='lazy' data-original='" . $phoot . "' src='http://stijn.cc/resources/images/white.jpg' alt='' width='" . $widthH . "' height='" . $heightH . "'/>
					    		<noscript><img src='" . $phoot . "' alt='' width='" . $widthH . "' height='" . $heightH . "'/></noscript>" . "\n";
					}
				}	

				// Render photos																
				renderPhotos(array(	"_DSF5202.jpg",
									"_DSF5205.jpg",
									"_DSF5206.jpg"
									));
				halfWidth("_DSF5204.jpg", "_DSF5212.jpg");					
				renderPhotos(array(	"_DSF5213.jpg",
									"_DSF5214.jpg",
									"_DSF5217.jpg",
									"_DSF5219.jpg",
									"_DSF5218.jpg",
									"_DSF5220.jpg",
									"_DSF5223.jpg"
									));
				halfWidth("_DSF5221.jpg", "_DSF5224.jpg");
				renderPhotos(array(	"_DSF5226.jpg",
									"_DSF5229.jpg",
									));
				halfWidth("_DSF5232.jpg", "_DSF5233.jpg");					
				renderPhotos(array(	"_DSF5236.jpg",
									"_DSF5238.jpg",
									));
				halfWidth("_DSF5237.jpg", "_DSF5239.jpg");					
				renderPhotos(array(	"_DSF5240.jpg",
									"_DSF5241.jpg",
									"_DSF5242.jpg",
									));
				halfWidth("_DSF5243.jpg", "_DSF5245.jpg");
				renderPhotos(array(	"_DSF5247.jpg",
									"_DSF5249.jpg",
									"_DSF5252.jpg",
									"_DSF5254.jpg",
									"_DSF5259.jpg"
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
			var map = L.mapbox.map('map', 'stijn.map-ton5i3d9', {zoomControl: false});
			map.dragging.disable();
			map.touchZoom.disable();
			map.doubleClickZoom.disable();
			map.scrollWheelZoom.disable();
		
			// Jquery
			$(document).ready(function() {
				// Lazy load images
				$("img.lazy").show().lazyload({ threshold : loadingThreshold});
				
				// Render opening screen in correct size
				window_size = $(window).height();
				window_width = $(window).width();
				topping = (window_size - 300) / 2 + 75;
				bottoming = (window_size - 300) / 2 -75;
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