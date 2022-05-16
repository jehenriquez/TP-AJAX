<?php 
include_once('../estructura/header.php');
?>

<div class="container">
    
    <div id="ej3">
        
       
        <div class="tab-content">
            <!-- Lista elementos -->
            <div class="tab-pane show active mt-4" id="elemento-1">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- lista -->
                        <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                                <a id="lista1" class="nav-link active" type="button" role="tab">Disfraz de Gato de Navidad</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista2" class="nav-link">Traje fiesta</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista3" class="nav-link">Buzo Abrigo Ropa Gato Peluche</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista4" class="nav-link">Abrigo Ropa Gato Sweater Tejido Lana</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista5" class="nav-link">Cálido Suéter con adorno de lunares</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista6" class="nav-link">Cálido Suéter con adorno</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista7" class="nav-link">Moño Cuello Gato</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista8" class="nav-link">Collar Corbata</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista9" class="nav-link">Collar Corbata Negra</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista10" class="nav-link">Lion Mane</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista11" class="nav-link">Easy Joy Traje</a>
                            </li>
                            <li class="nav-item">
                                <a id="lista12" class="nav-link">Hillylolly Jersey</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8 text-center">
                        <!-- IMG -->
                        <img id="imagenPrincipal" class="img-fluid img-thumbnail col-12" src="../img/01.jpg">
                    </div>
                </div>
                <hr>
            </div>

            
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="infModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header " style="background-color:rgb(254, 224, 184);">
                        <h4 class="modal-title">Información</h4>
                        <button type="button" class="close btn btn-default" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg></button>
                    </div>
                    <div id="modal-principal" class="modal-body">

                    </div>
                    <div id="modal-tabla" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="close btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../js/fe3.js"></script>
<?php 
include_once('../estructura/footer.php');
?>