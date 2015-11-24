$(document).ready(function(){
    borrarM();
});

function borrarM(){
     localStorage["ultima_sesion"] === "undefined";
     localStorage["nombre_mascota"] = "";
     localStorage["higiene"] = "";
     localStorage["diversion"] = "";
     localStorage["salud"] = "";
     localStorage["ultima_sesion"] = "";
     localStorage["alimentacion"] = "";
}



