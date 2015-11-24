//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){

        mostrarCentros();
        function mostrarCentros(){

                    $.post("recursos/servicios/consultarCentros.php", {},
                            function (res){

                            var elem = document.getElementById("divCentros");
                            
                            var centros=JSON.parse(res);
                   
                        var select='<div class="input-field col s12">';
                           select+='<select id="centros" name="centros" class="browser-default">';
                           select +='<option disabled selected>Selecciona el centro</option>';
                                for(var i = 0; i < centros.length; i++) {

                                    select +='<option value="'+centros[i][6]+'">'+ centros[i][0]+'</option>';
                                    
                                }
                            select+="</select>";
                            select +='</div>'
                            $("#selectCentrosDiv").html(select);
                           
                    });
	}
});

