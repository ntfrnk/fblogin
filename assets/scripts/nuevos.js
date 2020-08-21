
$( () => {

    $('.tcheck').on('click', (event) => {
        if($('.tcheck:checked').val()=="No"){
            $('.tratamiento-input').addClass('none');
            $('#tratamiento').prop("disabled", true);
        } else {
            $('.tratamiento-input').removeClass('none');
            $('#tratamiento').removeAttr("disabled");
            $('#tratamiento').focus();
        }
    });

    $('.mcheck').on('click', (event) => {
        if($('.mcheck:checked').val()=="No"){
            $('.medicacion-input').addClass('none');
            $('#medicacion').prop("disabled", true);
        } else {
            $('.medicacion-input').removeClass('none');
            $('#medicacion').removeAttr("disabled");
            $('#medicacion').focus();
        }
    });

    $('.show-more').on('click', (e) => {
        $('.desc-short').hide();
        $('.desc-long').show();
    });

    $('#code-validate').on('click', () => {
        code = $('#confirm-code').val();
        $.post('process/registro-code.php', {'code':code}, function(resp){
            if(resp=="ok"){
                window.location = 'login/';
            } else if(resp=="nomail") {
                $('.resp').removeClass('none');
            } else {
                $('.code-resp-text').html('El código ingresado es incorrecto.');
                $('.resp').removeClass('none');
            }
        });
    });


    $('#email-send').on('click', () => {
        email = $('#email-validate').val();
        $.post('process/registro-email.php', {'email':email}, function(resp){
            if(resp=="ok"){
                window.location = 'registro/code/';
            } else {
                $('.code-resp-text').html('El e-mail ingresado no existe en nuestro sistema.');
                $('.resp').removeClass('none');
            }
        });
    });

});

function becar(userID, cursoID, medio){
    $.post('process/user-beca.php', {
        'userID': userID, 
        'cursoID': cursoID,
        'medio': medio
    }, resp => {
        if(resp=="ok"){
            user_pagos(userID);
            console.log('Pago ok');
        } else {
            console.log('Error pagos');
        }
    });
}


function newpago(){

    estado = $('#newpago-estado').val();
    medio = $('#newpago-medio').val();
    userID = $('#newpago-userID').val();
    cursoID = $('#newpago-cursoID').val();

    $.post('process/user-newpago.php', {
        'estado': estado, 
        'medio': medio, 
        'userID': userID, 
        'cursoID': cursoID
    }, resp => {
        if(resp=="ok"){
            user_pagos(userID);
            console.log('Pago ok');
        } else {
            console.log('Error pagos');
        }
    });

}