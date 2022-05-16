$(document).ready(function() {
    $.getJSON("jsonEj1.json", function(data) {
        let tag
        $.each(data, function(key, value) {
            tag += `<option id="${key}" class="tipo" value=${value.tipo}> ${value.tipo} </option>`
        })
        $('#tipo').append(tag)
    })

})

function cargarTalles(tipo) {
    $.getJSON("jsonEj1.json", function(data) {
        let tag
        talles = data[tipo].talles
        $.each(talles, function(key, value) {
            tag += `<option id="${value}" class="talle" value=${value}> ${value} </option>`
        })
        $('#talle').append(tag)
        $('#precio').empty()
        $('#precio').append(`${data[tipo].precio}`)




    })

}

$('#tipo').on('change', function(e) {
    var tipoSelected = $('select option').filter(':selected').attr("id");
    $('#talle').empty()
    $('#contTalle').show();
    $('#contPrecio').show();
    cargarTalles(tipoSelected)
    if (tipoSelected == null) {
        $('#contTalle').hide();
        $('#contPrecio').hide();
    }
})