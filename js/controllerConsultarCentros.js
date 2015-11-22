//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        $('.botonVerPerritos').hide();
        $('#divRespuesta').hide();
        $('#googleMap').hide();
        $('#botonModificar').hide();
        $('#botonBorrar').hide();
        $('.botonAdoptar').hide();
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
                
	}, function(){
		$(this).animate({opacity:1}, 200);

	});
	$('.botonVerPerritos,#botonModificar,#botonBorrar').css('cursor', 'pointer').hover(function(){
          
	}, function(){
		

	});
$("#divCentros").on("click", "tr.centros", function(){
    $(this).css('cursor', 'pointer');
    
    
});

        var $rows;
	mostrarCentros();

        
        $('#search').keyup(function() {
            
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
        
        function mostrarCentros(){

                    $.post("recursos/servicios/consultarCentros.php", {},
                            function (res){

                            var elem = document.getElementById("divCentros");
                            
                            var centros=JSON.parse(res);
                            
                           var tabla="<table id='tablaCentros' class='highlight'>";
                            tabla +="<thead>";
                            tabla += "<th data-field='id'>Centros</th>";
                            tabla +="</thead>";
                        
                                for(var i = 0; i < centros.length; i++) {
                                    
                                    tabla +='<tr id="'+centros[i][6]+'"class="centros">';
                                    tabla +='<td>'+centros[i][0]+'</td>';
                                    tabla +='<td>'+centros[i][1]+'</td>';
                                    tabla +='</tr>';
                                }
                            tabla+="</table>";
                            $("#divCentros").append(tabla);
                            $rows= $('#tablaCentros tr');

                    });
	}
        
        function initialize() {
            var mapProp = {
                center:myCenter,
                zoom:9,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker=new google.maps.Marker({
                position:myCenter,
            });

            marker.setMap(map);
            
            google.maps.event.addListener(marker,'click',function() {
                map.setZoom(9);
                map.setCenter(marker.getPosition());
            });
            
            var infowindow = new google.maps.InfoWindow({
              content:mapContent
              });

            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
              });
          
        }
        var nombreCentro;
        
        var centro="";
        var idCentro;
        var myCenter;
        var mapContent;
        
        
        $("#divCentros").on("click", "tr.centros", function(){
                                      
		$("#divResultado").css('opacity', '0');
                
                centro =$(this).attr('id');
                mostrarCentroEspecifico(centro);
        });
        function mostrarCentroEspecifico(centro){
		if(centro!=""){
			$.post("recursos/servicios/consultarCentro.php", {centro:centro},
				function (res){
                                        $('#divRespuesta').show();
                                        $('#googleMap').show();
                                        $('#botonBorrar').show();
                                        $('#botonModificar').show();
                                        
                                        var centros=JSON.parse(res);
                                        
                                        $("#nombreC").html("Nombre: "+centros[0]);
                                        $("#direccionC").html("Direccion: "+centros[1]);
                                        $("#telefonoC").html("Telefono: "+centros[2]);
                                        $("#contactoC").html("Contacto: "+centros[3]);
                                        /*$("#latitudC").html("Latitud: "+centros[4]);
                                        $("#longitudC").html("Longitud: "+centros[5]);*/
                                        myCenter=new google.maps.LatLng(centros[4],centros[5]);                   
                                        mapContent="Telefono: "+centros[2];
                                        google.maps.event.addDomListener(window, 'load', initialize());
                                        
                                        idCentro = centros[6];
                                        nombreCentro = centros[0];
                                        
					//$("#divRespuesta").css('opacity', '1').html(centros[0]);
                                        

                                        $('.botonVerPerritos').show();
                                            
                                        
					});
                                        
		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	}
        
        
	$(".botonVerPerritos").click(function(){
		if(idCentro!==""){
                    $.post("recursos/servicios/ConsultarPerritos.php", {idCentro:idCentro},
                        function (res){
                            var perritos=JSON.parse(res);
                            
                           var tabla="<table>";
                                for(var i = 0; i < perritos.length; i++) {

                                    tabla +='<tr id="'+perritos[i][0]+'"class="perritos">';
                                    tabla +='<td>'+perritos[i][1]+'</td>';
                                }
                            tabla+="</table>";
                            $("#divPerritos").html(tabla);
                            
                        });

		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
            var personalidad;
            var tamano;
            var perrito;
    
            $("#divPerritos").on("click", "tr.perritos", function(){
                
                perrito =$(this).attr('id');
                
		if(perrito!=""){
			$.post("recursos/servicios/consultarPerrito.php", {idPerrito:perrito},
				function (res){
                                        if(res !=0){
                                        var perrito=JSON.parse(res);
                                        
                                        $("#nombreP").html("Nombre: "+perrito[0]);
                                        $("#edadP").html("Edad: "+perrito[1]);
                                        $("#razaP").html("Raza: "+perrito[2]);
                                        $("#tamanoP").html("Tamaño: "+perrito[3]);
                                        $("#consideracionesP").html("Consideraciones: "+perrito[4]);
                                        personalidad = perrito[4];
                                        tamano = perrito[3];
                                        $("#pesoP").html("Peso: "+perrito[5]);
                                        

                                        $.post('recursos/servicios/comprobarAdoptar.php', {}, function(data) {
                                            if(data!=0){
                                                $('.botonAdoptar').show();    
                                            }
                                        });

                                        
                                    }
                                });        
		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
        
        
	$(".botonAdoptar").click(function(){
		if(perrito!==""){
                    var experiencia="";
                    $.post("recursos/servicios/registrarSolicitudAdopcion.php", {perrito:perrito,experiencia:experiencia, personalidad:personalidad, tamano:tamano},
                        function (res){
                            $("#resSolicitud").css('opacity', '1').html(res);
                            
                        });

		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});

	$("#botonBorrar").click(function(){
            $.post("recursos/servicios/eliminarCentro.php", {centro:centro},
                function (res){
                    if(res =="1"){
                        console.log("Centro eliminado");
                    }
                    else{
                        console.log(res);
                    }
                });
	});
        
	$("#botonModificar").click(function(){
            mostrarLayerModificar(nombreCentro);
        });
        

        function mostrarLayerModificar(nombreCentro){ 
            document.getElementById('layerModificar').style.display="block";
            document.getElementById('layerModificar').style.opacity="1";
            document.getElementById('nombreCentroModificar').innerHTML="<h3>"+nombreCentro+"</h3>";
            $.post("recursos/servicios/consultarCentro.php", {centro:centro},
                function (res){
                    var centros=JSON.parse(res);
                    var con=document.getElementById("contacto");
                            con.value=(centros[3]);
                    var tel=document.getElementById("telefono");
                            tel.value=(centros[2]);
                    var dir=document.getElementById("direccion");
                            dir.value=(centros[1]);
        
                });
        }
        
	$(".botonEnviar").click(function(){
                
                    var contacto = $('#contacto').val();
                    var telefono = $('#telefono').val();
                    var direccion = $('#direccion').val();
                    
                    var geocoder1 = new google.maps.Geocoder();
                    var latM;
                    var lonM;

                    geocoder1.geocode( { 'address': direccion}, function(results, status) {

                        if (status == google.maps.GeocoderStatus.OK) {
                            latM = results[0].geometry.location.lat();
                            lonM = results[0].geometry.location.lng();
                            myCenter=new google.maps.LatLng(latM,lonM);                   
                            google.maps.event.addDomListener(window, 'load', initialize());
                        }
                        modificar(contacto, telefono, direccion, latM, lonM);
                    });
                });
        
        function modificar(contacto, telefono,direccion,latitud,longitud){
                    if(contacto!="" && telefono!="" &&direccion!=""){
                            $.post("recursos/servicios/modificarCentro.php", {centro:centro,direccion:direccion,telefono:telefono,contacto:contacto, latitud:latitud, longitud:longitud},
                                    function (res){

                                            document.getElementById('layerModificar').style.display="none";
                                            document.getElementById('layerModificar').style.opacity="0";
                                            $("#tablaCentros tr").remove();
                                            mostrarCentros();
                                            $("#nombreC").html(" ");
                                            $("#direccionC").html(" ");
                                            $("#telefonoC").html(" ");
                                            $("#contactoC").html(" ");
                                            $("#latitudC").html(" ");
                                            $("#longitudC").html(" ");
                                            mostrarCentroEspecifico(centro);
                                            
                                    });
                    }else{
                            
                    }    
                
	}

        
        
	$("#cerrarModificar").click(function(){
            document.getElementById('layerModificar').style.display="none";
           document.getElementById('layerModificar').style.opacity="0";
        });

        
        
        
//---------


//---------
    
});

