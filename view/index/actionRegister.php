<?php
include_once('../../util/funciones.php');
include_once('../../model/Contacto.php');
include_once('../../controller/AbmContacto.php');

$data = data_submitted();
$abmC = new AbmContacto();
$response = 201;
if ($abmC->alta($data)) {
    $response = 200;
}

echo json_encode($response);
