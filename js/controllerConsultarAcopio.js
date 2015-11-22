//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        $('#botonModificar').hide();
        $('#botonBorrar').hide();
        $('#googleMap').hide();
    $('.botonEnviar,#botonBorrar,#botonModificar').css('cursor', 'pointer').hover(function(){
            $(this).animate({opacity:.7}, 200);

    }, function(){
            $(this).animate({opacity:1}, 200);
    });
        
    $("#divCentros").on("click", "tr.centros", function(){
        $(this).css('cursor', 'pointer');
    });

    mostrarCentros();

    function mostrarCentros(){
        $.post("recursos/servicios/consultarAcopios.php", {}, 
                function (res){
                var centros=JSON.parse(res);
                var tabla="<table id='tablaCentros' class='highlight'>";
                tabla +="<thead>";
                tabla += "<th data-field='id'>Centros de acopio </th>";
                tabla +="</thead>";
                for(var i = 0; i < centros.length; i++) {
                    tabla +='<tr id="'+centros[i][6]+'"class="centros">';
                    tabla +='<td>'+centros[i][0]+'</td>';
                }
            tabla+="</table>";
            $("#divCentros").append(tabla);
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
    var centro="";
    var idCentro;
    var myCenter;
    var mapContent;
    var nombreCentro;

    $("#divCentros").on("click", "tr.centros", function(){
        $("#divRespuesta").show();
            $("#divResultado").css('opacity', '0');
            centro =$(this).attr('id');
            mostrarCentroEspecifico(centro);
        });
        function mostrarCentroEspecifico(centro){
            if(centro!=""){
                    $.post("recursos/servicios/consultarAcopio.php", {centro:centro}, 
                            function (res){
                                    var centros=JSON.parse(res);

                                    $("#nombreA").html("Nombre: "+centros[0]);
                                    $("#responsableA").html("Responsable: "+centros[1]);
                                    $("#telefonoA").html("Telefono: "+centros[2]);
                                    $("#direccionA").html("Dirección: "+centros[5]);
                                    myCenter=new google.maps.LatLng(centros[3],centros[4]);                   
                                    mapContent="Telefono: "+centros[2];
                                    google.maps.event.addDomListener(window, 'load', initialize());

                                    idCentro = centros[6];
                                    $('#googleMap').show();
                                    $('#botonModificar').show();
                                    $('#botonBorrar').show();
                                    nombreCentro = centros[0];
                                    });

            }else{
                    $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
            }
     }
            

	$("#botonBorrar").click(function(){
            $.post("recursos/servicios/eliminarAcopio.php", {centro:centro},
                function (res){
                    if(res =="1"){
                        $("#tablaCentros tr").remove();
                        mostrarCentros();
                        console.log("Centro de acopio eliminado");
                        $("#divRespuesta").hide();
                        $('#botonModificar').hide();
                        $('#botonBorrar').hide();
                    }
                    else{
                        console.log(res);
                    }
                });
	});
//--        
	$("#botonModificar").click(function(){
            mostrarLayerModificar(nombreCentro);
        });
        

        function mostrarLayerModificar(nombreCentro){ 
            document.getElementById('layerModificar').style.display="block";
            document.getElementById('layerModificar').style.opacity="1";
            document.getElementById('nombreCentroModificar').innerHTML="<h3>"+nombreCentro+"</h3>";
            $.post("recursos/servicios/consultarAcopio.php", {centro:centro},
                function (res){
                    var centros=JSON.parse(res);
                    var con=document.getElementById("responsable");
                            con.value=(centros[1]);
                    var tel=document.getElementById("telefono");
                            tel.value=(centros[2]);
                    var dir=document.getElementById("direccion");
                            dir.value=(centros[5]);
        
                });
        }
        
	$(".modificar").click(function(){
            console.log("BLA" );    
                    var responsable = $('#responsable').val();
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
                        modificar(responsable, telefono, direccion, latM, lonM);
                    });
                });
        
        function modificar(contacto, telefono,direccion,latitud,longitud){
            
                    if(contacto!="" && telefono!="" &&direccion!=""){
                            $.post("recursos/servicios/modificarAcopio.php", {centro:centro,direccion:direccion,telefono:telefono,contacto:contacto, latitud:latitud, longitud:longitud},
                                    function (res){
                                        
                                            document.getElementById('layerModificar').style.display="none";
                                            document.getElementById('layerModificar').style.opacity="0";
                                            $("#tablaCentros tr").remove();
                                            mostrarCentros();
                                            $("#nombreA").html(" ");
                                            $("#direccionA").html(" ");
                                            $("#telefonoA").html(" ");
                                            $("#responsableA").html(" ");
                                            mostrarCentroEspecifico(centro);
                                            
                                    });
                    }else{
                            
                    }    
                
	}

        
        
	$("#cerrarModificar").click(function(){
            document.getElementById('layerModificar').style.display="none";
           document.getElementById('layerModificar').style.opacity="0";
        });

//--
            
            
    

    
});

