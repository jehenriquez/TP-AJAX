<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$empresa = ""; /* Password */
$dbname = "practicoajax"; /* Database name */

$con = mysqli_connect($host, $user, $empresa,$dbname);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    // removes backslashes
    $uname = stripslashes($_REQUEST['uname']);
    //escapes special characters in a string
    $uname = mysqli_real_escape_string($con, $uname);
    $empresa = stripslashes($_REQUEST['empresa']);
    $empresa = mysqli_real_escape_string($con, $empresa);
    $telefono = stripslashes($_REQUEST['telefono']);
    $telefono = mysqli_real_escape_string($con, $telefono);
    $mail = stripslashes($_REQUEST['mail']);
    $mail = mysqli_real_escape_string($con, $mail);
    $comentario = stripslashes($_REQUEST['comentario']);
    $comentario = mysqli_real_escape_string($con, $comentario);
    $query = "INSERT into `contactos` (Nombre, Empresa, Telefono, Mail, Comentario)
                     VALUES ('{$uname}','{$empresa}','{$telefono}','{$comentario}')";
    $result = mysqli_query($con, $query);


} else if (isset($_POST['uname'])) {
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $query = "select count(*) as cantidad from contactos where Nombre='" . $uname . "'";

    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result);

        $count = $row['cantidad'];

        if ($count > 0) {
            $response = 1;
        }
    }
    echo json_encode($response);
}
