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
                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/ct-navbar.css" type="text/css">
        <script src="js/ct-navbar.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script type="text/javascript" src="js/controllerUsuario.js"></script>
        
    </head>
    <body>
                 <div id="navbar-full">
    <div id="navbar">
       <!--    
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange  
        -->
        <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                
                <a class="navbar-brand navbar-brand-logo" href="">
                    <div class="logo">
                    <img  src="images/wooficonNuevo.png">
                    </div>
                    <div class="brand"> Woof a Friend </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            
                            <p>Adopta</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <p>Adopta mas</p>
                        </a>
                    </li> 
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                
                                <p>Adopta opciones <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                    </li>
               </ul>
               
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
       <div class="blurred-container">
            <div class="img-src" style="background-image: url('images/bg.png')"></div>
        </div>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->


<div class="main">
          <div class="container">
              

      <form  >
           <div id="divRespuesta"></div>
          
        <h1 class="text-center"  >Regístrate </h1>
          <br>
          <br>
          
         <h4>Usuario</h4> <input type="text" id="usuario" class="form-control" placeholder="Nombre de Usuario" name="usuario" required>
        
          <h4>Contraseña</h4> <input type="password" placeholder="Contraseña" id="password" name="password" class="form-control" required>
          
          <h4>Edad</h4> <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad" required>
          
         <h4>Correo</h4> <input type="email" id="correo"  name="correo" class="form-control" placeholder="Correo Electronico" required>
          <br>
          <br>
            </form>
                          <button class="btn btn-lg btn-primary btn-block botonEnviar " >Enviar</button>
 
      
        
          
  
    
              
              
           

    </div> 
        
        
       
        </div>
        </div>
    </body>
</html>
