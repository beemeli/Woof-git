<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

   if(isset($_POST['idCentro'])  ){

	require_once('../Clases/classRegistrarPerrito.php');

	$centro = $_POST['idCentro'];
 
        //instancia del DAO
        $admin = new registrarPerrito();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaPerritoCentro($centro);

	//Respuesta del servicio
        //
        //
        
        
        
        
	if ($result->num_rows > 0) {
            $perritos=array();
		while($row = $result->fetch_assoc()) {
                    $perrito =array($row["id_perrito"],$row["nombre"], $row["edad"],$row["raza"],$row["tamano"],$row["consideraciones"],$row["peso"]);
                    array_push($perritos, $perrito);
                }
            echo json_encode($perritos);
                
                
	} else {
		echo 0;
	}
   }

   