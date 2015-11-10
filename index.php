<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>

    <html>

    <head>
        <title>Woof</title>
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
                                        <p>Adopta más</p>
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


            <div class="container" id="contenido">


                Usuario: <br/>
                <a href="perfil.php">Perfil</a><br/>
                <a href="registrarUsuario.php">Registrar Usuario</a><br/>
                <a href="registrarSolicitudAdopcion.php">Solicitar Adopción </a><br/>
                <a href="consultarSolicitudAdopcion.php">Consultar Solicitud Adopcion</a><br/>
                <a href="consultarCentro.php">Consultar Centros</a><br/>
                <a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a><br/>
                Admin:<br/>
                <a href="registarCentro.php">Registrar Centro</a><br/>
                <a href="registrarAcopio.php">Registrar Centro de Acopio</a><br/>
                <a href="registrarPerrito.php">Registrar Perrito</a><br/>
                <a href="consultarCentro.php">Consultar Centros</a><br/>
                <a href="GenerarReportes.php">Generar Reportes</a><br/>
                <a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a><br/>
                
                
                


                <h1> Woof a Friend </h1>

                <p>Wooof a friend es la mejor opción para adoptar perritos en el Distrito Federal. Así mismo, es una red social en donde podrás compartir información de perritos que te encuentres en las calles de la ciudad, para que una persona de los Centros de Apoyo acuda y lo ayude. Únete y sé parte del cambio social de México.</p>


                <div class="row">
                    <!-- inicio tabla-->
                    <div class="col s12 m6 l4">
                        <h4 class="light">Noticias</h4>
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/noti.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Noticias<i class="material-icons right">more_vert</i></span>
                                <p>
                                    ultimakdslkdjflajdckl isjdlkfcj
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>bla bla bla bla.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col s12 m6 l4">
                        <h4 class="light">Datos curiosos</h4>
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/dato.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Datos curiosos<i class="material-icons right">more_vert</i></span>
                                <p><a href="#"></a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                    </div>



                    <div class="col s12 m6 l4">
                        <h4 class="light">Testimonios</h4>
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/testi.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Testimonios<i class="material-icons right">more_vert</i></span>
                                <p>
                                    <a href="#"></a>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- fin tabla -->

                <!-- inicio anterior index -->

                <!--          <div style="position:absolute;top:150px;background-color: #FF9966; height:20px;width:500px;">
>>>>>>> origin/master:index.html
            Tamagotchi
        </div>
        <div id="contenido" style="position:absolute;top:180px;background-color: #FFFFCC; height:200px;width:500px;">
            <img src="images/perroAlimento.png" alt="perro" style="height:175px"/>
        </div>

        
        <div  style="position:absolute;top:390px;background-color: #FF9966; height:20px;width:500px;">
            <div id="alimentar" class="accionMascota" style="float:left; padding-right:20px; ">Alimentar </div>
            <div id="jugar" class="accionMascota" style="float:left; padding-right:20px;">Jugar</div>
            <div id="higiene" class="accionMascota" style="float:left; padding-right:20px;">Higiene</div>
            <div id="salud" class="accionMascota" style="float:left; padding-right:20px;">Salud</div>
        </div>
        
        <div id="divResultado" style="position:absolute;top:420px;background-color: #FFFF99; height:20px;width:500px;">
            
        </div>
        
       -->

            </div>

        </div>






    </body>



    </html>