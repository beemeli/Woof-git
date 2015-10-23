//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
		var centro = $('#centro').val();
                var direccion = $('#direccion').val();
                var telefono = $('#telefono').val();
                var contacto = $('#contacto').val();
                var latitud = $('#latitud').val();
                var longitud = $('#longitud').val();

		if(centro!="" && direccion!="" && telefono!="" && contacto !="" && latitud!="" && longitud !=""){
			$.post("recursos/servicios/RegistrarCentro.php", {centro:centro, direccion:direccion, telefono:telefono, contacto:contacto, latitud:latitud, longitud:longitud},
				function (res){
					$("#divRespuesta").css('opacity', '1').html(res);
					});
		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});