<?php    echo '<div id="copyright">
					Stijn Out © '.date("Y").'<br/>
					<span id="acknowledgements">All rights reserved<br/>Find me on Instagram as <a href="https://www.instagram.com/stijnstijn/" target="_blank">@stijnstijn</a>';
		 if($photoPage){
			 echo   	'<br/>Maps by <a href="https://www.mapbox.com" title="Mapbox" target="_blank">Mapbox</a>&nbsp;&nbsp;/&nbsp;&nbsp;Fonts by <a href="https://typekit.com" title="Typekit" target="_blank">Typekit</a>';
		 }
		 else{
			 echo '<br/></i><a id="brievenbus"></a>';
		 }			
		 echo 		'</span>
		  	    </div>'; ?>