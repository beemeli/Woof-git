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
        <meta charset="utf-8">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src="js/ct-navbar.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/controller.js"></script>


        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <link rel="stylesheet" href="css/ct-navbar.css" type="text/css">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
             
        <script type="text/javascript" src="js/controllerConsultarCentros.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
    </head>
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
        <br/><br/>
        <div id="divRespuestaPerrito">
            <div id="nombreP"></div>
            <div id="edadP"></div>
            <div id="razaP"></div>
            <div id="tamanoP"></div>
            <div id="consideracionesP"></div>
            <div id="pesoP"></div>
        </div>        
        <br/><br/>
        <div class="botonAdoptar">
            Clic para solicitar adoptar a este perrito
        </div>       
        <div id="resSolicitud">
            
        </div>                   
        </div>
    </body>
</html>
