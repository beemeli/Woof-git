<?php
    //session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
   // if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
     //   header('Location: login.php');
    //}
?>
<!DOCTYPE html>

<html>
    <head>
    	 <meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerPerrito.js"></script>
        
        <title>Registrar Perrito</title>
    </head>
    <body>
        <div>
            <form>
            
                <input type="text" id="nombre" placeholder="Nombre"/> <br/>

                <input type="number" id="edad" placeholder="Edad"/> <br/>

                <input type="text" id="raza" placeholder="Raza"/> <br/>

                <input type="text" id="tamano" placeholder="Tamaño"/> <br/>                      

                <input type="text" id="consideraciones" placeholder="Consideraciones"/> <br/>   

                <input type="number" id="peso" placeholder="Peso"/> <br/>   

                
            </form>
            
            <div id="registrarPerrito" class="botonEnviar" >
                Agregar
            </div>
            <div id="divRespuesta"></div>
        
        </div>
    </body>
</html>