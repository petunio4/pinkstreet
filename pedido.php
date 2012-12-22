<!DOCTYPE html>
<html>
<head>
	<meta  http-equiv ="Content-Type" content ="text/html; charset=UTF-8">
	<title>:::PinkStreet:::</title>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/modernizr.custom.68612.js"></script>
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
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
	<section class="pedidos">
		<article>
		<form action="" name="frmpedido">
			<h3>Formulario de Pedido - <?php echo $_GET['tipo'];?></h3>
			<table>
				<tr>
					<td><label>Nombre:</label></td>
					<td>
						<input type="text" id="txtnombre" size="30px"/>
					</td>
				</tr>
				<tr>
					<td><label>Dirección:</label></td>
					<td>
						<input type="text" id="txtnombre" size="30px"/>
					</td>
				</tr>
				<tr>
					<td><label>E-mail:</label></td>
					<td>
						<input type="text" id="txtnombre" size="30px"/>
					</td>
				</tr>
				<tr>
					<td><label>Teléfono:</label></td>
					<td>
						<input type="text" id="txtnombre" size="30px"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<hr color="#e026a3"/>					
						<p style="text-align: left; color: #cb3273; font-size: 12pt;">Detalle Pedido</p>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						
					</td>
				</tr>
				<tr style="background-color: #ffcccc;">
					<td colspan="2" align="center">
						<input type="button" value="Aceptar" id="btnaceptar" />
						<input type="button" value="Cancelar" id="btncancelar" />
					</td>
				</tr>
			</table>
			</form>
		</article> 
	</section>
	<footer>
		<p>Direccion</p>
	</footer>
</div>
</div>
</body>
</html>