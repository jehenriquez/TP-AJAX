$(document).ready(function() {
    var userVal = false;
    var empVal = false;
    var telVal = false;
    var mailVal = false;

    $("#uname").keyup(function() {
        var uname = $(this).val().trim();
        //console.log(uname);
        if (uname !== '') {
            $('#uname').removeClass('is-invalid');
            $.ajax({
                url: '../../model/conector.php',
                type: 'POST',
                data: { uname: uname },
                success: function(response) {

                    if (response == 1) {
                        $('#validacion').html(`<p class="text-danger">No disponible</p>`);
                        $('#uname').removeClass('is-valid');
                        userVal = false;
                    } else {
                        $('#validacion').empty();
                        $('#uname').removeClass('is-invalid').addClass('is-valid');
                        userVal = true;
                    }
                }
            });
        } else {
            $('#uname').addClass('is-invalid').removeClass('is-valid');
            $('#validacion').empty();
            userVal = false;
        }
    });


    $('#empresa').on('change', function(e) {
        var empresa = $(this).val();
        if (empresa !== '') {
            $('#empresa').addClass('is-valid').removeClass('is-invalid');
            empVal = true;
        } else {
            $('#empresa').addClass('is-invalid').removeClass('is-valid');
            empVal = false;
        }
    })



    $('#telefono').on('change', function(e) {
        var telefono = $(this).val();
        var expresion = /^[299][0-9]{9}$/;

        if (telefono !== '' && expresion.test(telefono)) {
            $('#telefono').addClass('is-valid').removeClass('is-invalid');
            telVal = true;
        } else {
            $('#telefono').addClass('is-invalid').removeClass('is-valid');
            telVal = false;
        }
    })




    $('#mail').on('change', function(e) {
        var mail = $(this).val();
        var expresion = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        if (mail !== '' && isNaN(mail) && expresion.test(mail)) {
            $('#mail').addClass('is-valid').removeClass('is-invalid');
            mailVal = true;
        } else {
            $('#mail').addClass('is-invalid').removeClass('is-valid');
            mailVal = false;
        }
    })




    $("#formPersona").submit(function(event) {

        if (userVal && empVal && telVal && mailVal) {

            var formData = {
                nombre: $("#uname").val(),
                empresa: $("#empresa").val(),
                telefono: $("#telefono").val(),
                mail: $("#mail").val(),
                comentario: $("#comentario").val()

            };
            $.ajax({
                type: "POST",
                url: "actionRegister.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {
                // console.log(data);
                $('.card-body').empty();
                $('.card-body').html(`<div class="alert alert-success">Usuario registrado!</div><div><button id="reload" class="btn btn-primary" onclick="location.reload();">Volver</button></div>`)
            });
        } else {
            $('#info-message').html(`<div class="alert alert-danger">Algunos campos contienen errores o estan vacios</div>`)
        }
        event.preventDefault();
    });

});