//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});
    //----
        var x_timer;    
        $("#direccion").keyup(function (e){
            clearTimeout(x_timer);
            var direccion1 = $(this).val();
            x_timer = setTimeout(function(){
                mostrarMapa(direccion1);
            }, 1000);
        }); 

        var myCenter="";
        var latitud="";
        var longitud="";
        function mostrarMapa(direccion){                                  
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode( { 'address': direccion}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    latitud = results[0].geometry.location.lat();
                    longitud = results[0].geometry.location.lng();
                    myCenter=new google.maps.LatLng(latitud,longitud);                   
                    google.maps.event.addDomListener(window, 'load', initialize());
                }
                else{
                    $("#divRespuesta").css('opacity', '1').html("La dirección no es válida");

                }
            });


        }


        function initialize() {
            var mapProp = {
                center:myCenter,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap1"),mapProp);
            var marker=new google.maps.Marker({
                position:myCenter,
            });

            marker.setMap(map);
            
            google.maps.event.addListener(marker,'click',function() {
                map.setZoom(20);
                map.setCenter(marker.getPosition());
            });
            
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
              });
          
        }


    
    //-----
	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
                var direccion = $('#direccion').val();                        
                var centro = $('#centro').val();
                var telefono = $('#telefono').val();
                var contacto = $('#contacto').val();

                if(centro!="" && direccion!="" && telefono!="" && contacto !="" ){
                        $.post("recursos/servicios/RegistrarCentro.php", {centro:centro, direccion:direccion, telefono:telefono, contacto:contacto, latitud:latitud, longitud:longitud},
                                function (res){
                                        $("#divRespuesta").css('opacity', '1').html(res);
                                        });
                }else{
                        $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
                }
	});
});