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
				max-width: 100%;height:auto;
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
				//	$imageA = substr($imageA, 0, -4) .'s'. substr($imageA, -4);
				//	$imageB = substr($imageB, 0, -4) .'s'. substr($imageB, -4);   
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

				renderPhotos(array(	"_DSF5357@2x.jpg",
									"_DSF5362@2x.jpg",
									"_DSF5370@2x.jpg",
									"_DSF5372@2x.jpg",
									"_DSF5376@2x.jpg",
						//			"_DSF5380@2x.jpg",
						//			"_DSF5388@2x.jpg",
						//			"_DSF5395@2x.jpg",
									"_DSF5398@2x.jpg",
									"_DSF5399@2x.jpg",
						//			"_DSF5407@2x.jpg",
									"_DSF5416@2x.jpg",
									"_DSF5422@2x.jpg",
									"_DSF5435@2x.jpg",
						//			"_DSF5436@2x.jpg",
						//			"_DSF5437@2x.jpg",
						//			"_DSF5443@2x.jpg",
									"_DSF5456@2x.jpg",
						//			"_DSF5464@2x.jpg",
						//			"_DSF5465@2x.jpg",
									"_DSF5470@2x.jpg",
									"_DSF5473@2x.jpg",
									"_DSF5474@2x.jpg",
									"_DSF5478@2x.jpg",
							//		"_DSF5479@2x.jpg",
									"_DSF5482@2x.jpg",
									"_DSF5485@2x.jpg",
									"_DSF5497@2x.jpg",
									"_DSF5502@2x.jpg",
									"_DSF5507@2x.jpg",
							//		"_DSF5510@2x.jpg",
									"_DSF5515@2x.jpg",
							//		"_DSF5518@2x.jpg",
							//		"_DSF5521@2x.jpg",
							//		"_DSF5526@2x.jpg",
									"_DSF5529@2x.jpg",
									"_DSF5533@2x.jpg",
							//		"_DSF5537@2x.jpg",
									"_DSF5569@2x.jpg",
									"_DSF5576@2x.jpg",
									"_DSF5583@2x.jpg",
							//		"_DSF5598@2x.jpg",
									"_DSF5603@2x.jpg",
									"_DSF5617@2x.jpg",
									"_DSF5618@2x.jpg",
									"_DSF5622@2x.jpg",
									"_DSF5627@2x.jpg",
							//		"_DSF5641@2x.jpg",
							//		"_DSF5642@2x.jpg",
									"_DSF5651@2x.jpg",
									"_DSF5687@2x.jpg",
							//		"_DSF5693@2x.jpg",
									));	
					halfWidth("_DSF5714@2x.jpg", "_DSF5717@2x.jpg");				
					renderPhotos(array("_DSF5704@2x.jpg",
									"_DSF5724@2x.jpg",
									"_DSF5740@2x.jpg",
									"_DSF5749@2x.jpg",
									"_DSF5751@2x.jpg",
							//		"_DSF5765@2x.jpg",
									"_DSF5783@2x.jpg",
									"_DSF5796@2x.jpg",
									"_DSF5799@2x.jpg",
									"_DSF5810@2x.jpg",
							//		"_DSF5845@2x.jpg",
									"_DSF5851@2x.jpg",
									"_DSF5859@2x.jpg",
									"_DSF5867@2x.jpg",
									"_DSF5868@2x.jpg",
									"_DSF5883@2x.jpg",
									"_DSF5884@2x.jpg",
									"_DSF5893@2x.jpg",
									"_DSF5894@2x.jpg",
									"_DSF5897@2x.jpg",
							//		"_DSF5901@2x.jpg",
									"_DSF5902@2x.jpg",
									"_DSF5906@2x.jpg",
									"_DSF5908@2x.jpg",
									"_DSF5913@2x.jpg",
									"_DSF5920@2x.jpg",
							//		"_DSF5921@2x.jpg",
									));	
						halfWidth("_DSF5934@2x.jpg", "_DSF5945@2x.jpg");
							renderPhotos(array("_DSF5935@2x.jpg",
									"_DSF5942@2x.jpg",
									"_DSF5946@2x.jpg",
									"_DSF5948@2x.jpg",
							//		"_DSF5956@2x.jpg",
									"_DSF5962@2x.jpg",
							//		"_DSF5963@2x.jpg",
									"_DSF5967@2x.jpg",
									"_DSF5964@2x.jpg",
							//		"_DSF5969@2x.jpg",
									"_DSF5970@2x.jpg",
							//		"_DSF5972@2x.jpg",
									"_DSF5975@2x.jpg",
									"_DSF5977@2x.jpg",
									"_DSF5991@2x.jpg",
									"_DSF6006@2x.jpg",
									"_DSF6007@2x.jpg",
									"_DSF6019@2x.jpg",
									"_DSF6022@2x.jpg",
									"_DSF6026@2x.jpg",
							//		"_DSF6032@2x.jpg",
									"_DSF6039@2x.jpg",
									"_DSF6057@2x.jpg",
									"_DSF6069@2x.jpg",
							//		"_DSF6080@2x.jpg",
									"_DSF6084@2x.jpg",
							//		"_DSF6099@2x.jpg",
							//		"_DSF6101@2x.jpg",
									"_DSF6105@2x.jpg",
									"_DSF6118@2x.jpg",
									"_DSF6125@2x.jpg",
									"_DSF6149@2x.jpg",
							//		"_DSF6150@2x.jpg",
									"_DSF6161@2x.jpg",
									"_DSF6165@2x.jpg",
									"_DSF6167@2x.jpg",
									"_DSF6174@2x.jpg",
									"_DSF6199@2x.jpg",
							//		"_DSF6200@2x.jpg",
									"_DSF6205@2x.jpg",
							//		"_DSF6221@2x.jpg",
							//		"_DSF6224@2x.jpg",
									"_DSF6226@2x.jpg",
							//		"_DSF6230@2x.jpg",
							//		"_DSF6234@2x.jpg",
							//		"_DSF6238@2x.jpg",
							//		"_DSF6240@2x.jpg",
							//		"_DSF6243@2x.jpg",
									"_DSF6246@2x.jpg",
							//		"_DSF6247@2x.jpg",
									"_DSF6265@2x.jpg",
									"_DSF6292@2x.jpg",
							//		"_DSF6293@2x.jpg",
									"_DSF6315@2x.jpg",
									"_DSF6304@2x.jpg",
									"_DSF6320@2x.jpg",
							//		"_DSF6328@2x.jpg",
									"_DSF6330@2x.jpg",
							//		"_DSF6338@2x.jpg",
									"_DSF6344@2x.jpg",
							//		"_DSF6414@2x.jpg",
									"_DSF6423@2x.jpg",
									"_DSF6432@2x.jpg",
							//		"_DSF6460@2x.jpg",
							//		"_DSF6461@2x.jpg",
									"_DSF6464@2x.jpg",
							//		"_DSF6467@2x.jpg",
									"_DSF6475@2x.jpg",
							//		"_DSF6482@2x.jpg",
							//		"_DSF6485@2x.jpg",
							//		"_DSF6493@2x.jpg",
							//		"_DSF6504@2x.jpg",
							//		"_DSF6505@2x.jpg",
									"_DSF6517@2x.jpg",
							//		"_DSF6524@2x.jpg"				
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