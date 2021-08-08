<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Photos from Cambridge | Stijn Out Photography</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=1100"/>
<link rel="icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
<link rel="shortcut icon" type="image/png" href="http://stijnout.com/other/nikon.png" />
<script type="text/javascript" src="http://use.typekit.com/fxj7glb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<style type="text/css">
		body{background-color:#fff;margin:0;}

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
	  
	  #photos img{margin-bottom: 50px;}
	  
	  #photos img+img {
	  margin-top: 50px;} 

	  #photos .duo img+img{margin-bottom: 0;}
	  #photos .duo img{margin-top:50px;margin-bottom: 100px;}
	  
	  .location{
		  font-family: "ambroise-std", Times New Roman, Times, Georgia, serif;
		  font-size: 220px;
		  margin:-50px auto 0 auto;
		  color:#000;
		  font-weight: 400;
		  width:1000px;
		  text-align: center;
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
		  width:1000px;
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
        
     .first{
			float:left;
		}
		
		.second{
			float:right;
		}
		.clear{display: block;clear: both;height: 5px;width:100%;}   
		
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
		<div class="location">Cambridge</div>
		<div class="info">Digital photography by Stijn Out</div>
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
			<img src='" . $imageA . "' alt='' width='" . $finalwidthA . "' height='" . $height . "' class='first'/>
			<img src='" . $imageB . "' alt='' width='" . $finalwidthB . "' height='" . $height . "' class='second'/>
		</div>
		<div class='clear'/></div>" . "\n";
			}
			
			// Set up function: full width photo
			function fullWidth($imageH){
				list($widthH, $heightH) = getimagesize($imageH);
				echo "		<img src='" . $imageH . "' alt='' width='" . $widthH . "' height='" . $heightH . "'/>" . "\n";
			}
			
			// Render photos
			fullWidth("1/_DSC8643.jpg");
			halfWidth("1/_DSC8448.jpg", "1/_DSC8628.jpg");
			fullWidth("1/_DSC8587.jpg");
			halfWidth( "1/_DSC8540.jpg", "1/_DSC8553.jpg");
			fullWidth("1/_DSC8507-8.jpg");
			halfWidth("1/_DSC8487.jpg", "1/_DSC8600.jpg");
			fullWidth("1/_DSC8607.jpg");
			halfWidth("1/_DSC8560.jpg", "1/_DSC8666.jpg");
			fullWidth("1/_DSC8626.jpg");
			halfWidth("1/_DSC8474.jpg", "1/_DSC8532.jpg");
			
					
		?>		
	</div>
	<div id="blackbox">
		<a href="#">Back to top</a><br/><br/>
		<a href="http://stijnout.com/photolog">Return to photolog</a>
	</div>
</body>
</html>