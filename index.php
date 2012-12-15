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
		$objNivo->mostrar_galeria(array('boxlunch_home.jpg','desayuno_home.jpg','desayuno2_home.jpg','desayuno3_home.jpg','dobles_home.jpg','lleno_home.jpg'));
		
		?>
		<br />
		<p class="texto">
		"TE DAMOS LA BIENVENIDA A ESTE ESPACIO DEDICADO A CONSENTIRTE Y CONSENTIR A ESA PERSONA ESPECIAL PARA TI", esta pagina nace de tomar un delicioso y rico cafe con las amigas y preguntandonos porque nos olvidamos de esos detatalles que hacen la diferencia en tu cumpleaños, o aniversario o que tal en un dia comun donde solo queremos ser SORPRENDIDOS... por eso te dedicamos esta pagina que hace que seas diferente porque el <b>DETALLE SIEMPRE CUENTA</b>.
		
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