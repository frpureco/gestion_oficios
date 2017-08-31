$(document).ready(function () {
    
        $('#iniciar_sesion').click(function (e) { 
            e.preventDefault();
            // FormData es un objeto nativo de JS.
            
         var form_data= new FormData($("#login_form")[0]);
            $.ajax({
                type: "post",
                url: 'http://localhost/gestion_oficios/index.php/superu/ingresar',
                data: form_data,
                dataType: "json",
                cache: false,
                contentType:false,
                processData:false,
            })
            .done(function(res) {
                console.log("success");
                console.log(res.resp);

                if (res.resp==true) {

                  window.location.href='http://localhost/gestion_oficios/index.php/superu/mostrar_alta_oficios';   
                }
                else if(res.resp==false){
                    $('#no_login').fadeIn(500);
                    setTimeout("$('#no_login').fadeOut(3000);", 3000);
                }
                else {                    
                    $('.lista_errores').html(res.resp);
                    $('#validando').fadeIn(500);
                    setTimeout("$('#validando').fadeOut(3000);", 3000);
                }
              
            })
            .fail(function(res) {
                console.log(res.resposeText);
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });		
        });   
    });


    /* método usdo para cerrar sesion*/ 
    $(document).ready(function () {
        
            $('#cerrar').click(function (e) { 
                e.preventDefault();
              
                $.ajax({
                    type: "post",
                    url: 'http://localhost/gestion_oficios/index.php/superu/salir',
                    data: '',
                    dataType: "json",
                   
                })
                .done(function(res) {
                    console.log("success");
                    if (res.resp) {
                     window.location.href='http://localhost/gestion_oficios/index.php/superu/';   
                    }else{
                        
                    }
                  
                })
                .fail(function(res) {
                    console.log(res.resposeText);
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });		
            });   
        });