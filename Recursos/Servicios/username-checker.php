<?php


	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['username'])  ){

	require_once('../Clases/classRegistrarPersona.php');

	$usuario = $_POST['username'];

        //instancia del DAO
        $admin = new registrarPersona();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultarPersona($usuario);
        
	if ($result->num_rows > 0) {

		echo 0; //ya existe el usuario

	} else {
		echo 1; // no existe el usuario
	}
        

    }else{
        echo "Error servicio validar usuario";
    }

