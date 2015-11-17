<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

	require_once('../Clases/classRegistrarAcopio.php');



        //instancia del DAO
        $admin = new registrarAcopio();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaTodosAcopios();

	//$result = $admin->consultarHist();
	//Respuesta del servicio
        
	if ($result->num_rows > 0) {
            $centros=array();
		while($row = $result->fetch_assoc()) {
                    $centro =array($row["nombre"], $row["responsable"],$row["telefono"],$row["latitud"],$row["longitud"],$row["direccion"],$row["id_acopio"]);
                    
                    array_push ($centros, $centro);
                    
                    //echo $centros[0][0];
                }
            echo  json_encode($centros);
            
	} else {
		echo "0 results";
	}
        

   