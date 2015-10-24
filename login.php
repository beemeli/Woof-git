<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        
    <body>
        <div>
            
            <form action="Recursos/Servicios/iniciarSesion.php" method="post">
                <input type="text" placeholder="usuario" id="usuario" name="usuario"/>
                <input type="password" placeholder="contraseña" id="password" name="password"/>
                <br/>
                <input type="submit" value="Iniciar Sesión"/>
                
            </form>
            
            <div id="divRespuesta"></div>
            
            
        </div>
    </body>
</html>
