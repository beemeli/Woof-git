
<!DOCTYPE html>
<html>
    <head>
        <title>Registrar Solicitud de Adopción</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerSolicitudAdopcion.js"></script>
        
    </head>
    <body>
        <div>
            
            <form>
                ¿Es tu primer mascota?: 
                <br>
                <input type="radio" name="experiencia" value="si" />S&iacute; <br/>
                <input type="radio" name="experiencia" value="no" />No <br/>
                
                Tu amigo esperado es:
                <br>
                <input type="radio" name="personalidad" value="jugeton"/>Juget&oacute;n    <br/>
                <input type="radio" name="personalidad" value="deportista"/> Deportista <br/>
                <input type="radio" name="personalidad" value="tranquilo"/> Tranquilo  <br/>
                <input type="radio" name="personalidad" value="vanidoso"/> Vanidoso   <br/>

                ¿Qué tan grande esperarías que fuera?:
                <br>
                <input type="radio" name="tamano_mascota" value="grande" />Grande    <br/>
                <input type="radio" name="tamano_mascota" value="mediano"/>Mediano <br/>
                <input type="radio" name="tamano_mascota" value="pequeña"/>Peque&ntilde;o  <br/>
            </form>        
            <div id="registrarSolicitud" class="botonEnviar" >
                Solicitar Adopción
            </div>
            <div id="divRespuesta"></div>
            <a href="registrarSolicitudAdopcion.php"></a>
        </div>
    </body>
</html>


