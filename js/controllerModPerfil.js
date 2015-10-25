//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	var con=mostrarPerfil();
        //mostrarPerfil();
        function validarContrasenas(){
            var con1=  $('#password1').val();
            var con2=  $('#password2').val();
            
            if(con1!==con2){
                
                return false;
            }
            else{
                
                return true;
            }
        }
        var con;
        function mostrarPerfil(){
          //  $("#divResultado").css('opacity', '0');

            var usuario = test;
            
            if(usuario!==""){
                    $.post("recursos/servicios/consultarPersona.php", {usuario:usuario},
                            function (res){
                                    
                                    var arr=JSON.parse(res);
                                    var elem = document.getElementById("correo");
                                    elem.value = arr[1];
                                    con=arr[2];
                                   
                                    });
                                    return con;


            }else{
                    $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
            }
	}


	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
            var pass = $('#password').val();
            
            if(con=== pass){    
                if(validarContrasenas()){
                    var password = $('#password1').val();
                    var correo = $('#correo').val();

                    if(password!="" && correo!=""){
                            $.post("recursos/servicios/modificarPersona.php", {password:password,correo:correo},
                                    function (res){

                                            $("#divRespuesta").css('opacity', '1').html(res);

                                            });
                    }else{
                            $("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
                    }    
                }
                else{
                    alert('error');
                }
                $("#divRespuesta").css('opacity', '1').html("Contraseñas diferentes");
            }
            else{
                $("#divRespuesta").css('opacity', '1').html("Su contraseña actual es incorrecta");
            }
	});
        
});

