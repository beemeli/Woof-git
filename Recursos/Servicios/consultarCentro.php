<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

   if(isset($_POST['centro'])  ){

	require_once('../Clases/classRegistrarCentro.php');

	$centro = $_POST['centro'];
        
        
	



        //instancia del DAO
        $admin = new registrarCentro();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaCentro($centro);

	//$result = $admin->consultarHist();
	//Respuesta del servicio
        
	if ($result->num_rows > 0) {
            
		if($row = $result->fetch_assoc()) {
                    $centro =array($row["nombre"], $row["direccion"],$row["telefono"],$row["contacto"],$row["latitud"],$row["longitud"],$row["id_centro"]);
                    
                  
                    
                    //echo $centros[0][0];
                }
            echo json_encode($centro);
	} else {
		echo "0 results";
	}
   }

   