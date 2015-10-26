<?php

?>
<!DOCTYPE html>

<html>
    <head>
    	 <meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerAcopio.js"></script>
        
        <title>Registrar Centro de Acopio</title>
    </head>
    <body>
        <div>
            <form>
            
                <input type="text" id="nombre" placeholder="Centro de Acopio" name="nombre"/> <br/>

                <input type="text" id="responsable" placeholder="Contacto" name="responsable"/> <br/>

                <input type="number" id="telefono" placeholder="Teléfono" name="telefono"/> <br/>

                <input type="number" id="latitud" placeholder="Latitud" name="latitud"/> <br/>   

                <input type="number" id="longitud" placeholder="Longitud" name="longitud"/> <br/>   

                
            </form>
            
            <div id="registrarAcopio" class="botonEnviar" >
                Agregar
            </div>
            <div id="divRespuesta"></div>
        
        </div>
    </body>
</html>