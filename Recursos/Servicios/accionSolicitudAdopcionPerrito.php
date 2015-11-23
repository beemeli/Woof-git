<?php
	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['id_perrito']) ){

	require_once('../Clases/classRegistrarSolicitudAdopcion.php');

       
  
        $id_perrito= $_POST['id_perrito'];
        
        //instancia del DAO
        $admin = new registrarSolicitudAdopcion();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos
        
        $resultado = $admin->actualizarPerrito($id_perrito);

        echo $resultado;


    }