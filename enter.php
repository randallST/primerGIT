<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>

	<style type="text/css">
		body{
			padding: 0;
			margin: 0;
			background-color: skyblue;
		}
		.padre{
			width: 100%;
			height: 400px;
			display: flex;
		}
		.hijo{
			width: 30%;
			margin: auto;
			background: aqua;
		}
		#bb{
			font-size: 25px;
		}
	</style>
</head>
<body>
<div class="padre">
	<div class="hijo"><center>
		<label><h2>Dime Tu Nombre:</h2></label>
          <form method="POST" >
          	<input type="text" name="nombre" placeholder="Nombre..."><br><br>
          	<input type="submit" name="enviar" value="Aceptar">
          </form><br>

   	<?php 
       if (isset($_POST['enviar'])) {

         $name = trim($_POST['nombre']);

         echo " Hola "." <b id='bb'> ".$name." </b> " ." Tienes Un Hermoso Nombre ";
	
      }
    ?>
<br>
	</center></div><br>

</div>
</body>
</html>

