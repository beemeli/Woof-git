//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
				var nombre = $('#nombre').val();
                var responsable = $('#responsable').val();
                var telefono = $('#telefono').val();
                var latitud = $('#latitud').val();
                var longitud = $('#longitud').val();

		if(nombre!="" && responsable!="" && telefono!="" && latitud!="" && longitud !=""){
			$.post("recursos/servicios/registrarAcopio.php", {nombre:nombre, responsable:responsable, telefono:telefono, latitud:latitud, longitud:longitud},
				function (res){
					$("#divRespuesta").css('opacity', '1').html(res);
					});
		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});