<?php

function altaMascotaVirtual($nombre, $higiene, $alimento, $diversion, $salud){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into mascota_virtual(nombre, higiene, alimento, diversion, salud) values('". $nombre."','". $higiene."','".$alimento."',".$diversion.",".$salud.")";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    function bajaMascotaVirtual($nombre){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM mascota_virtual WHERE nombre='". $nombre."'";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioMascota($nombre, $higiene, $alimento, $diversion, $salud, $id_mascota){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "UPDATE mascota_virtual SET nombre='".$nombre."', higiene='".$higiene."', alimento=".$alimento.", diversion=".$diversion.", salud = ".$salud." WHERE id_mascota='".$id_mascota."'";

        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function consultaMascota($nombre){
        $conexion= new mysqli('127.0.0.1','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM mascota_virtual WHERE id_mascota='".$idMascota."'";
       // $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";
        }
        else{      
            return $result;            
        }
    }