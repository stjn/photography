<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Seoul | Stijn Out Photography</title>
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
				width:1200px;
				text-align: center;
				margin-left:auto;
				margin-right:auto;
				position: relative;
				background-color: #fff;
				}
			#photos img{
				margin-bottom: 80px;
				background-color:#eee;
				border-radius: 3px;
				}
			#photos img+img {		margin-top: 0px;} 
			#photos .duo img+img{	margin-bottom: 0;}
			#photos .duo img{		margin-top:0px;margin-bottom: 80px;}
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
				#photos{width:100%;padding-top:85px;background-color: #fff;}
				#photos img{width:100%;height: auto;margin-bottom: 5px;border-radius: 0;}
				.loading-visible{max-width: 1000px;min-width: 700px;}
				#photos .duo img{		margin-top:0px;margin-bottom: 10px;}
				#photos .duo img+img {margin-bottom: 5px;}
			}
			@media (min-width: 1001px) and (max-width: 1280px) {
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
				#photos img{width:100%;height: auto;}
			}
			@media (min-width: 1281px) {
				.intro{
					width:1100px;
				}
			}
			#wrapper{width:100%;background-color: #fff;border:4px solid red;}					
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
		<div id="map"></div>
		<div id="brochure">
			<div class="location">Seoul</div>
			<div class="info">Photographs by Stijn Out</div>
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
					$widthTotal = 1200;
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

				renderPhotos(array(	"_DSF5357.jpg",
									"_DSF5362.jpg",
									"_DSF5370.jpg",
									"_DSF5372.jpg",
									"_DSF5376.jpg",
						//			"_DSF5380.jpg",
						//			"_DSF5388.jpg",
						//			"_DSF5395.jpg",
									"_DSF5398.jpg",
									"_DSF5399.jpg",
						//			"_DSF5407.jpg",
									"_DSF5416.jpg",
									"_DSF5422.jpg",
									"_DSF5435.jpg",
						//			"_DSF5436.jpg",
						//			"_DSF5437.jpg",
						//			"_DSF5443.jpg",
									"_DSF5456.jpg",
						//			"_DSF5464.jpg",
						//			"_DSF5465.jpg",
									"_DSF5470.jpg",
									"_DSF5473.jpg",
									"_DSF5474.jpg",
									"_DSF5478.jpg",
							//		"_DSF5479.jpg",
									"_DSF5482.jpg",
									"_DSF5485.jpg",
									"_DSF5497.jpg",
									"_DSF5502.jpg",
									"_DSF5507.jpg",
							//		"_DSF5510.jpg",
									"_DSF5515.jpg",
							//		"_DSF5518.jpg",
							//		"_DSF5521.jpg",
							//		"_DSF5526.jpg",
									"_DSF5529.jpg",
									"_DSF5533.jpg",
							//		"_DSF5537.jpg",
									"_DSF5569.jpg",
									"_DSF5576.jpg",
									"_DSF5583.jpg",
							//		"_DSF5598.jpg",
									"_DSF5603.jpg",
									"_DSF5617.jpg",
									"_DSF5618.jpg",
									"_DSF5622.jpg",
									"_DSF5627.jpg",
							//		"_DSF5641.jpg",
							//		"_DSF5642.jpg",
									"_DSF5651.jpg",
									"_DSF5687.jpg",
							//		"_DSF5693.jpg",
									));	
					halfWidth("_DSF5714.jpg", "_DSF5717.jpg");				
					renderPhotos(array("_DSF5704.jpg",
									"_DSF5724.jpg",
									"_DSF5740.jpg",
									"_DSF5749.jpg",
									"_DSF5751.jpg",
							//		"_DSF5765.jpg",
									"_DSF5783.jpg",
									"_DSF5796.jpg",
									"_DSF5799.jpg",
									"_DSF5810.jpg",
							//		"_DSF5845.jpg",
									"_DSF5851.jpg",
									"_DSF5859.jpg",
									"_DSF5867.jpg",
									"_DSF5868.jpg",
									"_DSF5883.jpg",
									"_DSF5884.jpg",
									"_DSF5893.jpg",
									"_DSF5894.jpg",
									"_DSF5897.jpg",
							//		"_DSF5901.jpg",
									"_DSF5902.jpg",
									"_DSF5906.jpg",
									"_DSF5908.jpg",
									"_DSF5913.jpg",
									"_DSF5920.jpg",
							//		"_DSF5921.jpg",
									));	
						halfWidth("_DSF5934.jpg", "_DSF5945.jpg");
							renderPhotos(array("_DSF5935.jpg",
									"_DSF5942.jpg",
									"_DSF5946.jpg",
									"_DSF5948.jpg",
							//		"_DSF5956.jpg",
									"_DSF5962.jpg",
							//		"_DSF5963.jpg",
									"_DSF5967.jpg",
									"_DSF5964.jpg",
							//		"_DSF5969.jpg",
									"_DSF5970.jpg",
							//		"_DSF5972.jpg",
									"_DSF5975.jpg",
									"_DSF5977.jpg",
									"_DSF5991.jpg",
									"_DSF6006.jpg",
									"_DSF6007.jpg",
									"_DSF6019.jpg",
									"_DSF6022.jpg",
									"_DSF6026.jpg",
							//		"_DSF6032.jpg",
									"_DSF6039.jpg",
									"_DSF6057.jpg",
									"_DSF6069.jpg",
							//		"_DSF6080.jpg",
									"_DSF6084.jpg",
							//		"_DSF6099.jpg",
							//		"_DSF6101.jpg",
									"_DSF6105.jpg",
									"_DSF6118.jpg",
									"_DSF6125.jpg",
									"_DSF6149.jpg",
							//		"_DSF6150.jpg",
									"_DSF6161.jpg",
									"_DSF6165.jpg",
									"_DSF6167.jpg",
									"_DSF6174.jpg",
									"_DSF6199.jpg",
							//		"_DSF6200.jpg",
									"_DSF6205.jpg",
							//		"_DSF6221.jpg",
							//		"_DSF6224.jpg",
									"_DSF6226.jpg",
							//		"_DSF6230.jpg",
							//		"_DSF6234.jpg",
							//		"_DSF6238.jpg",
							//		"_DSF6240.jpg",
							//		"_DSF6243.jpg",
									"_DSF6246.jpg",
							//		"_DSF6247.jpg",
									"_DSF6265.jpg",
									"_DSF6292.jpg",
							//		"_DSF6293.jpg",
									"_DSF6315.jpg",
									"_DSF6304.jpg",
									"_DSF6320.jpg",
							//		"_DSF6328.jpg",
									"_DSF6330.jpg",
							//		"_DSF6338.jpg",
									"_DSF6344.jpg",
							//		"_DSF6414.jpg",
									"_DSF6423.jpg",
									"_DSF6432.jpg",
							//		"_DSF6460.jpg",
							//		"_DSF6461.jpg",
									"_DSF6464.jpg",
							//		"_DSF6467.jpg",
									"_DSF6475.jpg",
							//		"_DSF6482.jpg",
							//		"_DSF6485.jpg",
							//		"_DSF6493.jpg",
							//		"_DSF6504.jpg",
							//		"_DSF6505.jpg",
									"_DSF6517.jpg",
							//		"_DSF6524.jpg"				
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
			var map = L.mapbox.map('map', 'stijn.ghj1k734', {scrollWheelZoom: false, zoomControl: false});
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