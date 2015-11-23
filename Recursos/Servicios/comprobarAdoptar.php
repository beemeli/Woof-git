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
            
            
            $result = $admin->consultarSolicitudesPendientes($user);
            
            if ($result->num_rows > 0) {
                echo 0;//no puedes solicitar otra adopción
            } else {
                echo 1;//puedes solicitar adoptar
            }


        