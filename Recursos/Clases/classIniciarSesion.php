<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classIniciarSesion
 *
 * @author Meel
 */
class iniciarSesion {
    

    function login($usuario, $password){
        $conexion= new mysqli('localhost','woofUser','woofPass','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT `id_usuario`,`usuario`,`password` FROM visitante WHERE usuario='$usuario'";
        $results = mysqli_query($conexion, $sql);
        $result = $conexion->query($sql);

        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{      
            return $result;            
        }
    }
}