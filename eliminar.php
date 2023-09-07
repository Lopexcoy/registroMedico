<?php
include("conDB.php");

if (isset($_GET['rut'])) {
    $rut = $_GET['rut'];
    $rut = mysqli_real_escape_string($conex, $rut);
    $sql = "DELETE FROM formulario WHERE rut = '$rut'";
    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        header("Location: listaPacientes.php");
        exit;
    } else {
        echo 'Error al eliminar el registro.';
    }
}
?>
