<!DOCTYPE html>

<html>
    <head>
    	 <meta charset="UTF-8">
    	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerCentro.js"></script>
        
        <title>Registrar Centro de Adopción</title>
    </head>
    <body>
        <div>
            <form>
            
                <input type="text" id="centro" placeholder="Centro de Adopción"/> <br/>

                <input type="text" id="direccion" placeholder="Dirección"/> <br/>

                <input type="number" id="telefono" placeholder="Teléfono"/> <br/>

                <input type="text" id="contacto" placeholder="Nombre del Contacto"/> <br/>                      

                <input type="number" id="latitud" placeholder="Latitud"/> <br/>   

                <input type="number" id="longitud" placeholder="Longitud"/> <br/>   

                
            </form>
            
            <div id="registrarCentro" class="botonEnviar" >
                Agregar
            </div>
            <div id="divRespuesta"></div>
        
        </div>
    </body>
</html>