
$(document).ready(function(){

	$('.accionMascota').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$(".accionMascota").click(function(){

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
	});




        $("#mv").click(function(){
          $.post('recursos/servicios/consultarMascotaVirtual.php', function(data) {
                if(data === "0 results"){
                    window.location='MascotaVirtual.php';
                }
                else{
                    window.location='Tamagochi.php';
                }
            });  
        });

});

