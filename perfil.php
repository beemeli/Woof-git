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
        <title>Ver Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerPerfil.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>

    </head>
    <body>
        <div>
            
            
            <div id="divRespuesta"></div>

        
        
        
            
                       
            
        </div>
    </body>
</html>
