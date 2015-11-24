var contador = 0;

var dormir = ['do1', 'do2', 'do3', 'do4', 'do5', 'do6'];
var despertar = ['de1', 'de2', 'de3', 'de4', 'de5', 'de6'];
var comer = ['c1', 'c2', 'c3', 'c4', 'c5'];
var sentado = ['s1', 's2', 's3', 's4', 's5'];
var salto = ['j1','j2','j3','j4','j5','j6'];
var animacion;
var veces = 0;
var id_mascota = 0;
var nombre_mascota = "";
var salud = 0;
var higiene = 0;
var alimentacion = 0;
var diversion = 0;

var nhambre;
var juego;

var seccion_actual = "";

$(document).ready(inicio);

function inicio() {
<<<<<<< HEAD

    animacion = setInterval('pintarImagen(sentado)', 300);
    if (localStorage["ultima_sesion"] === 'undefined') {
=======
    window.history.forward(1);
    animacion = setInterval('pintarImagen(sentado)', 300);

    if (localStorage["ultima_sesion"] === "" || localStorage["ultima_sesion"] === "undefined") {
>>>>>>> origin/master
        infoMascota();
    } else {
        mostrarMascota();
    }
    seccion_actual = "alimento";
}

function pintarImagen(nombreArreglo, veces) {
    contador += 1;

    if (contador === nombreArreglo.length - 3) {
        document.getElementById('accesorio').src = "images/tamagochi/sinComida.png";
    }

    var a = nombreArreglo[0];
    if (contador > nombreArreglo.length - 1) {

        if (a == 's1') {
            contador = 0;
        } else {
            clearInterval(animacion);
            contador = nombreArreglo.length - 1;
            animacion = setInterval('pintarImagen(sentado)', 500);
            
         
            switch(seccion_actual){
                case "alimento":
                    actualizarIndicadores('alimento', alimentacion);
                    break;
                
                case "diversion":
                    actualizarIndicadores('diversion', diversion);
                    break;
            }
        }
    }

    var lienzo = document.getElementById("lienzo");
    var contexto = lienzo.getContext("2d");
    var imagen = new Image();

    if (a === 'c1') {
        var imagenPlato = new Image();

        imagenPlato.onload = function () {
            contexto.fillStyle = "rgb(233, 70, 125)";
            contexto.drawImage(imagen, 0, 0);
            contexto.drawImage(imagenPlato, 15, 80);
        }
        imagen.src = 'images/tamagochi/' + nombreArreglo[contador] + '.png';

        if (a === 'c1' && contador <= nombreArreglo.length - 3) {
            imagenPlato.src = 'images/tamagochi/comida.png';
        } else {
            imagenPlato.src = 'images/tamagochi/sinComida.png';
        }
    } else {
        imagen.src = 'images/tamagochi/' + nombreArreglo[contador] + '.png';
        imagen.onload = function () {
            contexto.fillStyle = "rgb(233, 70, 125)";
            contexto.drawImage(imagen, 0, 0);
        }
    }
}

function infoMascota() {

    $.post("recursos/servicios/consultarMascotaVirtual.php", {},
            function (res) {
                var mascota = JSON.parse(res);
                alert(res);
                //Cargando Estado del Juego desde la base de datos
                id_mascota = mascota[0][0];
                nombre_mascota += mascota[0][1];
                higiene = mascota[0][2];
                alimentacion = mascota[0][3];
                diversion = mascota[0][4];
                salud = mascota[0][5];


                var f = new Date();
                var cad = f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();

                //Guardando estado del juego en localStorage
                localStorage["nombre_mascota"] = nombre_mascota;
                localStorage["higiene"] = higiene;
                localStorage["diversion"] = diversion;
                localStorage["salud"] = salud;
                localStorage["ultima_sesion"] = cad;
                localStorage["alimentacion"] = alimentacion;

                prepararJuego();
                comedor('alimento', alimentacion);
            });
}

function mostrarMascota() {
    nombre_mascota = localStorage["nombre_mascota"];
    higiene = localStorage["higiene"];
    alimentacion = localStorage["alimentacion"];
    if (alimentacion > 5) {
        alimentacion = alimentacion % 10;
    }
    salud = localStorage["salud"];
    diversion = localStorage["diversion"];
    prepararJuego();
    comedor('alimento');
}

function prepararJuego() {
    $("#accion").text('');
    $("#accion").html(" Alimentar ");
    if (alimentacion === 0) {
        $("#label").text('');
        $("#label").html("  Alimento: ");
        $("#mensaje").html(nombre_mascota + " te extrañó mucho. Está hambriento");
    } else {
        $("#label").text('');
        $("#label").html("  Alimento: ");
        $("#mensaje").html(nombre_mascota + " te extrañó mucho");
        nhambre = setInterval('hambre()', 15007);
    }
}

function comiendo() {
    if (alimentacion < 5) {
        if (alimentacion === 4) {
            var f = new Date();
            var n = new Date();
            var no = n.getDate();
            var cad = f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
            localStorage["ultima_comida"] = cad;
            //$()
            $("#mensaje").text('');
            $("#mensaje").text(nombre_mascota + " está contento ahora ");
        }
        alimentacion++;
        localStorage["alimentacion"]++;
        contador = 0;
        $('#accesorio').show();
        document.getElementById('accesorio').src = "images/tamagochi/comida.png";
        clearInterval(animacion);
        animacion = setInterval('pintarImagen(comer)', 500);
    } else {
        alert("Max no tiene apetito por el momento =D, comió a las: " + localStorage["ultima_comida"]);
    }
}

function comedor(nombre) {
    $("#energia").empty();
    if (alimentacion === 5) {
        var f = new Date();
        var cad = f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
        clearInterval(nhambre);
        nhambre = setInterval('hambre()', 15000);
    }
    actualizarIndicadores('alimento', alimentacion);
}

function hambre() {
    $("#energia").empty();
    if (alimentacion > 0) {
        alimentacion--;
        localStorage["alimentacion"]--;
    }
    console.log(alimentacion);
    if (alimentacion === 0) {
        $("#mensaje").text('');
        $("#mensaje").html(nombre_mascota + " tiene hambre");
        console.log("Tengo hambre ++ ");
        clearInterval(nhambre);
    }
    
    if(seccion_actual === "alimento"){
        actualizarIndicadores('alimento', alimentacion);
    }
}


//Indicadores

function actualizarIndicadores(indicador, numero) {
    $("#energia").empty();
    for (var i = 0; i < numero; i++) {
        switch (indicador) {
            case 'diversion':              
                $("#energia").prepend('<img class="indicador" src="images/tamagochi/conEnergia.png" />');
                break;

            case 'alimento':
                $("#energia").prepend('<img class="indicador" src="images/tamagochi/alimento.png" />');
                break;
        }
    }
}

//// Diversión 
function divertirse() {
    $("#indicadores").css("background-color", "rgb(255,0,0)");
    $("#label").text('');
    $("#label").html("  Energía: ");
    $("#accion").text('');
    $("#accion").html(" Jugar ");
    energia();
    diversion = localStorage["diversion"];
    juego = setInterval('cansancio()', 60000);
    $("#comer").removeAttr('onclick');
    $("#comer").attr('onclick','jugando()');
    actualizarIndicadores('diversion',diversion);
    seccion_actual = "diversion";
}

function energia() {
    $("#energia").empty();
    if (diversion > 0) {
        diversion--;
        localStorage["diversion"]--;
    }
    if (diversion === 0) {
        $("#mensaje").text('');
        $("#mensaje").html(nombre_mascota + " está aburrido");
        clearInterval(juego);
    }
    actualizarIndicadores('diversion',localStorage['diversion']);
}

function jugando() {
    if (diversion < 5) {
        if (diversion === 4) {
            var f = new Date();
            var n = new Date();
            var no = n.getDate();
            var cad = f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
            localStorage["ultima_comida"] = cad;
            //$()
            $("#mensaje").text('');
            $("#mensaje").text(nombre_mascota + " está contento ahora ");
        }
        diversion++;
        localStorage["diversion"]++;
        clearInterval(animacion);
        animacion = setInterval('pintarImagen(salto)', 500);
    } else {
        alert(nombre_mascota + " está un poco cansado , jugará más tarde. =D");
        actualizarIndicadores('diversion',localStorage['diversion']);
    }
}


function cansancio() {
    $("#energia").empty();
    if (diversion > 0) {
        diversion--;
        localStorage["diversion"]--;
    }
    if (diversion === 0) {
        $("#mensaje").text('');
        $("#mensaje").html(nombre_mascota + " está aburrido y quiere jugar contigo");
        clearInterval(nhambre);
    }
    if(seccion_actual === "diversion"){
        actualizarIndicadores('diversion', diversion);
    }
}

/// Alimentacion
function comida() {
    $("#indicadores").css("background-color", "rgb(252,165,3)");
    $("#label").text('');
    $("#label").html("  Alimento: ");
    $("#accion").text('');
    $("#accion").html(" Alimentar ");
    energia();
    diversion = localStorage["diversion"];
    //juego = setInterval('cansancio()', 60000);
    $("#comer").removeAttr('onclick');
    $("#comer").attr('onclick','comiendo()');
    actualizarIndicadores('alimento',alimentacion);
    seccion_actual = "alimento";
}



function regresar(){
     window.location='Index.php';
}