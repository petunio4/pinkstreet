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
	<link href="css/jquery.ambiance.css" rel="stylesheet" type="text/css" media="screen" />
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.ambiance-1.7.2.js"></script>
	
	<style type="text/css">
		* { font-family: Verdana; font-size: 96%; }
		label { width: 10em; float: left; }
		label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
		p { clear: both; }
		.submit { margin-left: 9em; font-size: 11px; }
	</style>
  <script>
  $(document).ready(function(){
    $("#frmpedido").validate({
    	submitHandler: function(form) {
        	$.post("send_mail.php", $("#frmpedido").serialize(), function(resultado) { 
				$.ambiance({message: resultado, 
					title: "Error:",
		            type: "error",
		            width: 800,
		            timeout: 5,
		            fade: false});
            });
    	}
    });
  });
  </script>
  
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
		<form action="" id="frmpedido" class="cmxform"  method="post" action="desayunos.php">
			<br />
			<fieldset style="width:600px; margin-left: auto; margin-right: auto;">
			<legend style="font-size: 14px; font-weight: bold; color: #cb3273; font-family: verdana, sans-serif;">Formulario de Pedido</legend>
			   <div style="margin-left: 100px;">
				   <p>
				     <label for="cname">Nombre</label>
				     <input id="cname" name="name" size="25" class="required" />
				   </p>
				   <p>
				     <label for="cname">Direccion</label>
				     <input id="cdir" name="dir" size="25" class="required"/>
				   </p>
				   <p>
				     <label for="cemail">E-Mail</label>
				     <input id="cemail" name="email" size="25"  class="required email" />
				   </p>
				   <p>
				     <label for="curl">Teléfono</label>
				     <em>  </em><input id="ctelefono" name="telefono" size="25" value="" />
				   </p>
				   <p>
				     <label for="ccomment">Detalles Pedido</label><br />
				   </p>
				   <p>
				   	<textarea id="ccomment" name="comment" cols="80" rows="5"  class="required"></textarea>
				   </p>
				   <p>
				     <input class="submit" type="submit" value="Aceptar"/>
				     <input class="submit" type="reset" value="Cancelar"/>
				   </p>
			   </div>
 			</fieldset>
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