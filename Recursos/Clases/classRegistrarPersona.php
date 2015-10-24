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
class registrarPersona {
    function altaPersona($usuario, $password, $edad,$correo){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into visitante(usuario, password, edad, correo) values('". $usuario ."','". $password."',".$edad.",'".$correo."')";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }

    function bajaPersona($usuario){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "DELETE FROM VISITANTE WHERE usuario='". $usuario ."'";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioPersona($usuario, $password,$correo){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "UPDATE VISITANTE SET password='".$password."', correo='".$correo."' WHERE usuario='".$usuario."'";

        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            
            return 1;
        }
    }

    function consultarPersona($usuario){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM visitante WHERE usuario='".$usuario."'";
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
