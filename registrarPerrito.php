<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    
    if(($_SESSION['tipo'])!="administrador") { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<!DOCTYPE html>

<html>
    <head>
    	 <meta charset="UTF-8">
    	        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script src="js/ct-navbar.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        

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
       <!-- <script type="text/javascript" src="js/controllerPerrito.js"></script>-->
        
        <title>Registrar Perrito</title>
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

                            <a class="navbar-brand navbar-brand-logo" href="index.php">
                                <div class="logo">
                                    <img src="images/wooficonNuevo.png">
                                </div>
                                <div class="brand"> Woof a Friend </div>
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="consultarCentro.php">

                                        <p>Centros de adopción</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <p>Adopta mas</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                        <p>Usuario <b class="caret"></b></p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="login.php">Iniciar sesión</a></li>
                                        <li><a href="registrarUsuario.php">Regístrate</a></li>
                                        <li class="divider"></li>
                                        <li><a href="perfil.php">Ver Perfil</a></li>
                                        <li><a href="modificarPerfil.php">Modificar Perfil</a></li>

                                    </ul>
                                </li>
                            </ul>


                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <div class="blurred-container">
                    <div class="img-src" style="background-image: url('images/bg.png')"></div>
                </div>
            </div>
            <!--  end navbar -->

        </div>
        <!-- end menu-dropdown -->

        <div class="main">
          <div class="container">
              

              
                          <form action="recursos/servicios/RegistrarPerrito.php" method="post" enctype="multipart/form-data">
                <div id="divRespuesta"></div>

                <h1 class="text-center">Registrar Perrito </h1>
               

                <div class="input-field col s12 ">
                    <input id="nombre" name="nombre" type="text" class="validate" required>
                    <label for="nombre">Nombre</label>
                </div>

                <div class="input-field col s12">
                    <input id="edad" name="edad" type="number" class="validate" required>
                    <label for="edad">Edad</label>
                </div>

                <div class="input-field col s12 ">
                    <input id="raza" name="raza" type="text" class="validate" required>
                    <label for="raza">Raza</label>
                </div>

              
                              
                <div class="input-field col s12 ">
                    <select id="tamano" name="tamano" type="text" class="validate" required >
                        <option value="mini">Mini</option>
                        <option value="chico">Chico</option>
                        <option value="mediano">Mediano</option>
                        <option value="grande">Grande</option>
                    </select>
                    
                </div>             
                              
                              
                
                <div class="input-field col s12 ">
                    <input id="consideraciones" name="consideraciones" type="text" class="validate" required>
                    <label for="consideraciones">Consideraciones</label>
                </div>
                              
                 <div class="input-field col s12 ">
                    <input id="peso" name="peso" type="number" class="validate" required>
                    <label for="peso">Peso</label>
                </div>
                
                              
    
           
                  <div class="file-field input-field">            
                              
                <div class="btn">
        <span>File</span>
                    <input name="imageUpload" type="file">
                     </div>
                      <div class="file-path-wrapper">
        <input class="file-path " type="text">
      </div>
                   
                      
                        </div>
                              
                               <label for="imageUpload">Foto del perrito</label>


                <br><br>
                              
            <button class="btn waves-effect waves-light  blue lighten-3 botonEnviar">Enviar
                <i class="material-icons right">send</i>
            </button>
            </form>
              
              
              
     
          
           <div id="divRespuesta"></div>
          
        
          
        
        
         
          
         
          <br>
          <br>
          <br>
          <br>
          <br>
         
            </div>
        
        </div>
    </body>
</html>