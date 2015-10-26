<?php
	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['perrito']) && isset($_POST['experiencia']) && isset($_POST['personalidad']) && isset($_POST['tamano']) ){

	require_once('../Clases/classRegistrarSolicitudAdopcion.php');

       
        session_start();
	$usuario =  $_SESSION['id_usuario'];
	$experiencia = $_POST['experiencia'];
        $estatus = "Nueva Solicitud";
        $observaciones = "pendiente";
        $fecha = date("Y-n-j");
        $perrito = $_POST['perrito'];
        $personalidad = $_POST['personalidad'];
	$tamano = $_POST['tamano'];

        //instancia del DAO
        $admin = new registrarSolicitudAdopcion();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos
        $resultado = $admin->altaSolicitud($usuario,$fecha,$estatus,$observaciones,$experiencia,$tamano, $personalidad,$perrito);

        echo $resultado;


    }else{
        echo "Error servicio registrarPersona";
    }