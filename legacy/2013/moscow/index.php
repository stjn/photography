<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Photos from Moscow | Stijn Out Photography</title>
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
				.stamp{
				width:200px;
				height: 178px;
				background-image: url("stamp200.png");
				}
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
		
		<!-- Google Analytics -->
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
		<script src="https://stijn.cc/resources/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="https://stijn.cc/resources/jquery.lazyload.min.js" type="text/javascript"></script>
		<script src="https://stijn.cc/resources/jquery.stellar.min.js" type="text/javascript"></script>
		<script src="https://stijn.cc/resources/iscroll4.js" type="text/javascript"></script>
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
			<div class="location">Moscow</div>
			<div class="info">Words and photographs by Stijn Out</div>
		</div>
		<div id="story">
			<div class="heading">
				A Soviet city in a post-Soviet world
				<div class="stamp"></div>
			</div>
			<div class="intro">
				<p><strong>July 2013</strong> &mdash; In the company of nine fellow students, I recently embarked on a field trip to Moscow, Russia. We were there to observe the chal&shy;lenges a place like Moscow poses to urban planners and social scien&shy;tists. Local students and experts kindly led us around their city, while telling us about its past and present.</p>
				<p>That past, we soon noticed, is deeply en&shy;grained in Moscow's physical appear&shy;ance. While the USSR col&shy;lapsed 22 years ago, its legacy is still visibly present today. Stalin's mega&shy;lo&shy;manic sky&shy;scrapers (the "Seven Sis&shy;ters") continue to dom&shy;inate most of Moscow's sky&shy;line and fa&shy;cades still prom&shy;i&shy;nently fea&shy;ture ham&shy;mers and sickles. Perhaps most ob&shy;viously: the city still sports 82 statues of Vladimir Lenin.</p>
				<p>Present-day Moscow faces issues like pol&shy;lution, cor&shy;ruption and con&shy;gestion. The city's road ahead thus won't be an easy one, but there are signs of hope. For every eight lane boulevard cutting off an artery of pedes&shy;trian flow, there is a place like Gorki Park where human beings can roam freely. For every aban&shy;doned factory with conta&shy;minated soil, there is a community like Strelka where creative minds can flourish. For every rude Musco&shy;vite bumping into you on the side&shy;walk, there is a bright young mind willing to look forward.</p>
				<p>Visually, Moscow is a con&shy;coction of splen&shy;dour and decay. Ladas and Lexuses. Cracked pave&shy;ment and ball&shy;room metro stations. Con&shy;crete pre&shy;fab tower&shy;blocks and golden&shy;ly domed cathe&shy;drals. Moscow is a city of con&shy;trasts, and maybe that's what makes it so inter&shy;esting. Especially for a photographer.</p>
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
					    echo "	<img  src='" . $phoot . "'  alt='' width='" . $widthH . "' height='" . $heightH . "'/>
					    		<noscript><img src='" . $phoot . "' alt='' width='" . $widthH . "' height='" . $heightH . "'/></noscript>" . "\n";
					}
				}	

				// Render photos																
				renderPhotos(array(	"_DSF0539.jpg",
									"_DSF0536.jpg",
									"_DSF0542.jpg",
									"_DSF0543.jpg",
									"_DSF0544.jpg",
									"_DSF0545.jpg",
									"_DSF0546.jpg"
									));
				halfWidth("_DSF0552.jpg", "_DSF0557.jpg");
				renderPhotos(array(	"_DSF0556.jpg",
									"_DSF0559.jpg",
									"_DSF0560.jpg",
									"_DSF0566.jpg",
									"_DSF0570.jpg",
									"_DSF0574.jpg"
									));
				halfWidth("_DSF0575.jpg", "_DSF0586.jpg");
				renderPhotos(array(	"_DSF0581.jpg",
									"_DSF0583.jpg",
									"_DSF0584.jpg",
									"_DSF0587.jpg",
									"_DSF0588.jpg",
									"_DSF0590.jpg",
									"_DSF0591.jpg",
									"_DSF0592.jpg",
									"_DSF0594.jpg",
									"_DSF0596.jpg",
									"_DSF0598.jpg",
									"_DSF0604.jpg",
									"_DSF0606.jpg",
									"_DSF0614.jpg",
									"_DSF0609.jpg",
									"_DSF0529.jpg",
									"_DSF0620.jpg",
									"_DSF0624.jpg",
									"_DSF0644.jpg",
									"_DSF0640.jpg",
									"_DSF0641.jpg",
									"_DSF0647.jpg"
									));
				halfWidth("_DSF0654.jpg", "_DSF0667.jpg");
				renderPhotos(array(	"_DSF0659.jpg",
									"_DSF0661.jpg",
									"_DSF0664.jpg",
									"_DSF0665.jpg"
									));
				halfWidth("_DSF0666.jpg", "_DSF0672.jpg");
				renderPhotos(array(	"_DSF0670.jpg",
									"_DSF0668.jpg",
									"_DSF0669.jpg",
									"_DSF0638.jpg",
									"_DSF0673.jpg",
									"_DSF0675.jpg",
									"_DSF0678.jpg",
									"_DSF0682.jpg",
									"_DSF0688.jpg",
									"_DSF0689.jpg",
									"_DSF0691.jpg",
									"_DSF0692.jpg",
									"_DSF0693.jpg",
									"_DSF0694.jpg",
									"_DSF0687.jpg",
									"_DSF0696.jpg",
									"_DSF0706.jpg",
									"_DSF0707.jpg"
									));
				halfWidth("_DSF0709.jpg", "_DSF0710.jpg");
				renderPhotos(array(	"_DSF0712.jpg",
									"_DSF0715.jpg",
									"_DSF0716.jpg"
									));
				halfWidth("_DSF0705.jpg", "_DSF0717.jpg");
				renderPhotos(array(	"_DSF0718.jpg",
									"_DSF0722.jpg",
									"_DSF0724.jpg",
									"_DSF0726.jpg",
									"_DSF0727.jpg",
									"_DSF0731.jpg",
									"_DSF0733.jpg",
									"_DSF0736.jpg",
									"_DSF0739.jpg",
									"_DSF0741.jpg",
									"_DSF0742.jpg",
									"_DSF0745.jpg",
									"_DSF0746.jpg",
									"_DSF0747.jpg",
									"_DSF0750.jpg",
									"_DSF0751.jpg",
									"_DSF0752.jpg",
									"_DSF0754.jpg",
									"_DSF0755.jpg",
									"_DSF0756.jpg",
									"_DSF0763.jpg",
									"_DSF0782.jpg",
									"_DSF0788.jpg",
									"_DSF0790.jpg",
									"_DSF0794.jpg"
									));
				halfWidth("_DSF0792.jpg", "_DSF0737.jpg");		
				renderPhotos(array(	"_DSF0814.jpg",
									"_DSF0817.jpg",
									"_DSF0818.jpg",
									"_DSF0820.jpg",
									"_DSF0825.jpg",
									"_DSF0827.jpg",
									"_DSF0828.jpg",
									"_DSF0830.jpg",
									"_DSF0834.jpg",
									"_DSF0836.jpg",
									"_DSF0838.jpg",
									"_DSF0841.jpg",
									"_DSF0844.jpg",
									"_DSF0845.jpg",
									"_DSF0847.jpg",
									"_DSF0860.jpg"
									));
				halfWidth("_DSF0866.jpg", "_DSF0867.jpg");
				renderPhotos(array(	"_DSF0871.jpg",
									"_DSF0875.jpg",
									"_DSF0878.jpg"
									));
				halfWidth("_DSF0880.jpg", "_DSF0881.jpg");
				renderPhotos(array(	"_DSF0882.jpg",
									"_DSF0883.jpg",
									"_DSF0800.jpg",
									"_DSF0805.jpg",	
									"_DSF0808.jpg",
									"_DSF0812.jpg",
									"_DSF0889.jpg",
									"_DSF0893.jpg",
									"_DSF0895.jpg",
									"_DSF0896.jpg",
									"_DSF0904.jpg",
									"_DSF0905.jpg",
									"_DSF0906.jpg",
									"_DSF0910.jpg",		
									"_DSF0919.jpg",
									"_DSF0921.jpg",
									"_DSF0922.jpg",
									"_DSF0925.jpg",
									"_DSF0929.jpg",
									"_DSF0931.jpg",
									"_DSF0934.jpg",
									"_DSF0914.jpg",		
									"_DSF0945.jpg",
									"_DSF0944.jpg",
									"_DSF0946.jpg",
									"_DSF0953.jpg",
									"_DSF0954.jpg",
									"_DSF0960.jpg",
									"_DSF0961.jpg",
									"_DSF0963.jpg",
									"_DSF0966.jpg"
									));
				halfWidth("_DSF0964.jpg", "_DSF0968.jpg");
				renderPhotos(array(	"_DSF0967.jpg",
									"_DSF0986.jpg",
									"_DSF0977.jpg",
									"_DSF0979.jpg"
									));
				halfWidth("_DSF1003.jpg", "_DSF0999.jpg");
				renderPhotos(array(	"_DSF1001.jpg",
									"_DSF0993.jpg",
									"_DSF1005.jpg",
									"_DSF1006.jpg"
									));
				halfWidth("_DSF1007.jpg", "_DSF1010.jpg");
				renderPhotos(array(	"_DSF1011.jpg",
									"_DSF1012.jpg",
									"_DSF1017.jpg"
									));
				halfWidth("_DSF1020.jpg", "_DSF1022.jpg");
				renderPhotos(array(	"_DSF1023.jpg"));
				halfWidth("_DSF1033.jpg", "_DSF1037.jpg");
				renderPhotos(array(	"_DSF1034.jpg",
									"_DSF1043.jpg",
									"_DSF1047.jpg",
									"_DSF5002.jpg"
									));
				halfWidth("_DSF5004.jpg", "_DSF5018.jpg");
				renderPhotos(array(	"_DSF5012.jpg",
									"_DSF5016.jpg",
									"_DSF5020.jpg",
									"_DSF5022.jpg",
									"_DSF5023.jpg",
									"_DSF5028.jpg",
									"_DSF5029.jpg",
									"_DSF5031.jpg",
									"_DSF5037.jpg",
									"_DSF5046.jpg"
									));
				halfWidth("_DSF5059.jpg", "_DSF5067.jpg");
				renderPhotos(array(	"_DSF5066.jpg",
									"_DSF5068.jpg",
									"_DSF5069.jpg",
									"_DSF5074.jpg",
									"_DSF5076.jpg",
									"_DSF5078.jpg",
									"_DSF5080.jpg"
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
			var map = L.mapbox.map('map', 'stijn.map-v8yvlbdu', {zoomControl: false});
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