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
            //    $("#usuario").removeClass('valid');
              //  $("#usuario").addClass('invalid');
                    $("#user-result").html('<img src="images/notAvailable.png" />');                    
                }else if(data==1){
                    //no existe el usuario
                    //$("#usuario").removeClass('invalid');
              //      $("#usuario").addClass('valid');
                    $("#user-result").html('<img src="images/available.png" />');
                }
            });
        }

//--m
        $("#edad").keyup(function (e){
            clearTimeout(x_timer);
            var user_age = $(this).val();
            x_timer = setTimeout(function(){
                check_userAge(user_age);
            }, 1000);
        }); 
        var edadAceptada=false;
        function check_userAge(user_age){
            if(user_age <18 && user_age>85){
                edadAceptada=false;//no puede registrarse
                $("#edad").removeClass('valid');
                $("#edad").addClass('invalid');                
            }else{
                edadAceptada=true;//puede registrarse
                $("#edad").removeClass('invalid');
                $("#edad").addClass('valid');                
            }
        }
//---,
        $("#correo").keyup(function (e){
            clearTimeout(x_timer);
            var mail = $(this).val();
            x_timer = setTimeout(function(){
                check_mail_ajax(mail);
            }, 1000);
        }); 

        function check_mail_ajax(mail){

            //$("#mail-result").html('<img src="images/loading.gif" />');
            $.post('recursos/servicios/mail-checker.php', {'correo':mail}, function(data) {
                if(data==0){
                    $("#correo").removeClass('valid');
                    $("#correo").addClass('invalid');
                    //correo invalido                  
                    //$("#mail-result").html('<img src="images/notAvailable.png" />');                    
                }else if(data==1){
                    $("#correo").removeClass('invalid');
                    $("#correo").addClass('valid');                    
                    //$("#mail-result").html('<img src="images/available.png" />');
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
                $("#password").removeClass('invalid');
                $("#password").addClass('valid');
                $("#password1").removeClass('invalid');
                $("#password1").addClass('valid');
                contraIguales=true;
            }
            else{
                $("#password").removeClass('valid');
                $("#password").addClass('invalid');
                $("#password1").removeClass('valid');
                $("#password1").addClass('invalid');
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

console.log("usuario: "+ usuario);
                        console.log("edad: "+ edad);
                        console.log("correo: "+ correo);
                        console.log("password: "+ password);
                        console.log("password1: "+ password1);

		if(usuario!="" && password!="" && edad!="" && correo !="" && password1!=""){
                    if(contraIguales && edadAceptada){                       
			$.post("recursos/servicios/RegistrarPersona.php", {usuario:usuario, password:password, edad:edad, correo:correo},
                            function (res){

                                $("#divRespuesta").css('opacity', '1').html(res);
                                document.getElementById('usuario').value = "";
                                document.getElementById('password').value = "";
                                document.getElementById('password1').value = "";
                                document.getElementById('edad').value = "";
                                document.getElementById('correo').value = "";
                            });
                    }
                    else{
                        
                        $("#divRespuesta").css('opacity', '1').html("Revise los campos marcados");
                    }

		}else{
			$("#divRespuesta").css('opacity', '1').html("Incluya todos los datos");
		}
	});
});

