<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classRegistrarCentro
 *
 * @author Meel
 */
class RegistrarCentro {

    function altaCentro($centro, $direccion, $telefono, $contacto, $latitud, $longitud){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into centro_adopcion(nombre, direccion, telefono, contacto, latitud, longitud) values('". $centro ."','". $direccion."','".$telefono."','".$contacto."',".$latitud.",".$longitud.")";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return $sql;
        }
        else{
            return 1;
        }
    }
    function bajaCentro($centro){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM centro_adopcion WHERE id_centro=". $centro ."";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return 0; //hay perritos en el centro
        }
        else{
            return 1;
        }
    }
    
    function cambioCentro($centro, $direccion, $telefono, $contacto){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        //$sql = "UPDATE centro_adopcion SET direccion='".$direccion."', telefono='".$telefono."', contacto='".$contacto."', latitud=".$latitud.", longitud=".$longitud." WHERE nombre='".$centro."'";
        $sql = "UPDATE centro_adopcion SET direccion='".$direccion."', telefono='".$telefono."', contacto='".$contacto."' WHERE nombre='".$centro."'";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function consultaCentro($centro){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM centro_adopcion WHERE id_centro='".$centro."'";
       // $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";
        }
        else{      
            return $result;            
        }
    }
    function consultaTodosLosCentros(){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM centro_adopcion";
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
