$(document).ready(function(){
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});
	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                var experiencia = $(('input:radio[name=experiencia]:checked')).val();
                var personalidad = $(('input:radio[name=personalidad]:checked')).val();
                var tamano = $(('input:radio[name=tamano_mascota]:checked')).val();

		if(experiencia!=="" && personalidad!=="" && tamano!==""){
			$.post("recursos/servicios/registrarSolicitudAdopcion.php", {experiencia:experiencia, personalidad:personalidad, tamano:tamano},
				function (res){
					$("#divRespuesta").css('opacity', '1').html(res);
					});                  
		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});


