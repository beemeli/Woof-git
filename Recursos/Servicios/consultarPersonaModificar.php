<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['usuario'])  ){

	require_once('../Clases/classRegistrarPersona.php');

	$usuario = $_POST['usuario'];

        //instancia del DAO
        $admin = new registrarPersona();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        $result = $admin->consultarPersona($usuario);

	//$result = $admin->consultarHist();
	//Respuesta del servicio
	if ($result->num_rows > 0) {

		if($row = $result->fetch_assoc()) {
                    $persona =array($row["usuario"], $row["correo"],$row["password"]);
                    
                    
                    echo json_encode($persona);
                //    echo '<input type="password" id="password1" placeholder="Nueva Constraseña"/><br/><br/>';
                  //  echo '<input type="password" id="password2" placeholder="Nueva Constraseña"/><br/><br/>';
                    //echo '<input type="tetx" id="correo" placeholder="Correo" value="'.$row["correo"].'"/><br/><br/>';
                }

	} else {
		echo "0 results";
	}
        

    }else{
        echo "Error servicio consultarPersona";
    }

