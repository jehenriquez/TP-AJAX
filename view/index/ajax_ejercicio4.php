<?php 
include_once('../estructura/header.php');
?>

<div class="container-fluid" id="containerEj4">

        <h4 class="text-title text-center m-3 fw-bold'">Contactos</h4>
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-3">
                <div class="card rounded-2">
                    <div class="card-body">
                        <div id="info-message"></div>
                        <form id="formPersona" name="formPersona" method="post" action="actionRegister.php"
                              novalidate>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="uname" name="uname"
                                       placeholder="Nombre de usuario" required>
                                <label for="uname">Usuario</label>
                                <div class="invalid-feedback">Ingrese telefono de usuario.</div>
                                <div class="valid-feedback">Disponible</div>
                                <div id="validacion"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="empresa" name="empresa" type="empresa"
                                       placeholder="empresa" required>
                                <label for="empresa">Empresa</label>
                                <div class="invalid-feedback">Ingrese una empresa válida.</div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="telefono"
                                       required>
                                <label for="telefono">Celular</label>
                                <div class="invalid-feedback">Ingrese un numero de telefono válido</div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="mail" name="mail" type="text"
                                       placeholder="mail" required>
                                <label for="mail">Email</label>
                                <div class="invalid-feedback">Ingrese un mail válido</div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="form-floating mb-3">
                                <div id="entrada">
                                    <input class="form-control" id="comentario" name="comentario" type="text"
                                           placeholder="comentario">
                                </div>
                                <div class="container " id="salida">
                                    <ul id="list"></ul>
                                </div>

                                <div class="d-flex">
                                    <button id="btnEnviar" class="btn btn-outline-secondary col-6" type="submit">Enviar</button>
                                    <button id="btnEnviar" class="btn btn-outline-danger col-6" type="reset">Limpiar</button>
                                </div>
                            </div>
                        </form>


                        


                    </div>
                </div>
            </div>
        </div>
        <script src="../js/fe4.js"></script>

<?php 
include_once('../estructura/footer.php');
?>