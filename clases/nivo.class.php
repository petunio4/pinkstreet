<?php

class Nivo{

function mostrar_galeria($img){
	$html = '';
	
	$html = '
		    <div id="wrapper" style="top:-100;">  

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">';
			
			foreach($img as $datos){
				$html .= '<img src="img/'.$datos.'" data-thumb="img/'.$datos.'.jpg" alt="" />';
			
			}
			
            
	$html .= '</div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
	';
	$html .= "
	    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	";
	    
		

	echo $html;

}

}

?>