<?php
    //SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   

	require_once('../Clases/classMascotaVirtual.php');


        session_start();
        $id_usuario = $_SESSION['id_usuario'];
        //instancia del DAO
        $admin = new MascotaVirtual();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultaMascota($id_usuario);

	//$result = $admin->consultarHist();
	//Respuesta del servicio
        
	if ($result->num_rows > 0) {
            $mascotas=array();
		while($row = $result->fetch_assoc()) {
                    $mascota =array($row["id_mascota"],$row["nombre"], $row["higiene"],$row["alimento"],$row["diversion"],$row["salud"],$row["id_usuario"]);
                    
                    array_push ($mascotas, $mascota);
                    
                    //echo $centros[0][0];
                }
            echo  json_encode($mascotas);
            
	} else {
		echo "0 results";
	}

