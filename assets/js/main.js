$(document).ready(function () {

    $('#subir_oficio').click(function (e) { 
        e.preventDefault();
        // FormData es un objeto nativo de JS.
        
        var form_data= new FormData($("#form")[0]);
       //alert($(this).attr('action'));
        $.ajax({
            type: "post",
            url: 'http://localhost/gestion_oficios/index.php/superu/registrarOficios',
            data: form_data,
            dataType: "json",
            cache: false,
            contentType:false,
            processData:false,
        })
        .done(function(res) {
            console.log("success "+res.subioo);
            //alert(res.matr);
           
            if (res.subioo) {
                $('.alert-success').fadeIn(500);
                setTimeout("$('.alert-success').fadeOut(3000);", 3000);
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

//http://localhost/gestion_oficios/index.php/superu/registrarOficios