$(document).ready(function() {
    $('#tablaUsuarios').DataTable({
        paging: true,
        searching: true,
        pageLength: 5,
        "ajax": {
            "url": "../../model/consulta.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "IdContacto" },
            { "data": "Nombre" },
            { "data": "Empresa" },
            { "data": "Telefono" },
            { "data": "Mail" },
            { "data": "Comentario" }
        ]
    });
});