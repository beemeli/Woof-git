<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Woof a friend, aprende a cuidar a un amigo </title>
	<link rel="stylesheet" type ="text/css" href="css/inicio.css">
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
        <script src="js/controllerJuego.js"></script>
        <script src="js/durmiendo.js"></script>
         <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
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
            <div id="nombreMascota">
                <label id="mensaje" class="mensaje" ></label>
            </div>
            
	 <div id="indicadores">
             <label id="label"></label> 
            <div id="energia">
            </div>
         </div> 
	<!-- animacion -->
	<canvas id="lienzo">
 	</canvas>
        
        <div id="item">
            <img id="accesorio" src="images/tamagochi/sinComida.png" alt="" />
	</div>
        
 	<div class="boton" id="comer" onclick="comiendo()">
 		<label id="accion"></label>
 	</div>
        
        <div id="comida" onclick="comida()">
            <label class="mensaje" > Alimentación </label>
        </div>
        
        <div id="diversion">
            <label class="mensaje" id="diver" onclick="divertirse()"> Diversion </label>
        </div>
<body>
</html>

