<?php
	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['solicitud']) &&isset($_POST['accion']) && isset($_POST['id_usuario']) ){

	require_once('../Clases/classRegistrarSolicitudAdopcion.php');

       $solicitud= $_POST['solicitud'];
        session_start();
	$usuario= $_POST['id_usuario'];
	
        $estatus;
        $observaciones;
        $fecha = date("Y-n-j");
        $accion= $_POST['accion'];
        if($accion=="aceptar"){
            $estatus = "Solicitud aceptada";
            $observaciones = "La solicitud fue aceptada el ";      
        }
        else{
            $estatus = "Solicitud denegada";
            $observaciones = "La solicitud fue denegada el "; 
        }
        $observaciones = $observaciones.$fecha;

        
        //instancia del DAO
        $admin = new registrarSolicitudAdopcion();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos
        
        $resultado = $admin->cambioSolicitud($solicitud,$usuario,$estatus,$observaciones);

echo $resultado;


    }