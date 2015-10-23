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
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "insert into centro_adopcion(nombre, direccion, telefono, contacto, latitud, longitud) values('". $centro ."','". $direccion."','".$telefono."','".$contacto."',".$latitud.",".$longitud.")";
        
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }


    }


}
