<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registrarPersona
 *
 * @author Meel
 */
//NOTA: LAS BUSQUEDAS SE PUEDEN HACER TAMBIEN POR EDAD, RAZA, PESO, ETC.


class registrarPerrito {
    function altaPerrito($nombre, $edad,$raza,$tamano,$consideraciones,$peso){
        $conexion= new mysqli('localhost','root','56536535','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into perrito(nombre,edad,raza,tamano,consideraciones,peso) values('". $nombre ."',". $edad.",'".$raza."','".$tamano."','".$consideraciones."', ".$peso.")";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }

    
    function bajaPerrito($id_perrito){
        $conexion= new mysqli('localhost','root','56536535','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM perrito WHERE id_perrito='". $id_perrito ."'";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioPerrito($nombre,$consideraciones,$peso){
        $conexion= new mysqli('localhost','root','56536535','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "UPDATE perrito SET nombre='".$nombre."', consideraciones='".$consideraciones."', peso='".$peso."'";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function consultaPerrito($id_perrito){
        $conexion= new mysqli('localhost','root','56536535','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM perrito WHERE id_perrito='".$id_perrito."'";
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";
        }
        else{      
            return $result;            
        }
    }
    function consultaPerritoCentro($idCentro){
        $conexion= new mysqli('localhost','root','56536535','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM perrito WHERE id_centro=".$idCentro."";
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                return "error";
        }
        else{      
            return $result;            
        }
    }    
}




