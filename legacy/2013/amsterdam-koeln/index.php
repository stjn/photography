<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Amsterdam + K&#246;ln, 2013</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=1100"/>
		<link rel="icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
		<link rel="shortcut icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
		<script type="text/javascript" src="http://use.typekit.com/fxj7glb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<style type="text/css">
			body{
				background-color:#fff;
				margin:0;
				}
		
			div.loading-invisible{
				display:none;
				}
			
			div.loading-visible{
			    display:block;
			    position:fixed;
			    top:0;
			    left:0;
			    width:100%;
			    height:100%;
			    text-align:center;
			    z-index:5000;
			    font-family:  Helcetica Neue, Helvetica, Arial, sans-serif;
				font-size: 20px;
				font-weight: 200;
			    color:#000;
			    background-color:#fff;
			    padding-top:25%;
			    }  
			  
			#photos img{			margin-bottom: 100px;}
			#photos img+img {		margin-top: 0px;} 
			#photos .duo img+img{	margin-bottom: 0;}
			#photos .duo img{		margin-top:0px;margin-bottom: 100px;}
			
			.location{
				font-family: "ambroise-std", Times New Roman, Times, Georgia, serif;
				font-size: 220px;
				margin:-50px auto 0 auto;
				color:#000;
				font-weight: 400;
				width:1000px;
				text-align: center;
				}
				
			.second_locus{
		  margin-bottom:200px;
		  margin-top:300px;
		  width:620px;
	  }	
			
			
			.info{
				font-family:  Helcetica Neue, Helvetica, Arial, sans-serif;
				font-size: 20px;
				margin:-30px auto 0 auto;
				color:#000;
				text-shadow: 0px 2px 0px #eee;
				font-weight: 200;
				width:620px;
				text-shadow: none;
				}
			
			#blackbox{
				width:100%;
				margin-top:100px;
				padding:50px 0;
				color:#fff;
				background-color:#000;
				text-align: center;
				font-family:  Helcetica Neue, Helvetica, Arial, sans-serif;
				font-size: 15px;
				font-weight: 200;
				text-shadow: none;
				}  
			
			#blackbox a{color:#fff;text-decoration: none;}
			#blackbox a:hover{text-decoration: underline;} 
			
			#brochure{
				position:absolute;
				top:50%;
				left:50%;
				height:240px;
				margin-top:-120px;
				margin-left:-500px;
				width:1000px;
				z-index:-1;
				text-align: center;
				}
			
			#photos{
				z-index:11;
				margin-top:900px;
				width:1050px;
				margin-left:auto;
				margin-right:auto;
				}
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
				width: 10px;
				background-color: #000;
				}  
			
			::-webkit-scrollbar-thumb:vertical {
				background-color: #fff;
				height: 50px;
				}
			
			.first{	float:left;}
			.second{float:right;}
			
			.clear{display: block;clear: both;height: 5px;width:100%;}   
			
			.lazy {display: none;}
				
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
		<script src="http://stijn.cc/resources/jquery.lazyload.min.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- Back to top anchor -->
		<div name="top"></div>
		
		<!-- Loading screen -->
		<div id="loading" class="loading-invisible">
		  <div><img src="http://stijnout.com/other/loading.gif" style="height:24px;width:24px;background-color:#fff;" alt="Loading"/></div>
		  <p>Developing photos&hellip;</p>
		</div>
		<script type="text/javascript">
		  document.getElementById("loading").className = "loading-visible";
		  var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
		  var oldLoad = window.onload;
		  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
		  window.onload = newLoad;
		</script>
		
		<!-- Photoshoot introduction-->
		<div id="brochure">
			<div class="location">Amsterdam</div>
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
					$widthTotal = 1050;
					$widthGutter = 10;
					// Calculations
					list($widthA, $heightA) = getimagesize($imageA);
					$ratioA = $widthA/$heightA;
					list($widthB, $heightB) = getimagesize($imageB);
					$ratioB = $widthB/$heightB;
					$height = ($widthTotal - $widthGutter) / ( $ratioA + $ratioB );
					$height = round($height,0);	
					$finalwidthA = round(($height*$ratioA),0);
					$finalwidthB = round(($height*$ratioB),0);
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
			<div class='clear'/></div>" . "\n";
				}
				
				// Set up function: full width photo
				function fullWidth($imageH){
					list($widthH, $heightH) = getimagesize($imageH);
					echo "		<img class='lazy' data-original='" . $imageH . "' src='http://stijn.cc/resources/images/white.jpg' alt='' width='" . $widthH . "' height='" . $heightH . "'/><noscript><img src='" . $imageH . "' alt='' width='" . $widthH . "' height='" . $heightH . "'/></noscript>" . "\n";
				}
					
			fullWidth("_7K10575_edit.jpg");
			fullWidth("_7K10576.jpg");
			fullWidth("_7K10579.jpg");
			halfWidth("_7K10580.jpg", "_7K10581.jpg");
			fullWidth("_7K10585.jpg");
			fullWidth("_7K10588.jpg");
			fullWidth("_7K10590.jpg");
			fullWidth("_7K10591l.jpg");
			fullWidth("_7K10598.jpg");
			fullWidth("_7K10600.jpg");
			fullWidth("_7K10601.jpg");
			fullWidth("_7K10605.jpg");
			fullWidth("_7K10608.jpg");
			fullWidth("_7K10613.jpg");
		//	fullWidth("_7K10620.jpg");
			fullWidth("_7K10633.jpg");
			fullWidth("_7K10642.jpg");
			fullWidth("_7K10647.jpg");
			fullWidth("_7K10652.jpg");
			fullWidth("_7K10655.jpg");
			fullWidth("_7K10656.jpg");
			fullWidth("_7K10666.jpg");
			fullWidth("_7K10667l.jpg");
			fullWidth("_7K10671.jpg");
			fullWidth("_7K10675.jpg");
			fullWidth("_7K10676.jpg");
			halfWidth("_7K10677.jpg","_7K10680.jpg");
			fullWidth("_7K10685.jpg");
			fullWidth("_7K10695.jpg");
			fullWidth("_7K10697.jpg");
			fullWidth("_7K10704.jpg");
			fullWidth("_7K10717.jpg");
			echo('<div class="location second_locus">K&#246;ln</div>');
			fullWidth("_7K10719.jpg");
			fullWidth("_7K10721.jpg");
			fullWidth("_7K10726.jpg");
			fullWidth("_7K10727.jpg");
			fullWidth("_7K10733.jpg");
			fullWidth("_7K10739.jpg");
			fullWidth("_7K10744.jpg");
			fullWidth("_7K10747.jpg");
			fullWidth("_7K10756.jpg");
			fullWidth("_7K10758.jpg");
			fullWidth("_7K10762.jpg");
			fullWidth("_7K10765.jpg");
			fullWidth("_7K10770.jpg");
			fullWidth("_7K10775.jpg");
		//	fullWidth("_7K10781.jpg");
			fullWidth("_7K10785.jpg");
			fullWidth("_7K10792.jpg");
			fullWidth("_7K10795.jpg");
			fullWidth("_7K10808.jpg");
			fullWidth("_7K10809l.jpg");
			fullWidth("_7K10828.jpg");
			fullWidth("_7K10830.jpg");
			fullWidth("_7K10832.jpg");
			fullWidth("_7K10837.jpg");
			fullWidth("_7K10840.jpg");
			fullWidth("_7K10852.jpg");	
			fullWidth("_7K10845.jpg");					
			?>		
		</div>
		<div id="blackbox">
			<a href="#">Back to top</a><br/><br/>
			<a href="AmsterdamKoeln2013.zip">Download all photos (16MB ZIP)</a>
		</div>
		<script type="text/javascript">
			$("img.lazy").show().lazyload({ threshold : 3000});
		</script>
	</body>
</html>