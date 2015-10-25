<?php
    session_start();
 
    //$_SESSION['usuarioSesion'] = $_POST['usuarioSesion'];
 
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>

<html>
    <head>
        <title>Woof a Friend</title>
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
   
        
       <div class ="container" id="contenido">
           
           
           <a href="perfil.php">Perfil</a>
    <a href="registarCentro.php">Registrar Centro</a>
    <a href="registrarAcopio.php">Registrar Acopio</a>
    <a href="registrarPerrito.php">Registrar Perrito</a>
    <a href="registrarUsuario.php">Registrar Usuario</a>
    <a href="registrarSolicitudAdopcion.php">Solicitar Adopción </a>
    <a href="consultarSolicitudAdopcion.php">Consultar Solicitud Adopcion</a>
    
           
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
             <h1>Woof</h1>
           
        <!-- inicio anterior index -->   
           
                  <div style="position:absolute;top:150px;background-color: #FF9966; height:20px;width:500px;">
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
        
       
    
    </div>
    
</div>


     
        
        
 
    </body>
    
    
   
</html>


