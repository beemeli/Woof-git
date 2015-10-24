<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/controller.js"></script>
    </head>
    
    <a href="perfil.php">Perfil</a>
    <a href="registarCentro.php">Registrar Centro</a>
    <a href="registrarAcopio.php">Registrar Acopio</a>
    <a href="registrarPerrito.php">Registrar Perrito</a>
    <a href="registrarUsuario.php">Registrar Usuario</a>
    
    
        <div style="position:absolute;top:150px;background-color: #FF9966; height:20px;width:500px;">
            Tamagotchi
        </div>
        <div id="contenido" style="position:absolute;top:180px;background-color: #FFFFCC; height:200px;width:500px;">
            <img src="images/perroAlimento.png" alt="perro" style="height:175px"/>
        </div>

        
        <div  style="position:absolute;top:390px;background-color: #FF9966; height:20px;width:500px;">
            <div id="alimentar" class="accionMascota" style="float:left; padding-right:20px; ">Alimentar </div>
            <div id="jugar" class="accionMascota" style="float:left; padding-right:20px;">Jugar</div>
            <div id="higiene" class="accionMascota" style="float:left; padding-right:20px;">Higiene</div>
            <div id="salud" class="accionMascota" style="float:left; padding-right:20px;">Salud</div>
        </div>
        
        <div id="divResultado" style="position:absolute;top:420px;background-color: #FFFF99; height:20px;width:500px;">
            
        </div>
        
    
</html>
