<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['password']) && isset($_POST['usuario']) ){

	require_once('../Clases/classIniciarSesion.php');

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

        //instancia del DAO
        $admin = new iniciarSesion();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->login($usuario, $password);

        $res = mysqli_fetch_array($result);
        
        if($res !== null){
            if($res["password"]== $password){
                session_start();
                $_SESSION['id_usuario'] = $res['id_usuario'];
                $_SESSION['usuarioSesion'] = $res['usuario'];
                header("Location: ../../index.php");
            }else{
                    
                    echo "contraseña incorrecta!!!!";
                }
        }else{
            echo "El usuario o contraseña son incorrectos";
        } 
    }else{
        echo "Error servicio iniciarSesion";
    }

