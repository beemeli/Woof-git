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
                var edad = $('#edad').val();
                var raza = $('#raza').val();
                var tamano = $('#tamano').val();
                var consideraciones = $('#consideraciones').val();
                var peso = $('#peso').val();
                var foto = document.getElementById("fotoPerrito");

		if(nombre!=="" && edad!=="" && raza!=="" && tamano !=="" && consideraciones!=="" && peso!==""){
                    $.post("recursos/servicios/RegistrarPerrito.php", {nombre:nombre, edad:edad, raza:raza,tamano:tamano, consideraciones:consideraciones,peso:peso, foto:foto},
                        function (res){

                            $("#divRespuesta").css('opacity', '1').html(res);

                        });

		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
        
        
        
});

