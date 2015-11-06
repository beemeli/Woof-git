//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function(){
        
        var x_timer;    
        $("#usuario").keyup(function (e){
            clearTimeout(x_timer);
            var user_name = $(this).val();
            x_timer = setTimeout(function(){
                check_username_ajax(user_name);
            }, 1000);
        }); 

        function check_username_ajax(username){
            $("#user-result").html('<img src="images/loading.gif" />');
            $.post('recursos/servicios/username-checker.php', {'username':username}, function(data) {
                if(data==0){
                    //ya existe el usuario  
                $("#usuario").removeClass('valid');
             $("#usuario").addClass('invalid');
                    $("#user-result").html('<img src="images/notAvailable.png" />');                    
                }else if(data==1){
                    //no existe el usuario
                    $("#user-result").html('<img src="images/available.png" />');
                }
            });
        }


//---
        $("#correo").keyup(function (e){
            clearTimeout(x_timer);
            var mail = $(this).val();
            x_timer = setTimeout(function(){
                check_mail_ajax(mail);
            }, 1000);
        }); 

        function check_mail_ajax(mail){

            $("#mail-result").html('<img src="images/loading.gif" />');
            $.post('recursos/servicios/mail-checker.php', {'correo':mail}, function(data) {
                if(data==0){
                    //correo invalido                  
                    $("#mail-result").html('<img src="images/notAvailable.png" />');                    
                }else if(data==1){
                    $("#mail-result").html('<img src="images/available.png" />');
                    //correo valido
                    
                }
            });
        }

        $("#password1").keyup(function (e){
            clearTimeout(x_timer);
            var pass = $(this).val();
            var pass1 = $("#password").val();
            x_timer = setTimeout(function(){
                check_pass(pass,pass1);
            }, 1000);
        }); 
        var contraIguales = false;
        
        function check_pass(pass, pass1){
            if(pass ==pass1){
                contraIguales=true;
            }
            else{
                contraIguales=false;
            }
            /*
            var passw=  /^[A-Za-z]\w{7,14}$/;  
            if(pass.value.match(passw))   
            {   
                alert('Correct, try another...')  
                return true;  
            }  
            else  
            {   
                alert('Wrong...!')  
                return false;  
            }  */
        }

        
	$('.botonEnviar').css('cursor', 'pointer').hover(function(){
		$(this).animate({opacity:.7}, 200);
	}, function(){
		$(this).animate({opacity:1}, 200);
	});

	$(".botonEnviar").click(function(){
		$("#divResultado").css('opacity', '0');
                
		var usuario = $('#usuario').val();
                var password = $('#password').val();
                var password1 = $('#password1').val();
                var edad = $('#edad').val();
                var correo = $('#correo').val();

		if(usuario!="" && password!="" && edad!="" && correo !="" && password1!=""){
                    if(contraIguales){
			$.post("recursos/servicios/RegistrarPersona.php", {usuario:usuario, password:password, edad:edad, correo:correo},
				function (res){

					$("#divRespuesta").css('opacity', '1').html(res);
                                        document.getElementById('usuario').value = "";
                                        document.getElementById('password').value = "";
                                        document.getElementById('password1').value = "";
                                        document.getElementById('edad').value = "";
                                        document.getElementById('correo').value = "";
                                        document.getElementById('mail-result').value="";
                                        document.getElementById('user-result').value="";
                                        
                                        
                                        
                                        
					});

                    }
                    else{
                        $("#divRespuesta").css('opacity', '1').html("Las contraseñas son diferentes");
                    }

		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});

