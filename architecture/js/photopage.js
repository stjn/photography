var loadingThreshold = 5000;

// Map: render map
if(!devMode){
	var map = L.mapbox.map('map', mapId, {scrollWheelZoom: false, zoomControl: false});
		map.dragging.disable();
		map.touchZoom.disable();
		map.doubleClickZoom.disable();
		map.scrollWheelZoom.disable(); 
	var mapBottom = L.mapbox.map('map-bottom', mapId, {scrollWheelZoom: false, zoomControl: false});	
		mapBottom.dragging.disable();
		mapBottom.touchZoom.disable();
		mapBottom.doubleClickZoom.disable();
		mapBottom.scrollWheelZoom.disable();
}

// Jquery
$(document).ready(function() {

	if(friendZone){
			friendUrl = document.URL + "friends"
			window.history.replaceState("", document.title, friendUrl);
		}

	//Lazyload images, based on window width
	$("img.photo").show().lazyload({ threshold : loadingThreshold});
	
	// Render opening screen in correct size
	window_size = $(window).height();
	window_width = $(window).width();
	
	// Calculate brochure
	var locationWidth = function(){ return $("#location").width(); };
	var locationFontsize = 200;
	var maxLocationwidth = window_width * 0.7;

	while(locationWidth() > maxLocationwidth && locationFontsize > 20){
		locationFontsize -= 10;
		$("#location").css("font-size", locationFontsize + "px");
		if(locationFontsize == 100){
			$("#location").css("letter-spacing", "normal");	
		}
	}
	
	setTimeout(function (){
	//	finalWidth = $("#location").delay(100).width();
	    $("#container-loc").css("width", $("#location").width() + "px");
	    if(locationFontsize !== 200){
	   		borderWidth = locationFontsize * 0.15;
	   		coordBottom = borderWidth * (-2) - 20;
	   		coordRight = borderWidth * (-0.5);
		    $("#container-loc").css("border", borderWidth + "px solid #fff");
		    $("#coords").css("bottom", coordBottom+"px").css("right", coordRight+"px");
	    }
    }, 200);
	
	brochureSize = $("#brochure").height();
	topping = (window_size - brochureSize) / 2;
	brochure_height = window_size - topping;
	window_extend = window_size + 70;
	easyStart = window_extend + 200;
	catalogHeight = $("#blackbox").height() + 100;

	$('#map').css('height', window_extend + 'px');
	$('#map-bottom').css('height', catalogHeight + 'px');
	$('#brochure').css('padding-top', topping + 'px');
	$('#brochure').css('padding-bottom', topping + 'px');
	$('#fade').css('top', window_extend + 'px');
	$(window).load(function(){
		$('#loading-spinner').delay(500).fadeOut(500);
        $('#loading').delay(1000).fadeOut(750, function(){
            setTimeout(function (){
		       $("#starthere").show();
	        }, 1000);
        });
	});

	var scrollStarted = false;
	var backToTop = false;
	var backToTopAnimation = false;
	var metaCount = $('#meta tr').length;
	var metaDelay = 500;
	$(window).scroll(function() {
		if(window_width >= 1580 && !scrollStarted){
			if($(window).scrollTop() > 400){
				$("#meta").show();
				for(var i = 1; i <= metaCount; i++){
					$("#meta-row"+[i]).delay(metaDelay).fadeIn();	
					metaDelay += 200;
				}
				scrollStarted = true;
				}
		}
        if (!backToTop && !backToTopAnimation && $(window).scrollTop() > easyStart) {
            $("#backhome").fadeIn();
            $('#backtotop').delay(200).fadeIn();
            backToTop = true;
        } 
        else if(backToTop && !backToTopAnimation && $(window).scrollTop() < easyStart){
            $('#backtotop').fadeOut();
            backToTop = false;
        }
    });

	$("#starthere").click(function(){
		$("html, body").animate({ scrollTop: window_size}, 1000);
	});
	
	$("#backtotop").click(function(){	
		backToTopAnimation = true;
		$('#loading').css("background-color", "#fff");
		$(this).fadeOut();
		$('#loading').fadeIn(function(){
			$("html, body").animate({ scrollTop: window_extend}, 0, function(){
				$('#loading').fadeOut(function(){
					// Stop animation on user scrolling
					$("html, body").bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){
						$(this).stop();
						$(this).unbind("scroll mousedown DOMMouseScroll mousewheel keyup");
						backToTopAnimation = false;
					});
					// Scroll to top
					$("html, body").animate({ scrollTop: 0}, 1000, function(){
						backToTopAnimation = false;
						$(this).unbind("scroll mousedown DOMMouseScroll mousewheel keyup");
					});
				});
			});
		});
		
		backToTop = false;
	});

});