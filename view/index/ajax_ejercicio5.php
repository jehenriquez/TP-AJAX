<?php 
include_once('../estructura/header.php');
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
        <table id="tablaUsuarios" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                <th>IdContacto</th>
                <th>Nombre</th>
                <th>Empresa</th>                                
                <th>Telefono</th>  
                <th>Mail</th>
                <th>Comentario</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </div> 
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   
<!--    Datatables-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    
    


<script src="../js/datatables.min.js"></script>
<script src="../js/fe5.js"></script>
<?php 
include_once('../estructura/footer.php');
?>