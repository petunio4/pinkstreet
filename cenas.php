<!DOCTYPE html>
<html>
<head>
	<meta  http-equiv ="Content-Type" content ="text/html; charset=UTF-8">
	<title>:::PinkStreet:::</title>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/modernizr.custom.68612.js"></script>
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<div id="cuerpo">
<header class="fondo">
	<img src="img/pinkstreet_logo.png"  class="imgcenter"/>
	<a href="http://www.facebook.com" target="_blank" class="icon_face"></a>		
</header>
<div id="contenedor">
	<aside>
	<?php include_once 'menu.php';?>
	
		
	</aside>
	<section>
	<article>
		<br />
		<?php 
		include_once 'clases/nivo.class.php';
		
		
		$objNivo = new Nivo();
		$objNivo->mostrar_galeria(array('cena1.jpg','cena2.jpg','cena3.jpg','cena4.jpg','cena5.jpg'));
		
		?>
		<br />
        <h1> CENAS</h1>
		<p class="texto">
		"DESCRIPCION PENDIENTE POR PARTE DEL CLIENTE <br /><br />
        <b>UN DETALLE SIEMPRE CUENTA</b>.
		
		</p>
	</article> 
	</section>
	<footer>
		<p>Direccion</p>
	</footer>
</div>
</div>
</body>
</html>