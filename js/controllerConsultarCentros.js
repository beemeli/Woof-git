//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
                
	}, function(){
		$(this).animate({opacity:1}, 200);

	});
/*
	$('.centros').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
                                
	});
*/


$("#divCentros").on("click", "tr.centros", function(){
    $(this).css('cursor', 'pointer');
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
                                    tabla +='<tr id="'+centros[i][0]+'"class="centros">';
                                    tabla +='<td>'+centros[i][0]+'</td>';
                                    
                                   /* for(var j = 0; j < centro.length; j++) {
                                         tabla+='<td><div id="'+centros[i][0]+'" >'+ centros[i][j]+"</div></td>";                                       
                                    }
                                    tabla+="</tr>";*/
                                }
                            tabla+="</table>";
                            console.log(tabla);
    //                        elem.innerHTML=tabla;    
                            $("#divCentros").append(tabla);
 
                            
                            
                            
/*                            var tabla = document.createElement("TABLE");
                            tabla.setAttribute("id", "myTable");
                            document.body.appendChild(tabla);

                                for(var i = 0; i < centros.length; i++) {
                                    var centro = centros[i];
                                    
                                    var y = document.createElement("TR");
                                    y.setAttribute("id", centros[i][0]);
                                    y.className = "centros";
                                    document.getElementById("myTable").appendChild(y);
                                    
                                    var z = document.createElement("TD");
                                    var t = document.createTextNode(centros[i][0]);
                                    z.appendChild(t);
                                    document.getElementById(centros[i][0]).appendChild(z);                                    
                                }*/
                                 //   $("#divRespuesta").css('opacity', '1').html(arr[0][0]);
                    });
	}
});

