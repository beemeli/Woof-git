<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['usuario']) && isset($_POST['password']) && isset($_POST['edad']) && isset($_POST['correo']) ){

	require_once('../Clases/classRegistrarPersona.php');

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
        $edad = $_POST['edad'];
	$correo = $_POST['correo'];

        //instancia del DAO
        $admin = new registrarPersona();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaPersona($usuario,$password,$edad,$correo);

        echo $resultado;


    }else{
        echo "Error servicio registrarPersona";
    }

