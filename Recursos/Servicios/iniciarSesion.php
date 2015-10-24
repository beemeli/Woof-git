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

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //echo "password: ".$row["password"];
                if($row["password"]== $password){
                    session_start();  
                    //Almacenamos el nombre de usuario en una variable de sesión usuario
                    $_SESSION['usuario'] = $usuario;  
                    //Redireccionamos a la pagina: index.php
                    header('Location: ../../index.php');
                }
                else{
                    
                    echo "contraseña incorrecta!!!!";
                }
            }
	} else {
		echo "0 results";
	}
 

    }else{
        echo "Error servicio iniciarSesion";
    }

