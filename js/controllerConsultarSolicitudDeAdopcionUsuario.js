//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
$("#divSolicitudes").on("click", "tr.solicitudes", function(){
    $(this).css('cursor', 'pointer');
    
    
});

	mostrarSolicitud();
  
        function mostrarSolicitud(){
            
		$("#divResultado").css('opacity', '0');
                
		if(user!==""){
			$.post("recursos/servicios/consultarSolicitudUsuario.php", {user:user},
                            function (res){
                                if (res != 0){
                                    
                                    var solicitudes=JSON.parse(res);  
                                    
                                        $("#id_solicitud").html("Id_solicitud: "+solicitudes[0]);
                                        $("#id_usuario").html("Id_usuario: "+solicitudes[1]);
                                        $("#id_perrito").html("Id_perrito: "+solicitudes[2]);
                                        $("#fecha").html("Fecha: "+solicitudes[3]);
                                        $("#observaciones").html("Observaciones: "+solicitudes[4]);
                                        $("#experiencia").html("Experiencia: "+solicitudes[6]);
                                        $("#estatus").html("Estatus: "+solicitudes[5]);
                                        $("#tamano").html("Tamaño de la mascota : "+solicitudes[7]);
                                        $("#personalidad").html("Personalida: "+solicitudes[8]);
                                      
                                }

                            });   
		}
                else{
			$("#divRespuesta").css('opacity', '1').html("No hay registros");
		}
	}
                
});



