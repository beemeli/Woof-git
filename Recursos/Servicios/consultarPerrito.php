<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

   if(isset($_POST['idPerrito'])  ){

	require_once('../Clases/classRegistrarPerrito.php');

	$idPerrito = $_POST['idPerrito'];
 
        //instancia del DAO
        $admin = new registrarPerrito();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaPerrito($idPerrito);

	//Respuesta del servicio
        //
        //
        
        
        
        
	if ($result->num_rows > 0) {
            
		if($row = $result->fetch_assoc()) {
                    $perrito =array($row["nombre"], $row["edad"],$row["raza"],$row["tamano"],$row["consideraciones"],$row["peso"]);
            
                }
            echo json_encode($perrito);
                
                
	} else {
		echo "0 results";
	}
   }

   