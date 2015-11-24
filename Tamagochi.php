<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
	<title> Woof a friend, aprende a cuidar a un amigo </title>
	<link rel="stylesheet" type ="text/css" href="css/inicio.css">
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
        <script src="js/controllerJuego.js"></script>
        <script src="js/durmiendo.js"></script>
         <script>
            window.history.forward(1);
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
    
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
    
<head>
<body>
        <?php
        
       
   
 
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
                                    <a href="inicio.php">

                                        <p>Adopta</p>
                                    </a>
                                </li>
                                
                                
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
                                    <a href="inicio.php">

                                        <p>Adopta</p>
                                    </a>
                                </li>
                                    
                                    
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
                                   
 <li>                                      <a href="consultarSolicitudAdopcionUsuario.php">Consultar Solicitudes</a>
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
                        
                        <li>                                          <a href="consultarSolicitudAdopcion.php">Consultar Solicitudes Adpoción</a>
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
                        <div class="container">

    
    
	<div id="presentacion">
            <div id="regreso">
                <label id="regresar" class="mensaje" onclick="regresar()"> <=Regresar </label>
            </div>
            <img id="logo" src="images/tamagochi/wooficon.png" alt="" /><br/>
		Woof a Friend.
	</div>
	<div id="body">
            <div id="tituloSeccion">
			Bienvenido
            </div>
            <div id="nombreMascota">
                <label id="mensaje" class="mensaje" ></label>
            </div>
            
	 <div id="indicadores">
             <label id="label"></label> 
            <div id="energia">
            </div>
         </div> 
	<!-- animacion -->
	<canvas id="lienzo">
 	</canvas>
        
        <div id="item">
            <img id="accesorio" src="images/tamagochi/sinComida.png" alt="" />
	</div>
        
 	<div class="boton" id="comer" onclick="comiendo()">
 		<label id="accion"></label>
 	</div>
        
        <div id="comida" onclick="comida()">
            <label class="mensaje" > Alimentación </label>
        </div>
        
        <div id="diversion">
            <label class="mensaje" id="diver" onclick="divertirse()"> Diversion </label>
        </div>
        </div>
        </div>
<body>
</html>

