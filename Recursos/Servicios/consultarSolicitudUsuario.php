<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);
        
        
            
            require_once('../Clases/classRegistrarSolicitudAdopcion.php');
            session_start();
            $user =  $_SESSION['usuarioSesion'];
            //instancia del DAO
            $admin = new registrarSolicitudAdopcion();
            //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos
            
            
            $result = $admin->consultarSolicitudUsuario($user);
            
            if ($result->num_rows > 0) {
                if($row = $result->fetch_assoc()) {
                    $solicitud =array($row["id_solicitud"], $row["id_usuario"],$row["id_perrito"],$row["fecha"],$row["estatus"],$row["observaciones"],$row["experiencia"],$row["tamano"],$row["personalidad"]);
                }
                echo json_encode($solicitud);
            } else {
                    echo 0;
            }


        