<?php
class generarReporte {
    

    function tipoUno(){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT YEAR(fecha) Anio,MONTH(fecha) Mes,COUNT(*) Registros
                FROM solicitud_adopcion
                GROUP BY YEAR(fecha),MONTH(fecha)";
        //$sql = "select * from solicitud_adopcion";
       // $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        if($conexion->query($sql) === false){
                echo "error query";
                return "error";
        }
        else{      
            return $result;            
        }
    }
    
    function tipoDos(){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "select nombre_centro, count(*) from centro_adopcion,perrito where centro_adopcion.id_centro = perrito.id_centro group by nombre_centro";
        $result = $conexion->query($sql);

        if($conexion->query($sql) === false){
                echo "error query";
                return "error";
        }
        else{      
            return $result;            
        }
    }
    
    function tipoTres(){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "select tamanio, count(*) from perrito group by tamanio";
        $result = $conexion->query($sql);

        if($conexion->query($sql) === false){
                //echo "error query";
                return "error";
        }
        else{ 
            //echo "funciono el query";
            return $result;            
        }
    }
}