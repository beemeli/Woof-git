<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['raza']) && isset($_POST['tamano']) && isset($_POST['consideraciones']) && isset($_POST['peso']) && isset($_POST['imagen'])){

	require_once('../Clases/classRegistrarPerrito.php');
    
    $target_dir='uploads/';
    $target_file = $target_dir . basename($_FILES['imageUpload']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $imagenSubida = basename($_FILES['imageUpload']['name']); //para guardar la imagen en una variable
       
       
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
    $raza = $_POST['raza'];
	$tamano = $_POST['tamano'];
    $consideraciones = $_POST['consideraciones'];
    $peso = $_POST['peso'];
    $imagen = $_POST['imagen'];
        

        //instancia del DAO
        $admin = new registrarPerrito();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaPerrito($nombre,$edad,$raza,$tamano,$consideraciones,$peso,$imagen);

        echo $resultado;
     


    }else{
        echo "Error servicio registrarPerrito";
    }

