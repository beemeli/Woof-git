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
                                    console.log("arreglo 0: ".res[0]);
                                    console.log("arreglo 1: ".res[1]);
                                    //$("#divRespuesta").css('opacity', '1').html(res);

                                    });



            }else{
                    $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
            }
	}
});

