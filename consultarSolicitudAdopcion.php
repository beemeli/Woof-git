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
        <title>Solicitud de Adopción</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerConsultarSolicitudesDeAdopcion.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>

    <body>

        
        <div>
        <a href="index.php">Home</a>    
        
        <div id="divSolicitudes"></div>
        
        <br/><br/>

       <div id="divRespuesta">
            <div id="id_solicitud"></div>
            <div id="id_usuario"></div>
            <div id="id_perro"></div>
            <div id="fecha"></div>
            <div id="observaciones"></div>
            <div id="experiencia"></div>           
            <div id="tamano"></div>
            <div id="personalidad"></div>
            <div id="estatus"></div>
        </div>
          
        </div>
    </body>
</html>
