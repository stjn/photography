<?php 
	$galleryItems = 0;
	function gallery($location, $country, $date, $target, $focus, $focusImage, $smallerImage, $description){
		global $galleryItems;
		global $nested; 
		global $photoPage;

		// Compare current path with path of photolog page entry. If not equal, print thumb. This prevents a thumb from showing up on its own page.
		$currentPage = substr(getcwd(), strlen($target) * -1);
		if($target !== $currentPage){
			if($photoPage){
				echo'<a href="'.$nested.'../../'.$target.'"><img src="'.$nested.'../../'.$target.'/i/'.$smallerImage.'" height="320" width="480" alt="'.$location.'"/>
				    	<div class="catalog-location">'.$location.'</div>
					 </a>
					 ';
			}	 
			else{
				
					echo '<article class="event">';
							if($galleryItems === 0 || $focus){
								echo '<a class="focus" href="'.$target.'" title="'.$location.' | Stijn Out Photography"><img src="'.$target.'/i/'.$focusImage.'" alt="'.$location.', photographed by Stijn Out"/></a>';
							}
					echo '	<div class="event-base">
								<section class="event-thumb">
									<a href="'.$target.'" title="'.$location.' | Stijn Out Photography"><img src="'.$target.'/i/'.$smallerImage.'" alt="'.$location.', photographed by Stijn Out"/></a>
								</section>
								<aside class="date">'.$date.'</aside>
								<section class="event-info">
									<hgroup>';
					if(!empty($country)){
						echo 			'<h2 class="tile-country">'.$country.'</h2>';
					}
					echo   				'<h1 class="tile-location"><a href="'.$target.'" title="'.$location.' | Stijn Out Photography">'.$location.'</a></h1>';
					if(!empty($description)){
						echo 		'</hgroup>
									<div class="tile-description">'.$description.'</div>';
					}
					echo	'	</section>
								<div class="clearfix"></div>
								<div class="tile-view">
									<a href="'.$target.'" title="'.$location.' | Stijn Out Photography">View photos <i class="fa fa-angle-double-right"></i></a>
								</div>
								
							</div>
						  </article>';
				}

			}
			$galleryItems++;
		}	 
					
	if($photoPage){					
		echo '<div id="newdestination">Pick a new destination</div>
		<div id="recommendations">
		';
	}
	
	// Render gallery elements							
	// 		Location				Country				Date				Folder location				Focus		Focus image			Smaller image		Description
	gallery("Edinburgh",			"Scotland", 		"July 2014", 		"2014/edinburgh",			true,		"_DS11467.jpg",		"_DS11192.jpg",		"Caledonian climbs and Victorian glory");
	gallery("Glasgow",				"Scotland", 		"July 2014", 		"2014/glasgow",				false,		"_DS10433.jpg",		"_DS10597.jpg",		"An enchanting university, a visit to the dead, and a hint of San Francisco");
	gallery("Loch Lomond",			"Scotland", 		"July 2014", 		"2014/loch-lomond",			true,		"_DS10821.jpg",		"_DS10834.jpg",		"On the shores of Scotland's largest lake");
	gallery("Antwerp", 				"Belgium", 			"June 2014", 		"2014/antwerp",				false,		"_DS10173.jpg",		"_DS10198.jpg",		"Street scenes from the city of diamonds");
	gallery("Warsaw", 				"Poland", 			"April 2014", 		"2014/warsaw",				true,		"_DSF9623.jpg",		"_DSF9749.jpg",		"Easter weekend in the Polish capital");
//	gallery("Friesland & Groningen","The Netherlands",	"Spring 2014", 		"2014/friesland-groningen",	false,		"_DS10063.jpg",		"_DS10104.jpg",		"Touring the Netherlands' northernmost provinces");
//	gallery("Amsterdam", 			"The Netherlands",	"February 2014", 	"2014/amsterdam/1",			false,		"",					"_DSF9467.jpg",		"A closer look at the city's storefronts");
	gallery("Nara", 				"Japan", 			"November 2013",	"2013/nara",				false,		"",					"_DSF7166.jpg",		"Fall makes its entrance in Japan's former capital");
	gallery("Kyoto", 				"Japan", 			"October 2013", 	"2013/kyoto",				false,		"",					"_DSF6731.jpg",		"A vast cemetery in the City of Ten Thousand Shrines");
	gallery("Osaka", 				"Japan", 			"October 2013", 	"2013/osaka",				true,		"_DSF6546.jpg",		"_DSF7010.jpg",		"Exploring the streets of the biggest city in the Kansai region");
	gallery("Kobe", 				"Japan", 			"October 2013", 	"2013/kobe",				false,		"",					"_DSF6674.jpg",		"Elevation on the shore of Osaka Bay");
	gallery("Seoul", 				"South Korea", 		"October 2013", 	"2013/seoul",				true,		"_DSF5478.jpg",		"_DSF5897.jpg",		"A metropolis of wood and glass");
	gallery("London", 				"England",		 	"September 2013", 	"2013/london",				false,		"",					"_DSF5259.jpg",		"A quiet morning in Camden Town");
	gallery("Moscow", 				"Russia", 			"July 2013", 		"2013/moscow",				true,		"_DSF0742.jpg",		"_DSF1005.jpg",		"Domes, decay, and monolithic architecture");
//	gallery("Amsterdam", 			"The Netherlands",	"July 2013", 		"2013/amsterdam/5",			false,		"",					"_DSF0322.jpg",		"An afternoon in the canal belt");
//	gallery("Amsterdam", 			"The Netherlands", 	"July 2013", 		"2013/amsterdam/4",			false,		"",					"_DSF0266.jpg",		"The museum quarter at dusk");
//	gallery("Amsterdam", 			"The Netherlands", 	"July 2013", 		"2013/amsterdam/3",			false,		"",					"_DSF0107.jpg",		"Summer in the city");
//	gallery("Amsterdam", 			"The Netherlands", 	"April 2013",		"2013/amsterdam/2",			false,		"",					"_7K10515.jpg",		"Queen's Day preparations");
//	gallery("Amstelland", 			"The Netherlands", 	"January 2013", 	"2013/amstelland",			false,		"",					"_7K09775.jpg",		"Water, snow, and asphalt");
//	gallery("Amsterdam", 			"The Netherlands", 	"2013", 			"2013/amsterdam/1",			false,		"",					"",					"");
//	gallery("London", 				"United Kingdom", 	"2012", 			"2012/film/london",			false,		"",					"",					"");
//	gallery("London", 				"United Kingdom", 	"2012", 			"2012/london",				false,		"",					"",					"");
//	gallery("Cambridge", 			"United Kingdom", 	"October 2012", 	"2012/cambridge",			false,		"",					"_DSC8643.jpg",		"Bicycles and masonry");
//	gallery("France + Spain", 		"", 				"2012", 			"2012/roadtrip",			false,		"",					"",					"");
//	gallery("France + Spain", 		"", 				"2012", 			"2012/film/france-spain",	false,		"",					"",					"");
//	gallery("Brussels", 			"Belgium", 			"2012", 			"2012/film/brussels",		false,		"",					"",					"");
//	gallery("Prague", 				"Czech Republic", 	"March 2012", 		"2012/prague",				false,		"",					"_DSC6301.jpg",		"");
//	gallery("Berlin", 				"Germany", 			"2011", 			"20111219",					false,		"",					"",					"");
//	gallery("Brussels", 			"Belgium", 			"2011", 			"20111028",					false,		"",					"",					"");
//	gallery("Japan", 				"", 				"2011", 			"japan35mm",				false,		"",					"",					"");
//	gallery("Japan", 				"", 				"2011", 			"japandigital",				false,		"",					"",					"");
//	gallery("Japan", 				"", 				"2011", 			"japaninstax",				false,		"",					"",					"");
//	gallery("Scheveningen",			"The Netherlands",	"2011", 			"20110624",					false,		"",					"",					"");
//	gallery("Texel", 				"The Netherlands", 	"2011", 			"20110527",					false,		"",					"",					"");
	
	?>