<?php


	//SERVICIO. Llamado con POST.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

   if(isset($_POST['correo'])  ){

	

	$email = $_POST['correo'];

        $emailErr;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 0; //correo invalido
            
        }
        else{
            $emailErr = 1; 
        }
        echo $emailErr;
        
        

    }else{
        echo "Error servicio validar correo";
    }

