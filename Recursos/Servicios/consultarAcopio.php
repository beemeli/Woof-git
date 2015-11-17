<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

   if(isset($_POST['centro'])  ){

	require_once('../Clases/classRegistrarAcopio.php');

	$centro = $_POST['centro'];
        
        
	



        //instancia del DAO
        $admin = new registrarAcopio();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaTodosAcopios($centro);

	//$result = $admin->consultarHist();
	//Respuesta del servicio
        
	if ($result->num_rows > 0) {
            
		if($row = $result->fetch_assoc()) {
                    $centro =array($row["nombre"], $row["responsable"],$row["telefono"],$row["latitud"],$row["longitud"],$row["direccion"],$row["id_acopio"]);
                    
                  
                    
                    //echo $centros[0][0];
                }
            echo json_encode($centro);
	} else {
		echo "0 results";
	}
   }

   