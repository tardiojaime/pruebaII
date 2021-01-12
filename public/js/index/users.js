$(function(){
        
    $(".view-user").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    });

    $("#create-u").on('click', function(evt){
        evt.preventDefault();
        load.newURL = "Usuarios/create";
        load.create_se;
    });
    $("#enviar_user").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let dataform = new FormData(form[0]);
        let action = form.attr('action');
        $.ajax({
            data: dataform,
            url: action,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function(info){
                load.success = info.sms;
                load.success;
                load.newURL = '/Usuarios';
                load.index;
            },
            error:() =>{
                load.error = "Eror en la consulta.";
                load.error;
            }
        });
    });
    $("#user-update").on('click', function(evt){
        evt.preventDefault();
        let form = $(this).parents('form');
        let dataform = new FormData(form[0]);
        let action = form.attr('action');
        $.ajax({
            data: dataform,
            url: action,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function(info){
                load.success = info.sms;
                load.success;
                load.newURL = '/Usuarios';
                load.index;
            },
            error:()=>{
                load.error = "Eror en la consulta.";
                load.error;
            }
        });
    });
    

    $(".cancelar_u").on('click', function(evt){
        evt.preventDefault();
        load.newURL = '/Usuarios';
        load.index;
    });
    $(".cancelar_p").on('click', function(evt){
        evt.preventDefault();
        load.newURL = '/Proveedores';
        load.index;
    });
    $(".edit-user").on('click', function(evt){
        evt.preventDefault();
        let url = $(this).attr('href');
        load.newURL = url;
        load.create_se;
    });
    
})
