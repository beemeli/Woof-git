<?php
/* May the force be with you...
*/
class RegistrarAcopio {

    function altaAcopio($nombre, $responsable, $telefono, $latitud, $longitud,$direccion){
        $conexion= new mysqli('127.0.0.1','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into acopio(nombre, responsable, telefono, latitud, longitud,direccion) values('". $nombre."','". $responsable."','".$telefono."',".$latitud.",".$longitud.",'".$direccion."')";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
<<<<<<< Updated upstream
    function bajaAcopio($id_acopio){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
=======
    function bajaAcopio($nombre){
        $conexion= new mysqli('127.0.0.1','woofUser','woofPass','woof')
>>>>>>> Stashed changes
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM acopio WHERE id_acopio=". $id_acopio ."";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioAcopio($nombre, $responsable, $telefono, $latitud, $longitud,$direccion){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "UPDATE acopio SET responsable='".$responsable."',direccion='".$direccion."', telefono='".$telefono."', latitud=".$latitud.", longitud=".$longitud." WHERE id_acopio=".$nombre."";

        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function consultaAcopio($id_acopio){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM acopio WHERE id_acopio=".$id_acopio."";
       // $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";            
        }
        else{      
            return $result;            
        }
    }
    function consultaTodosAcopios(){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM acopio";
       // $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";
        }
        else{      
            return $result;            
        }
    }

}
