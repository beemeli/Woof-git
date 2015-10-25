//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	mostrarCentros();
        
        function mostrarCentros(){

            

                    $.post("recursos/servicios/consultarCentros.php", {},
                            function (res){

                            var elem = document.getElementById("divCentros");
                            
                            var centros=JSON.parse(res);
                            
                            var tabla="<table>";
                            
                                for(var i = 0; i < centros.length; i++) {
                                    var centro = centros[i];
                                    tabla +="<tr>";
                                    for(var j = 0; j < centro.length; j++) {
                                        if(j===0){
                                            tabla+='<td> <input type="radio" name="idCentro" value="'+centros[i][j]+'">'+ centros[i][j]+"</td>";
                                        }else{
                                            tabla+="<td>"+ centros[i][j]+"</td>";
                                        }
                                        
                                    }
                                    tabla+="</tr>";
                                }
                            tabla+="</table>";
                            elem.innerHTML=tabla;    
                                 //   $("#divRespuesta").css('opacity', '1').html(arr[0][0]);
                    });



	}
});

