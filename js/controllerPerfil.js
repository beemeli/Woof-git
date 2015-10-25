//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	mostrarPerfil();
        
        function mostrarPerfil(){
          //  $("#divResultado").css('opacity', '0');

            var usuario = test;
            
            if(usuario!==""){
                    $.post("recursos/servicios/consultarPersona.php", {usuario:usuario},
                            function (res){
                                
                                
                                    var arr=JSON.parse(res);
                                    
                                    $("#divUsuario").css('opacity', '1').html(arr[0]);
                                    $("#divEdad").css('opacity', '1').html(arr[3]);
                                    $("#divCorreo").css('opacity', '1').html(arr[1]);

                                    });



            }else{
                    $("#divRespuesta").css('opacity', '1').html("Error, no hay usuario");
            }
	}
});

