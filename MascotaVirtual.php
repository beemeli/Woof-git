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
     <meta charset="utf-8">
	<title> Woof a friend, aprende a cuidar a un amigo </title>
	<link rel="stylesheet" type ="text/css" href="css/juego.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/controllerTamagochi.js" ></script>
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
		<div id="texto">
			En este espacio te ayudaremos a conocer los cuidados que necesita una mascota,
			aprendiendo a cuidar una mascota virtual.
		</div>
                <div id="forma">
                        Elige un Nombre para tu Amigo Virtual: <input type="text" maxlength="20" name="mascota" id="mascota">      
                </div>
                </br>
                <div id="adoptar" align=center>
			<label> Adoptar </label> 
		</div>
                <div id="acerca" align=center>
			<label> Acerca de </label> 
		</div>
            <img id="perritos" src="images/tamagochi/perritos.gif" alt="" />
        </div>
<body>
</html>


