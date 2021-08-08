<?php 
	$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if($photoPage){
		$fbTitle = $placename . ' | ';
		$urlPrepend = $nested . '../../'; 
	  	echo '<link href="https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.css" rel="stylesheet"/>';
	  	$fbPhotos = glob('i/*.jpg', GLOB_BRACE);
	  	echo '<meta property="og:image" content="'.$currentUrl.$fbPhotos[1].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[2].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[3].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[4].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[5].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[6].'">
	  	<meta property="og:image" content="'.$currentUrl.$fbPhotos[7].'">
	  	<meta property="og:description" content="'.$tagline.'" />';
	  }
	  else{
		  echo '<meta property="og:description" content="Stijn creates travel impressions of various locations, all over the globe." />';
	  }
	   ?>	
<meta property="og:title" content="<?php echo $fbTitle;?>Stijn Out Photography" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Stijn Out Photography" />
<meta property="og:url" content="<?php echo $currentUrl;?>" />	  
	  
<!-- Favicons -->
<link rel="icon" type="image/png" href="<?php echo $urlPrepend;?>architecture/images/nikon.png"/>
<link rel="shortcut icon" type="image/png" href="<?php echo $urlPrepend;?>architecture/images/nikon.png"/>	

<!-- CSS & Font Awesome -->
<link href="<?php echo $urlPrepend;?>architecture/css/style-beta.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />

<!-- jQuery, HTML5Shiv & Typekit -->
<script src="<?php echo $urlPrepend;?>architecture/js/jquery.1.11.1-shiv.3.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//use.typekit.net/gop3wud.js"></script> <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- Lazyload & Mapbox -->
<?php if($photoPage){ echo
'<script src="'.$nested.'../../architecture/js/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="https://api.tiles.mapbox.com/mapbox.js/v2.1.6/mapbox.js"></script>'; }?>

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-19002091-1"]);
  _gaq.push(["_trackPageview"]);
  (function() {
    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>