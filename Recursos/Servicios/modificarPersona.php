<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if( isset($_POST['password']) && isset($_POST['correo']) ){

	require_once('../Clases/classRegistrarPersona.php');

	$password = $_POST['password'];
	$correo = $_POST['correo'];
        $usuario="";
        
        session_start();
        if(!empty($_SESSION['usuarioSesion'])) { // Recuerda usar corchetes.
            $usuario=$_SESSION['usuarioSesion'];
        }
        
        //instancia del DAO
        $admin = new registrarPersona();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->cambioPersona($usuario,$password,$correo);

        echo $resultado;


    }else{
        echo "Error servicio registrarPersona";
    }

