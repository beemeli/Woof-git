<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registrar usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerUsuario.js"></script>
        
    </head>
    <body>
        <div>
            
            <form>
                Usuario: <input type="text" id="usuario"/> <br/><br/>

                Password: <input type="password" id="password"/> <br/><br/>

                Edad: <input type="number" id="edad"/> <br/><br/>

                Correo: <input type="text" id="correo" /> <br/><br/>                      
            </form>        
            <div id="registrarUsuario" class="botonEnviar" >
                Agregar persona
            </div>
            <div id="divRespuesta"></div>
            
        </div>
    </body>
</html>
