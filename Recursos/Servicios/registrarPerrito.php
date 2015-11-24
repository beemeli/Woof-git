<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['nombre']) && isset($_POST['edad']) && isset($_POST['raza']) && isset($_POST['tamano']) && isset($_POST['consideraciones']) && isset($_POST['peso'])){

	require_once('../Clases/classRegistrarPerrito.php');
    
    $target_dir='C:/wamp/www/Woof git/Woof-git/uploads/';
    
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    //$uploadOk = 1;
   // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
   // $imagenSubida = "img"; //para guardar la imagen en una variable
    
       
    if (move_uploaded_file($_FILES['imageUpload']['tmp_name'], $target_file)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        print_r($_FILES);
        foreach($_FILES as $file){
            echo $file['name'];
        }
    }
       

       
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
    $raza = $_POST['raza'];
	$tamano = $_POST['tamano'];
    $consideraciones = $_POST['consideraciones'];
    $peso = $_POST['peso'];
    //$imagen = $_POST['imagen'];

      $target_nombre = basename($_FILES["imageUpload"]["name"]);   

        //instancia del DAO
        $admin = new registrarPerrito();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos


        $resultado = $admin->altaPerrito($nombre,$edad,$raza,$tamano,$consideraciones,$peso,$target_nombre);

        echo $resultado;
     


    }else{
        echo "Error servicio registrarPerrito";
    }

