//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
    $('.botonEnviar').css('cursor', 'pointer').hover(function(){
            $(this).animate({opacity:.7}, 200);

    }, function(){
            $(this).animate({opacity:1}, 200);
    });
        
    $("#divCentros").on("click", "tr.centros", function(){
        $(this).css('cursor', 'pointer');
    });

    mostrarCentros();

    function mostrarCentros(){
        $.post("recursos/servicios/consultarAcopios.php", {}, 
                function (res){
            var centros=JSON.parse(res);
            var tabla="<table>";
                for(var i = 0; i < centros.length; i++) {
                    tabla +='<tr id="'+centros[i][6]+'"class="centros">';
                    tabla +='<td>'+centros[i][0]+'</td>';
                }
            tabla+="</table>";
            $("#divCentros").append(tabla);
        });
    }

    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);

        google.maps.event.addListener(marker,'click',function() {
            map.setZoom(9);
            map.setCenter(marker.getPosition());
        });

        var infowindow = new google.maps.InfoWindow({
          content:mapContent
          });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
          });

    }
    var centro="";
    var idCentro;
    var myCenter;
    var mapContent;

    $("#divCentros").on("click", "tr.centros", function(){

            $("#divResultado").css('opacity', '0');

            centro =$(this).attr('id');

            if(centro!=""){
                    $.post("recursos/servicios/consultarAcopio.php", {centro:centro}, 
                            function (res){

                                    var centros=JSON.parse(res);

                                    $("#nombreA").html("Nombre: "+centros[0]);
                                    $("#responsableA").html("Responsable: "+centros[1]);
                                    $("#telefonoA").html("Telefono: "+centros[2]);
                                    $("#direccionA").html("Dirección: "+centros[5]);
                                    myCenter=new google.maps.LatLng(centros[3],centros[4]);                   
                                    mapContent="Telefono: "+centros[2];
                                    google.maps.event.addDomListener(window, 'load', initialize());

                                    idCentro = centros[6];


                                    });

            }else{
                    $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
            }
    });

    
});

