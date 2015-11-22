<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['centro']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['contacto']) ){

	require_once('../Clases/classRegistrarCentro.php');

	$centro = $_POST['centro'];
	$direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
	$contacto = $_POST['contacto'];
        //instancia del DAO
        $admin = new registrarCentro();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->cambioCentro($centro, $direccion, $telefono, $contacto);

        echo $resultado;


    }else{
        echo "Error servicio registrarCentro";
    }

