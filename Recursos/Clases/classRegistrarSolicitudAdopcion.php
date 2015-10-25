<?php
class registrarSolicitudAdopcion {
    function altaSolicitud($usuario,$fecha,$estatus,$observaciones,$experiencia,$tamano,$personalidad){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");
        $query = "insert into solicitud_adopcion (id_usuario, fecha, estatus, observaciones, experiencia, tamano, personalidad) values(".$usuario.",'". $fecha."','".$estatus."','".$observaciones."','".$experiencia."','".$tamano."','".$personalidad."');";       
        if($conexion->query($query) === false){
            return "error";
          }
        else{
            return "Registro realizado";
        }
    }

    function bajaSolicitud($usuario){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");
        $sql = "DELETE FROM solicitud_adopcion WHERE id_usuario=". $usuario ."";
        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }
    
    function cambioSolicitud($usuario,$fecha,$estatus,$observaciones,$experiencia,$tamano,$personalidad){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");
        $sql = "UPDATE solicitud_adopcion SET fecha = '".$fecha."', estatus='".$estatus."', observaciones='".$observaciones."', experiencia='".$experiencia."', tamano='".$tamano."', personalidad='".$personalidad."' WHERE id_usuario=".$usuario."";

        if($conexion->query($sql) === false){
                //echo "error";
                return "error";
        }
        else{
            return 1;
        }
    }

    function consultarSolicitud($usuario){
        $conexion= new mysqli('localhost','root','150193','woof')
        or die("Fallo en el establecimiento de la conexion");

        $sql = "SELECT * FROM solicitud_adopcion WHERE id_usuario=".$usuario."";
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

