<?php
/* May the force be with you...
*/
class RegistrarAcopio {

    function altaAcopio($nombre, $responsable, $telefono, $latitud, $longitud){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into acopio(nombre, responsable, telefono, latitud, longitud) values('". $nombre."','". $responsable."','".$telefono."',".$latitud.",".$longitud.")";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    function bajaAcopio($nombre){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM acopio WHERE nombre='". $nombre ."'";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioAcopio($nombre, $responsable, $telefono, $latitud, $longitud){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "UPDATE acopio SET responsable='".$responsable."', telefono='".$telefono."', latitud=".$latitud.", longitud=".$longitud." WHERE nombre='".$nombre."'";

        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function consultaAcopio($nombre){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM acopio WHERE nombre='".$nombre."'";
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
        $conexion= new mysqli('localhost','root','150193','woof')
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
