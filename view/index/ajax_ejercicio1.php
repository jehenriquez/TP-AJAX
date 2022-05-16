<?php 
include_once('../estructura/header.php');
?>

<div class="container-fluid" id="containerEj1">
    
    <div class="position-relative overflow-hidden p-3 ms-5 me-5">
        
        <h4 class="text-title text-center m-3">Listado de Chalecos</h4>

        <div class="row align-items-center">
            <div class="col-md-6 offset-md-3">
                <div class="form-group ">
                    <label>Tipo</label>
                    <select name="tipo" id="tipo" class="form-control input-md mt-2">
                        <option value="">Seleccioná un chaleco</option>
                    </select>
                    <br />
                </div>
                <div class="form-group" id="contTalle">
                    <label>Talle</label>
                    <select name="talle" id="talle" class="form-control input-md">
                        <option value=""></option>
                    </select>
                </div>
                <div class="alert alert-success mt-4 d-flex" id="contPrecio">
                    <h4 class="m-5">Precio: <span id="precio"></span></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/fe1.js"></script>
<?php 
include_once('../estructura/footer.php');
?>