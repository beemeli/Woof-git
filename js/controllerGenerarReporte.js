$(document).ready(function(){
        
	$('#generarReporte').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$("#generarReporte").click(function(){
		var tipo = $("#opcionesReporte").val();
                 $.post("recursos/servicios/generarReportes.php", {tipo:tipo},
                        function (res){
                            
                            var registros = JSON.parse(res);

                             var tabla="<table>";
                             
                             if(tipo === "1"){
                                 tabla+="<th>Año</th><th>Mes</th><th>Número de solicitudes de adopción</th>";
                                 print();
                             }else{
                                 if(tipo ==="2"){
                                     tabla+="<th>Centro de adopción</th><th>Número de perritos en adopción</th>";
                                     print();
                                 }else{
                                     tabla+="<th>Tamaño</th><th>Número de perritos en adopción</th>";
                                     print3();
                                 }
                             }
                                
                                
                                function print(){
                                    for(var i = 0; i < registros.length; i++) {
                                    tabla +='<tr class="registrosReporte">';
                                    for(var j = 0; j < registros[i].length; j++){                                   
                                    tabla +='<td>'+registros[i][j]+'</td>';                                  
                                    }
                                    tabla+='</tr>';
                                }
    
                                }

                                function print3(){
                                    for(var i = 0; i < registros.length; i++) {
                                    tabla +='<tr class="registrosReporte">';
                                    for(var j = 0; j < registros[i].length; j++){                                   
                                    if(i==0)tabla +='<td>Grande</td>';
                                    if(i== 1)tabla +='<td>Mediano</td>'; 
                                    if(i== 2)tabla +='<td>Pequeño</td>';
                                    
                                    tabla +='<td>'+registros[i][j]+'</td>';                                  
                                    }
                                    tabla+='</tr>';
                                }
                                }
                                
                            tabla+="</table>";
                             
                                //En el tipo de reporte tres
                            
                            $("#Contenedor").html(tabla);                         
                        });
	});
});


