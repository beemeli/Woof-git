<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ver Centros de adopción</title>
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
        <script src="http://maps.googleapis.com/maps/api/js"></script>
             
        
        <script>
            var user = '<?php echo $_SESSION['usuarioSesion'] ?>';
            var tipo = '<?php echo $_SESSION['tipo'] ?>';
            
            
            
        </script>
        <script type="text/javascript" src="js/controllerConsultarCentros.js"></script>
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
       
        <div class ="main">
        <div class ="container">
        <br/><br/>
        <input type="text" id="search" placeholder="Buscar">
        <div id="divCentros"></div>
        <br/><br/>

        <div id="divRespuesta" >               
            <div class="row">
                <div class="col s12 m6">
                    <div class="card blue-grey darken-1" >
                        <div class="card-content white-text">
                            <span class="card-title"><div id="nombreC"></div></span>
                            <p> <div id="direccionC"></div>
                            <div id="telefonoC"></div>
                            <div id="contactoC"></div>
                            <div id="latitudC"></div>
                            <div id="longitudC"></div></p>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <div id="googleMap" style="width:200px;height:200px;"></div>
        <br/>

        <br/>
        <div id="botonModificar">Modificar </div><br/>
        <div id="botonBorrar">Borrar </div>
           
        <br/>
        <div class="botonVerPerritos">
            Clic para ver perritos
        </div>
        <br/>
        <div id="divPerritos"></div>
        <br/><br/>
        <div id="divRespuestaPerrito">
            <div id="nombreP"></div>
            <div id="edadP"></div>
            <div id="razaP"></div>
            <div id="tamanoP"></div>
            <div id="consideracionesP"></div>
            <div id="pesoP"></div>
        </div>        
        <br/><br/>
        <div class="botonAdoptar">
            Clic para solicitar adoptar a este perrito
        </div>       
        <div id="resSolicitud"> </div>                   

        <div id="layerModificar">
            <h3 id ="nombreCentroModificar"></h3>
            <form>
                  <div class="input-field col s12 ">
                    <input id="contacto" name="contacto" type="text" class="validate" maxlength="100" required>
                    <label for="contacto">Nombre del Contacto</label>
                </div>               
                <div class="input-field col s12 ">
                    <input id="telefono" name="telefono" type="text" class="validate" maxlength="15" required>
                    <label for="telefono">Teléfono</label>
                </div>
                <div class="input-field col s12">
                    <input id="calle" name="calle" type="text" class="validate" maxlength="80" required>
                    <label for="calle">Calle</label>
                </div>
                <div class="input-field col s12">
                    <input id="numero" name="numero" type="text" class="validate" maxlength="80" required>
                    <label for="numero">Número</label>
                </div>
                <div class="input-field col s12">
                    <input id="colonia" name="colonia" type="text" class="validate" maxlength="80" required>
                    <label for="colonia">Colonia</label>
                </div>
                <div class="input-field col s12">
                    <input id="cp" name="cp" type="text" class="validate" maxlength="80" required>
                    <label for="cp">C.P.</label>
                </div>
                <div id="verMapaBoton">Ver mapa</div>
                <div id="googleMap1" style="width:250px;height:190px;"></div>
                <br>
            </form>

            <button class="btn waves-effect waves-light  blue lighten-3 botonEnviar">Enviar
                <i class="material-icons right">send</i>
            </button>

            <br/>
            <div id="cerrarModificar">Cerrar</div>
            
        </div>
        
            
        </div>
        
        
        </div>
        
    </body>
</html>
