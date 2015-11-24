//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
    $('.botonAdoptar').hide();


    $('#mini,#pequeno,#mediano,#grande').css('cursor', 'pointer').hover(function(){
            $(this).animate({opacity:.7}, 200);

    }, function(){
            $(this).animate({opacity:1}, 200);
    });
        

	$(".botonPerrito").click(function(){
            
            var opcion =$(this).attr('id');
            
        $.post("recursos/servicios/consultarPerritosTamano.php", {opcion:opcion}, 
                function (res){
                var perritos=JSON.parse(res);
                var tabla='<ul id="listaPerritos">';
                for(var i = 0; i < perritos.length; i++) {
                    
                    $( "#listaPerritos" ).append( '<li class="perritos" style="display:inline;"><img id="'+perritos[i][0]+'" src="uploads/'+ perritos[i][1]+'" style="height:300px;"/> </li>');
                }
            

        });
    });
    var idPerrito;
    $( "#listaPerritos" ).on( "mouseenter mouseleave", "img", function( ) {
        idPerrito = $(this).attr('id');
        if(idPerrito!=""){
            $.post("recursos/servicios/consultarPerrito.php", {idPerrito:idPerrito},
                function (res){
                    if(res !=0){
                        var perrito=JSON.parse(res);
                        console.log(perrito);

                        $("#nombreP").html("Nombre: "+perrito[0]);
                        $("#edadP").html("Edad: "+perrito[1]);
                        $("#razaP").html("Raza: "+perrito[2]);
                        $("#tamanoP").html("Tamaño: "+perrito[3]);
                        $("#consideracionesP").html("Consideraciones: "+perrito[4]);
                        personalidad = perrito[4];
                        tamano = perrito[3];
                        $("#pesoP").html("Peso: "+perrito[5]);
                        $('.botonAdoptar').show();
                        if(tipo == "usuario"){
                            $.post('recursos/servicios/comprobarAdoptar.php', {}, function(data) {
                                if(data!=0){
                                    $('.botonAdoptar').html("¡Adóptame!");    
                                }
                            });
                        }
                        else if(tipo=="administrador"){
                            $('.botonAdoptar').hide();    
                        }
                        else{
                            $('.botonAdoptar').html("¡Regístrate para adoptar!");   
                        }

                    }
                });        
        }else{
            $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
        }
    });
    
        
	$(".botonAdoptar").click(function(){
            var perrito = idPerrito;
		if(perrito!==""){
                    var experiencia="";
                    $.post("recursos/servicios/registrarSolicitudAdopcion.php", {perrito:perrito,experiencia:experiencia, personalidad:personalidad, tamano:tamano},
                        function (res){
                            $("#resSolicitud").css('opacity', '1').html(res);
                            
                        });
		}
	});

});

