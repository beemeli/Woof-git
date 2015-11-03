//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});
                
	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
		
                var direccion = $('#direccion').val();                        
                var geocoder = new google.maps.Geocoder();
                
                geocoder.geocode( { 'address': direccion}, function(results, status) {

                    if (status == google.maps.GeocoderStatus.OK) {
                      
                        var latitud = results[0].geometry.location.lat();
                        var longitud = results[0].geometry.location.lng();

                        //

                        var centro = $('#centro').val();

                        var telefono = $('#telefono').val();
                        var contacto = $('#contacto').val();

                        if(centro!="" && direccion!="" && telefono!="" && contacto !="" ){
                            console.log("lat " + latitud);
                            console.log("lon " + longitud);
                                $.post("recursos/servicios/RegistrarCentro.php", {centro:centro, direccion:direccion, telefono:telefono, contacto:contacto, latitud:latitud, longitud:longitud},
                                        function (res){
                                                $("#divRespuesta").css('opacity', '1').html(res);
                                                });
                        }else{
                                $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
                        }


                        //
                    } 
                    else{
                        $("#divRespuesta").css('opacity', '1').html("La dirección no es válida");
                    }
                });


	});
});