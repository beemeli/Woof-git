<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['raza']) && isset($_POST['tamano']) && isset($_POST['consideraciones']) && isset($_POST['peso']) ){

	require_once('../Clases/classRegistrarPerrito.php');

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
        $raza = $_POST['raza'];
	$tamano = $_POST['tamano'];
        $consideraciones = $_POST['consideraciones'];
        $peso = $_POST['peso'];

        //instancia del DAO
        $admin = new registrarPerrito();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaPerrito($nombre,$edad,$raza,$tamano,$consideraciones,$peso);

        echo $resultado;


    }else{
        echo "Error servicio registrarPerrito";
    }

