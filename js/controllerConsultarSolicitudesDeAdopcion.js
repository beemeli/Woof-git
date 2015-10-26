//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
$("#divSolicitudes").on("click", "tr.solicitudes", function(){
    $(this).css('cursor', 'pointer');
    
    
});

	mostrarSolicitudes();
        
        function mostrarSolicitudes(){

                    $.post("recursos/servicios/consultarSolicitud.php", {},
                            function (res){

                            var elem = document.getElementById("divSolicitudes");
                            
                           // alert(res);
                           var solicitudes=JSON.parse(res);
                            
                           var tabla="<table>";
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
            
                    });
	}
        
        var solicitud="";
        var idSolicitud;
        
        $("#divSolicitudes").on("click", "tr.solicitudes", function(){
		$("#divResultado").css('opacity', '0');
                
                solicitud =$(this).attr('id');
                
		if(solicitud!==""){
			$.post("recursos/servicios/consultarSolicitudEspecifica.php", {solicitud:solicitud},
				function (res){
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
                                    }   
                                        
					});
                                        
		}else{
			$("#divRespuesta").css('opacity', '1').html("No hay registros");
		}
	});
                
});



