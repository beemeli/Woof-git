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
            echo "<table>";
                echo "<tr>";
                    echo "<td>Usuario </td>";
                    echo "<td>Edad </td>";
                    echo "<td>Correo</td>";
                echo "</tr>";
		while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                        echo "<td>".$row["usuario"]."</td>";

                        echo "<td>".$row["edad"]."</td>";

                        echo "<td>".$row["correo"]."</td>";
                    echo "</tr>";

            }
            echo "</table>";
	} else {
		echo "0 results";
	}

    }else{
        echo "Error servicio consultarPersona";
    }

