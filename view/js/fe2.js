function getJSON(idTab) {
    //lee json
    $.getJSON('jsonEj2.json', function(data) {
        var html = "";
        var titulo = data[idTab]['titulo'];
        var nombTab = data[idTab]['tab'];

        html += "<h3 class='mt-5 mb-3 text-uppercase'>" + titulo + "</h3>"
        html += "<p class='col-8 font-monospace'>" + data[idTab]['texto'] + "</p>"

        $('#' + nombTab).html(html);
    });
}


$(document).ready(function() {

    getJSON(0);

    //escucha los clicks en los tabs
    $('.nav-link').on('click', function() {
        //recuperar el id del tab
        var idTab = $(this).val();
        getJSON(idTab);
    });
});