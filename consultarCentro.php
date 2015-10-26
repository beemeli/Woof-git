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
        <title>Ver Centros de adopción</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerConsultarCentros.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>

    <body>

        
        <div>
        <a href="index.php">Home</a>    
        
        <div id="divCentros"></div>
        
        <br/><br/>

        <div id="divRespuesta">
            <div id="nombreC"></div>
            <div id="direccionC"></div>
            <div id="telefonoC"></div>
            <div id="contactoC"></div>
            <div id="latitudC"></div>
            <div id="longitudC"></div>
            <div id="googleMap" style="width:500px;height:380px;"></div>

        </div>

        <br/>
        <div class="botonVerPerritos">
            Clic para ver perritos
        </div>

        <br/>
        <div id="divPerritos"></div>
        
       
            
        </div>
    </body>
</html>
