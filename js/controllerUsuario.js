//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
		var usuario = $('#usuario').val();
                var password = $('#password').val();
                var edad = $('#edad').val();
                var correo = $('#correo').val();

		if(usuario!="" && password!="" && edad!="" && correo !=""){
			$.post("recursos/servicios/RegistrarPersona.php", {usuario:usuario, password:password, edad:edad, correo:correo},
				function (res){

					$("#divRespuesta").css('opacity', '1').html(res);

					});



		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});

