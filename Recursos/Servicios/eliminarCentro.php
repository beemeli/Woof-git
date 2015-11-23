<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['centro'])){

	require_once('../Clases/classRegistrarCentro.php');

	$centro = $_POST['centro'];


        //instancia del DAO
        $admin = new registrarCentro();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->bajaCentro($centro);
        if ($resultado ==1){
            echo $resultado="1";
        }
        else{
            echo "¡Este centro cuenta con perritos!";
        }
        


    }else{
        echo "Error servicio registrarCentro";
    }

