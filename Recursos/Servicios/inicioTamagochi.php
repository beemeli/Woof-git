<?php

//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['usuario'])){

	require_once('../Clases/classMascotaVirtual.php');

	 //= $_POST['usuario'];
        session_start();
        $usuario = $_SESSION['id_usuario'];
        //echo $usuario;
        
        //instancia del DAO
        $admin = new MascotaVirtual();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->loginTamagochi($usuario);

        $res = mysqli_fetch_array($result);
        
        if($res !== null){
                //session_start();
                $_SESSION['nombre_mascota'] = $res['nombre'];
                $_SESSION['higiene'] = $res['higiene'];
                $_SESSION['alimento'] = $res['alimento'];
                $_SESSION['diversion'] = $res['diversion'];
                $_SESSION['salud'] = $res['salud'];
                //print_r( $_SESSION['id_usuario']);
                header("Location: Tamagochi.php");
        }else{
            echo "El usuario incorrectos";
        } 
    }else{
        echo "Error servicio iniciarSesion";
    }

