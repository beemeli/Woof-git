<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title> Woof a friend, aprende a cuidar a un amigo </title>
	<link rel="stylesheet" type ="text/css" href="css/inicio.css">
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/comer.js"></script> 
<head>
<body>
	<div id="presentacion">
            <img id="logo" src="images/tamagochi/wooficon.png" alt="" /><br/>
		Woof a Friend.
	</div>
	<div id="body">
		<div id="tituloSeccion">
			Bienvenido
		</div>
	 <div id="indicadores">
             Acerca de: 
	<div id="energia">
            <img id="apagado" src="images/tamagochi/apagado.png" alt="" />
		</div>
	</div>
	<!-- animacion -->
	<canvas id="lienzo">
 	</canvas>
        <div id="tazon">
            <img id="taza" src="images/tamagochi/sinComida.png" alt="" />
	</div>
 	<div class="boton" id="comer" onclick="comiendo()">
 		<label>Alimentar</label>
 	</div>
 	<div class="boton" id="dormir" onclick="durmiendo()">
 		<label>Dormir</label>
 	</div>
 	<div class="boton" id="sentarse" onclick="sentandose()">
 		<label>Sentarse</label>
 	</div>
 	</div>	
<body>
</html>

