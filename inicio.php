<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    
    if(($_SESSION['tipo'])!="administrador") { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<html>
    <head>
        <title>Generar Reportes</title>
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
        <script type="text/javascript" src="js/controllerGenerarReporte.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
        
    </head>
    
    <body>
        
                    <script>$(document).ready(function() {
    $('select').material_select();
});</script>
        
        
           
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
            
             <h1 class="text-center">Reportes </h1>
            
                    <div class="input-field col s12">
    <select id="opcionesReporte">
      <option value="" disabled selected>Selecciona el Reporte</option>
     <option value="1"> Número de Solicitudes de adopción ordenadas por mes y año </option>
        <option value="2"> Número de perritos en cada albergue</option>
        <option value="3"> Número de perritos ordenados por tamaño </option> 
    </select>
    <label>Selecciona el Reporte</label>
  </div>
            
                    
        <button id="generarReporte" class="btn waves-effect waves-light  blue lighten-3 botonEnviar">Enviar
                <i class="material-icons right">send</i>
            </button> 
            
            <div id="Contenedor"></div>
            
        </div>
        </div>

        
        
       

        
     
    
    </body>
</html>