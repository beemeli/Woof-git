<?php
    session_start();
    if(empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
        header('Location: login.php');
    }
?>
<html>
    <head>
    	 <meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerPerrito.js"></script>
        
        <title>Consultar Adopciones</title>
    </head>
    <body>
        <div id="preguntas">
            <?php

            require_once '../Clases/classRegistrarSolicitudAdopcion.php';
            $admin = new registrarSolicitudAdopcion();

            $result = $admin->consultarSolicitudAdmin();
            $contador = 0;
       
            $json="";
           while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $contador++;
            echo $table = "<table>"; 
            if($contador >= 0){
                echo $res  = "<tr>".
                        "<form action='actualizarSolicitud' method='post'>".
                        "<td>".
                        "<input type='text' id='id_solicitud' value ="."'".$row['id_solicitud']."'"."readonly/>".
                         "</td><td>".
                        "<input type='text' id='fecha' value ="."'".$row['fecha']."'"." readonly/>".
                        "</td><td>".
                        "<input type='text' id='estatus' value ="."'".$row['estatus']."'"."readonly /></td>".
                        "</td><td>".
                        "<input type='text' id='observaciones' value ="."'".$row['observaciones']."'"."readonly /></td>". 
                        "</td><td>".
                        "<input type='submit' value ='Detalles'/></td>".
                        "<form action='Detalles' method='post'>".
                        "</tr> </form>";       
                }
            }                  
            ?>
        </div>
            <div id="divRespuesta"></div>
        
        </div>
    </body>
</html>