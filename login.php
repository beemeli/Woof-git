<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Woof Login</title>
        <meta charset="utf-8">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/ct-navbar.css" type="text/css">
        <script src="js/ct-navbar.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/controller.js"></script>
        
        
    <body>
        
        
        <div class="container">

      <form  action="Recursos/Servicios/iniciarSesion.php" method="post">
        <h2 >Identifícate</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input input type="text" placeholder="usuario" id="usuario" name="usuario" class="form-control" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" placeholder="contraseña" id="password" name="password" class="form-control" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesión">Entrar</button>
      </form>

    </div> 
        
    
    </body>
</html>
