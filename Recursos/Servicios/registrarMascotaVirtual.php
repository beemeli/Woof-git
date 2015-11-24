<?php
	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['mascota'])){

	require_once('../Clases/classMascotaVirtual.php');

	$nombre = $_POST['mascota'];
         session_start();
	$id_usuario = $_SESSION['id_usuario'];
        $higiene = 5;
        $alimento = 5;
        $salud = 5;
        $diversion = 5;
        
        //instancia del DAO
        $admin = new MascotaVirtual();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $resultado = $admin->altaMascotaVirtual($nombre, $higiene, $alimento, $diversion, $salud, $id_usuario);

        echo $resultado;
        
    }else{
        echo "Error servicio Registrar Acopio";
    }

