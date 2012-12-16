<!DOCTYPE html>
<html>
<head>
	<meta  http-equiv ="Content-Type" content ="text/html; charset=UTF-8">
	<title>:::PinkStreet:::</title>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/modernizr.custom.68612.js"></script>
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link href="css/style_menu.css" rel="stylesheet" type="text/css" media="screen" />
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
		$objNivo->mostrar_galeria(array('comida1.jpg','comida2.jpg','comida3.jpg','comida4.jpg', 'comida5.jpg'));
		
		?>
		<br />
		<h1>Comidas </h1>
		<p class="texto">CONTIENE<br/>
		  <br/>1 Agua de 600 ml
		  <br/>1 Refresco de lata o té helado
		  <br/>1 Manzana o fruta de temporada
		  <br/>1 Gelatina o flan
		  <br/>1 Canasta con bolillo o pan de ajo
		  <br/>1 Plato individual de lasaña o pasta de codito (frio) o espagueti a la boloñesa
		  <br/>Mantel decorativo,Cubiertos,Servilleta,Taza con sobrecitos de azúcar y café,Base o canasta donde va el desayuno
		  <br/>
          <br/>
		  Nota 1:<br/>
		  <br/>No incluye los globos, flores, tarjetas de decoración no incluidas en el costo.
		  <br/>Nota 2: Los alimentos varían dependiendo de la disponibilidad y de la temporada en la que nos encontremos en el año.
	</article> 
	</section>
	<footer>
		<p>Direccion</p>
	</footer>
</div>
</div>
</body>
</html>