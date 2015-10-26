<?php

	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['tipo'])  ){

	require_once('../Clases/classGenerarReportes.php');

	$tipo = $_POST['tipo'];
 
        //instancia del DAO
        $admin = new generarReporte();
        //Le enviamos el parámetro a guardar. Idealmente, en un objeto de negocio para no pasar parámetros sueltos

        if($tipo == 1){
            $result = $admin->tipoUno(); 
            if ($result->num_rows > 0) {
                $registros=array();
                while($row = $result->fetch_assoc()) {
                    $registro =array($row["Anio"],$row["Mes"], $row["Registros"]);
                    array_push($registros, $registro);
                }
                echo json_encode($registros);                             
            } else {
		echo "0 results";
            }
            }else{
            if($tipo == 2){
               $result = $admin->tipoDos();
               if ($result->num_rows > 0) {
                $registros=array();
                    while($row = $result->fetch_assoc()) {
                        $registro =array($row["nombre_centro"],$row["count(*)"]);
                        array_push($registros, $registro);
                    }
                echo json_encode($registros);                             
                } else {
		echo "0 results";
                }
            }else{
                if($tipo == 3){
                    $result = $admin->tipoTres();
                    if ($result->num_rows > 0) {
                        $registros=array();
                        while($row = $result->fetch_assoc()) {
                        $registro =array($row["count(*)"]);
                        array_push($registros, $registro);
                        }
                        echo json_encode($registros);                             
                    } else {
                        echo "0 results";
                    }                    
                }
            }
        }
   }
