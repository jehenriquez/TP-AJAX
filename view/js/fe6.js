$(document).ready(function() {
    $("#estado").keyup(function() {
        $.ajax({
            type: "POST",
            url: "actionEstado.php",
            data: 'keyword=' + $(this).val(),
            beforeSend: function() {
                $("#estado").css("background", "#FFF url(../img/LoaderIcon.gif) no-repeat 165px");
            },
            success: function(data) {
                $("#lista").show();
                $("#lista").html(data);
                $("#estado").css("background", "#FFF");
            }
        });
    });
});

function selectCountry(val) {
    $("#estado").val(val);
    $("#lista").hide();
}