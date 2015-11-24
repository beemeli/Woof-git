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
        <script type="text/javascript" src="js/controllerGenerarReporte.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
        
    </head>



<body>

    <?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    if(empty($_SESSION['usuarioSesion'])) { 
        
    
?><!-- Sin registrar -->
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

                                        <p>Centros de Adopción</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="consultarAcopio.php">
                                        <p>Centros de Acopio</p>
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

        <?php
}
else if (($_SESSION['tipo'])!="administrador") 
{
?><!-- Usuario -->
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
                                        <a href="consultarAcopio.php">
                                            <p>Centros de Acopio</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="MascotaVirtual.php">
                                            <p>Mascota Virtual</p>
                                        </a>
                                    </li>


                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                            <p>
                                                <?php
if(isset($_SESSION['usuarioSesion'])){
    echo "Hola"." ".ucfirst("{$_SESSION['usuarioSesion']}");
}
?> <b class="caret"></b></p>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="perfil.php">Ver Perfil</a></li>
                                            <li><a href="modificarPerfil.php">Modificar Perfil</a></li>

                                            <li class="divider"></li>
                                            <li><a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a></li>


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
            <?php
}else{
?>  <!-- Admin -->

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

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Centros de Acopio <b class="caret"></b></p>
                                    </a>

                                            <ul class="dropdown-menu">
                                                <li><a href="consultarAcopio.php">Centros de Acopio</a></li>
                                                <li class="divider"></li>
                                                <li><a href="registrarAcopio.php">Registrar Centro Acopio</a></li>





                                            </ul>
                                        </li>
                                
                                
                                
                                             <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Centros de Adopción <b class="caret"></b></p>
                                    </a>

                                            <ul class="dropdown-menu">
                                                <li><a href="consultarCentro.php">Centros de Adopción</a></li>
                                                <li class="divider"></li>
                                                <li><a href="registarCentro.php">Registrar Centro Adopción</a></li>





                                            </ul>
                                        </li>


                                       


                                             
                                           
   <li>                                          <a href="registrarPerrito.php">Registrar Perrito</a>
                        </li>
                                           
                                            <li><a href="GenerarReportes.php">Generar Reportes</a>
                        </li>
                        
                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                           
                                                <?php
if(isset($_SESSION['usuarioSesion'])){
    echo "Hola"." ".ucfirst("{$_SESSION['usuarioSesion']}");
}
?> <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="perfil.php">Ver Perfil</a></li>
                                            <li><a href="modificarPerfil.php">Modificar Perfil</a></li>

                                            <li class="divider"></li>
                                            <li><a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a></li>


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



                <?php
} 
?>

                    <!-- end menu -->




                    <div class="main">


                        <div class="container" id="contenido">
                            Usuario no registrado:
                            <br/>
                            <a href="registrarUsuario.php">Registrar Usuario</a>
                            <br/>
                            <br/> Admin, usuario, usuario NO registrado:
                            <br/>
                            <a href="consultarAcopio.php">Consultar Centros de Acopio</a>
                            <br/>
                            <a href="consultarCentro.php">Consultar Centros</a>
                            <br/>
                            <br/> Admin y usuario
                            <br/>
                            <a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a>
                            <br/>
                            <br/> Usuario:
                            <br/>
                            <a href="perfil.php">Perfil</a>
                            <br/>
                            <a href="registrarSolicitudAdopcion.php">Solicitar Adopción </a>
                            <br/>
                            <a href="consultarSolicitudAdopcionUsuario.php">Consultar solicitud usuario</a>
                            <br/>

                            <br/> Admin:
                            <br/>
                            <a href="consultarSolicitudAdopcion.php">Consultar Solicitud Adopcion</a>
                            <br/>
                            <a href="registarCentro.php">Registrar Centro</a>
                            <br/>
                            <a href="registrarAcopio.php">Registrar Centro de Acopio</a>
                            <br/>
                            <a href="registrarPerrito.php">Registrar Perrito</a>
                            <br/>
                            <a href="GenerarReportes.php">Generar Reportes</a>
                            <br/>
                            <a href="MascotaVirtual.php">Mascota Virtual</a>
                            <br/>
                            <label id="mv">Mascota Virtual</label>
                            <br/>
                            <a href="recursos/Servicios/cerrarSesion.php">Cerrar Sesión</a>
                            <br/>






                            <h1> Woof a Friend </h1>

                            <p>Wooof a friend es la mejor opción para adoptar perritos en el Distrito Federal. Así mismo, es una red social en donde podrás compartir información de perritos que te encuentres en las calles de la ciudad, para que una persona de los Centros de Apoyo acuda y lo ayude. Únete y sé parte del cambio social de México.</p>


                            <div class="row">
                                <!-- inicio tabla-->
                                <div class="col s12 m6 l4">
                                    <h4 class="light">Propósito</h4>
                                    <div class="card medium">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="images/noti.jpg">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Educación<i class="material-icons right">more_vert</i></span>
                                            <p>
                                                Conciencia, acción y cambio.
                                            </p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Educación<i class="material-icons right">close</i></span>
                                            <p>
                                                <br>Buscamos crear conciencia en la población mexicana, fomentando el cuidado y trato digno de las mascotas de México.</p>
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
                                            <span class="card-title activator grey-text text-darken-4">¿Sabías que...<i class="material-icons right">more_vert</i></span>
                                            <p>Curiosidades caninas</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">¿Sabías que <i class="material-icons right">close</i></span>
                                            <ul>
                                                <li>&nbsp;</li>
                                                <li>&#8226; Los perros tiene el sentido del oído tan desarrollado que pueden escuchar sonidos desde una distancia de 225 hasta 230 metros.</li>
                                                <li>&nbsp;</li>
                                                <li>&#8226; Los perros machos, normalmente son territoriales y al momento de orinar levantan la pata para poder orinar la superficie lo más alto que puedan y hacer creer a otros perros que quien orinó ahí es más grande.</li>
                                                <li>&nbsp;</li>
                                                <li>&#8226; Los perros tienen una capacidad de aprendizaje equivalente a un niño de 2 años.</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>



                                <div class="col s12 m6 l4">
                                    <h4 class="light">Eventos</h4>
                                    <div class="card medium">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="images/testi.jpg">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Próximos eventos<i class="material-icons right">more_vert</i></span>
                                            <p>
                                                3 de diciembre - Xochimilco
                                            </p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">3 de diciembre<i class="material-icons right">close</i></span>
                                            <p>
                                                <br>Nos reuniremos en el centro de Xochimilco para llevar a perritos que estén en adopción y que los conozcas. Puedes participar paseando un perrito, donando croquetas, y jugando con uno. Ven y participa en el cambio que nos beneficiará a todos como sociedad.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
 

                        </div>

                    </div>






</body>



</html>




