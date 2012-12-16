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
		$objNivo->mostrar_galeria(array('desayuno1.jpg','desayuno2.jpg','desayuno3.jpg','desayuno4.jpg','desayuno5.jpg','desayuno6.jpg'));
		
		?>
		<br />
        <h1> Desayunos</h1>
		<p class="texto">CONTIENE: <br/>
<br/>1 Agua de 600ml
<br/>1 Jugo o refresco de lata o yogurt
<br/>1 Manzana
<br/>1 Fruta de la temporada
<br/>1 Canasta con pan o brownie
<br/>1 Sándwich o baguette o 3 burritos o coctel de frutas
<br/>Mantel decorativo
<br/>Cubiertos
<br/>Servilleta
<br/>Taza con sobrecitos de azúcar y café
<br/>Base o canasta donde va el desayuno
 <br/>
<br/>NOTA:
<br/>No incluye los globos, flores, tarjetas de decoración no incluidas en el costo.
<br/> Alimentos varían dependiendo de la disponibilidad y de la temporada en la que nos encontremos en el año 
  <br/> <br/><b>UN DETALLE SIEMPRE CUENTA</b>. <br/>
		
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