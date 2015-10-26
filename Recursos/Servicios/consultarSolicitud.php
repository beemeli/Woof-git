<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('../Clases/classRegistrarSolicitudAdopcion.php');

        //instancia del DAO
        $admin = new registrarSolicitudAdopcion();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultarSolicitudTodos();

	//$result = $admin->consultarHist();
	//Respuesta del servicio
        
	if ($result->num_rows > 0) {
            $solicitudes=array();
		while($row = $result->fetch_assoc()) {
                    $solicitud =array($row["id_solicitud"], $row["id_usuario"],$row["id_perrito"],$row["fecha"],$row["estatus"],$row["observaciones"],$row["experiencia"],$row["tamano"],$row["personalidad"]);
                    
                    array_push ($solicitudes, $solicitud);
                    
                    //echo $centros[0][0];
                }
            echo json_encode($solicitudes);
	} else {
		echo "0 results";
	}
        

   