<?php 

	function gallery($location, $target){
		echo'<a href="http://stijnout.com/photolog/'.$target.'"><img src="http://stijnout.com/photolog/'.$target.'/thumb.jpg" height="200" width="300" alt="'.$location.'"/>
		    	<div class="rec-name">'.$location.'</div>
			 </a>';
	}
						
	echo '<div id="newdestination">Pick a new destination</div><div id="recommendations">';
							
	// List of gallery elements	
	gallery("Osaka", "2013/osaka");
	gallery("Kyoto", "2013/kyoto");
	gallery("Nara", "2013/nara");
	gallery("Kobe", "2013/kobe");
	gallery("Seoul", "2013/seoul");
	gallery("London", "2013/london");
	gallery("Moscow", "2013/moscow");
	gallery("Amsterdam", "2013/amsterdam/5");
	gallery("Amsterdam", "2013/amsterdam/4");
	gallery("Amsterdam", "2013/amsterdam/3");
	gallery("Amsterdam", "2013/amsterdam/2");
	gallery("Ouderkerk", "2013/ouderkerk");
	gallery("Amsterdam", "2013/amsterdam/1");
	gallery("London", "2012/film/london");
	gallery("London", "2012/london");
	gallery("Cambridge", "2012/cambridge");
	gallery("France + Spain", "2012/roadtrip");
	gallery("France + Spain", "2012/film/france-spain");
	gallery("Brussels", "2012/film/brussels");
	gallery("Prague", "20120328");
	gallery("Berlin", "20111219");
	gallery("Brussels", "20111028");
	gallery("Japan", "japan35mm");
	gallery("Japan", "japandigital");
	gallery("Japan", "japaninstax");
	gallery("Scheveningen", "20110624");
//	gallery("Nes", "Digital", "Spring 2011", "20110619");
	gallery("Texel", "20110527");
//	gallery("Nijmegen", "Digital", "Spring 2011", "20110519");
//	gallery("Den Haag", "Digital", "Spring 2011", "20110513");	

	echo '</div><div id="copyright">Stijn Out © '.date("Y").'<br/>
	<span id="acknowledgements">All rights reserved<br/>Maps by <a href="https://www.mapbox.com" title="Mapbox" target="_blank">Mapbox</a>&nbsp;&nbsp;/&nbsp;&nbsp;Fonts by <a href="https://typekit.com" title="Typekit" target="_blank">Typekit</a></span></div>';
	
?>



