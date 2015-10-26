<?php

?>
<html>
    <head>
        <title>Generar Reportes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/controllerGenerarReporte.js"></script>
        <script>
            var test = '<?php echo $_SESSION['usuarioSesion'] ?>';
            console.log("user-->"+test);
        </script>
        <div>
        <a href="index.php">Home</a>    
        </div>
        Selecciones un tipo de reporte:
        <select id="opcionesReporte">
        <option value="1"> Número de Solicitudes de adopción ordenadas por mes y año </option>
        <option value="2"> Número de perritos en cada albergue</option>
        <option value="3"> Número de perritos ordenados por tamaño </option> 
        </select>
        <div id="generarReporte" >
            Generar Reporte
        </div>
        <div id="Contenedor"></div>
    </body>
</html>
