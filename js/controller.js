//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){

	$('.accionMascota').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

/*
	function mostrarJSON(){
		loadData();
		$('#mostrarHist').empty();
	}

	function mostrarXML(){
		loadDataxml();
		$('#mostrarHistxml').empty();

	}
	mostrarJSON();
	mostrarXML();
*/
	$(".accionMascota").click(function(){
		//$("#divResultado").css('opacity', '0');

		//var nac = $('#nacimiento').val();
		
                
                var accion = $(this).attr("id");

                switch(accion){
                    case "alimentar":
                            console.log("alimentar");
                            $("#divResultado").text("alimentar");
                        break;
                    case "jugar":
                            console.log("jugar");
                            $("#divResultado").text("jugar");
                        break;
                    case "higiene":
                            console.log("higiene");
                            $("#divResultado").text("higiene");
                        break;
                    case "salud":
                            console.log("salud");
                            $("#divResultado").text("salud");
                        break;
                        
                }
		/*if(nac!="" && pais!=""){
			$.post("recursos/servicios/RegistrarNuevo.php", {nacimiento:nac, pais:pais},
				function (res){

					$("#divRespuesta").css('opacity', '1').html(res);
						mostrarJSON();
						mostrarXML();
					});



		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}*/
	});






});
/*
	var loadData = function(){
		$.ajax({
		   type:"POST",
		   url:"respuesta.php"
		}).done(function(data){
			console.log(data);
			$('#mostrarHist').append("<h3>"+"Historial JSON"+"</h3>");
			var personas = JSON.parse(data);
			for(var i in personas){
				$('#mostrarHist').append("ID: " + personas[i].idPersona+"  Edad: "+personas[i].edad+"  Pais: "+personas[i].pais+"  Puede votar: "+personas[i].puedeVotar +"<br>");
			}
		});
	};

	var loadDataxml = function(){
		$.ajax({
		   type:"POST",
		   url:"respuestaxml.php"
		}).done(function(data){
			console.log(data);
			$('#mostrarHistxml').append("<h3>"+"Historial xml"+"</h3>");
			$(data).find('personas persona').each(function(){

				var id = $(this).attr('idPersona');
				var edad = $(this).find('edad').text();
				var pais = $(this).find('pais').text();
				var puedeVotar = $(this).find('puedeVotar').text();

				$('#mostrarHistxml').append("ID: " + id +"  Edad: "+edad+"  Pais: "+pais+"  Puede votar: "+puedeVotar +"<br>");
			});
		});
	};

*/
