<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Photos from Brussels | Stijn Out Photography</title>

		<link rel="icon" type="image/png" href="../../other/nikon.png" />
		<link rel="shortcut icon" type="image/png" href="../../other/nikon.png" />
		
		<style type="text/css">
			
			body{
				margin:0;
				padding:0;
				}
			
			#photos{
				width:1000px;
				margin: 0 auto 0 auto;
				}
			
			#photos img{
				margin-bottom:20px;
				width:100%;
				height: auto;
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
	</head>
	<body>
		<div id="title">
			<b>Brussels</b><br/>
			October 2011
		</div>	
		<div id="photos">		
			<?php 
				$photostream = glob("photos/*.jpg");					
				foreach ($photostream as $photo){
					list($width, $height) = getimagesize($photo);
					echo '<img src="' . $photo . '" alt="" width="' . $width . '" height="' . $height . '"/>';
				}
			?>
		</div>
	</body>
</html>