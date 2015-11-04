<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['nombre']) && isset($_POST['responsable']) && isset($_POST['telefono']) && isset($_POST['latitud']) && isset($_POST['longitud']) && isset($_POST['direccion'])){

	require_once('../Clases/classRegistrarAcopio.php');

	$nombre = $_POST['nombre'];
	$responsable = $_POST['responsable'];
        $telefono = $_POST['telefono'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        $direccion = $_POST['direccion'];

        //instancia del DAO
        $admin = new registrarAcopio();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaAcopio($nombre, $responsable, $telefono, $latitud, $longitud,$direccion);

        echo $resultado;


    }else{
        echo "Error servicio Registrar Acopio";
    }

