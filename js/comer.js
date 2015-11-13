var contador = 0;

var dormir = ['do1', 'do2', 'do3', 'do4', 'do5', 'do6'];
var despertar = ['de1', 'de2', 'de3', 'de4', 'de5', 'de6'];
var comer = ['c1', 'c2', 'c3', 'c4', 'c5'];
var sentado = ['s1', 's2', 's3', 's4', 's5'];
var animacion;
var veces = 0;

$(document).ready(inicio);
function inicio() {
    animacion = setInterval('pintarImagen(sentado)', 300);
}
function pintarImagen(nombreArreglo, veces) {
    contador += 1;

    if (contador === nombreArreglo.length - 3) {
        document.getElementById('taza').src = "images/tamagochi/sinComida.png";
    }

    var a = nombreArreglo[0];
    if (contador > nombreArreglo.length - 1) {
        
        if (a == 's1') {
            contador = 0;
        } else {
            clearInterval(animacion);
            contador = nombreArreglo.length - 1;
            //$('#taza').hide();
            animacion = setInterval('pintarImagen(sentado)', 500);
        }
    }

    var lienzo = document.getElementById("lienzo");
    var contexto = lienzo.getContext("2d");
    var imagen = new Image();
    var imagenPlato = new Image();

    imagenPlato.onload = function () {
        contexto.fillStyle = "rgb(233, 70, 125)";
        contexto.drawImage(imagen, 0, 0);
        contexto.drawImage(imagenPlato, 15, 95);
    }
    imagen.src = 'images/tamagochi/' + nombreArreglo[contador] + '.png';
    
    if(contador <= nombreArreglo.length - 3 && a == 'c1'){
        imagenPlato.src = 'images/tamagochi/comida.png';
    }else{
        imagenPlato.src = 'images/tamagochi/sinComida.png';
    }
}

function comiendo() {
    contador = 0;
    $('#taza').show();
    //$('#taza').
    document.getElementById('taza').src = "images/tamagochi/comida.png";
    clearInterval(animacion);
    animacion = setInterval('pintarImagen(comer)', 500);
}

function durmiendo() {
    contador = 0;
    // $('#taza').hide();
}