<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['centro']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['contacto']) && isset($_POST['latitud']) && isset($_POST['longitud'])){

	require_once('../Clases/classRegistrarCentro.php');

	$centro = $_POST['centro'];
	$direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
	$contacto = $_POST['contacto'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];

        //instancia del DAO
        $admin = new registrarCentro();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaCentro($centro, $direccion, $telefono, $contacto, $latitud, $longitud);

        echo $resultado;


    }else{
        echo "Error servicio registrarPersona";
    }

