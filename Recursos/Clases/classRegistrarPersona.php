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

}




