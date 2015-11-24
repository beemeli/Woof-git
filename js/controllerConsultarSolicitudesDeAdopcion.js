//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
    $('.boton, #divRespuesta').hide();

    $('.boton').css('cursor', 'pointer').hover(function(){
    });
    $("#divSolicitudes").on("click", "tr.solicitudes", function(){
        $(this).css('cursor', 'pointer');
    });

	mostrarSolicitudes();
        
        var $rows;
        $('#search').keyup(function() {
            
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
        
        var idSol;
        function mostrarSolicitudes(){
                    $.post("recursos/servicios/consultarSolicitud.php", {},
                            function (res){
//                            var elem = document.getElementById("divSolicitudes");
                            
                           var solicitudes=JSON.parse(res);
                            
                           var tabla="<table id ='tablaSolicitudes'>";
                                for(var i = 0; i < solicitudes.length; i++) {
                                    
                                    var centro = solicitudes[i];
                                    tabla +='<tr id="'+solicitudes[i][0]+'"class="solicitudes">';
                                    tabla +='<td>'+solicitudes[i][0]+'</td>';
                                    tabla +='<td>'+solicitudes[i][3]+'</td>';
                                    tabla +='<td>'+solicitudes[i][4]+'</td>';
                                    tabla +='<td>'+solicitudes[i][5]+'</td>';
                                }
                                 tabla+="</table>";
                            $("#divSolicitudes").append(tabla);
                            $rows= $('#tablaSolicitudes tr');
                    });
	}
        
        var solicitud="";
        
        $("#divSolicitudes").on("click", "tr.solicitudes", function(){
		
                solicitud =$(this).attr('id');
                mostrarSolicitudEspecifica(solicitud);
		
	});
//--
        var id_perrito;
        var id_usuario;
        function mostrarSolicitudEspecifica(solicitud){
                
                
		if(solicitud!==""){
			$.post("recursos/servicios/consultarSolicitudEspecifica.php", {solicitud:solicitud},
				function (res){
                                        $('#divRespuesta').show();
                                        var solicitudes=JSON.parse(res);
                                        for(var i = 0; i < solicitudes.length; i++) {                                
                                            $("#id_solicitud").html("Id_solicitud: "+solicitudes[i][0]);
                                            $("#id_usuario").html("Id_usuario: "+solicitudes[i][1]);
                                            $("#id_perrito").html("Id_perrito: "+solicitudes[i][2]);
                                            $("#fecha").html("Fecha: "+solicitudes[i][3]);
                                            $("#observaciones").html("Observaciones: "+solicitudes[i][4]);
                                            $("#experiencia").html("Experiencia: "+solicitudes[i][6]);
                                            $("#estatus").html("Estatus: "+solicitudes[i][5]);
                                            $("#tamano").html("Tamaño de la mascota : "+solicitudes[i][7]);
                                            $("#personalidad").html("Personalida: "+solicitudes[i][8]);
                                            id_perrito=solicitudes[i][2];
                                            id_usuario=solicitudes[i][1];
                                        }   
                                        $('.boton').show();
                                });        
		}else{
			$("#divRespuesta").css('opacity', '1').html("No hay registros");
		}
	}   
//--
        $(".boton").click(function(){
		
                var accion =$(this).attr('id');
                
		if(accion!==""){
			$.post("recursos/servicios/accionSolicitudAdopcion.php", {solicitud:solicitud, accion:accion, id_usuario:id_usuario},
				function (res){
                                    console.log(res);
                                    $("#tablaSolicitudes tr").remove();
                                        mostrarSolicitudes();
                                        mostrarSolicitudEspecifica(solicitud);   
                                });  
                        if(accion =="aceptar"){
                            $.post("recursos/servicios/accionSolicitudAdopcionPerrito.php", {id_perrito:id_perrito},
				function (res){
                                    console.log(res);  
                                });    
                        }
		}else{
			$("#divRespuesta").css('opacity', '1').html("No hay registros");
		}
	});
                
});



