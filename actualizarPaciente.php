<?php
include("conDB.php");

$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidoPaterno = $_POST['apellido_paterno'];
$apellidoMaterno = $_POST['apellido_paterno'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fechaDeNacimiento = $_POST['date'];
$estadoCivil = $_POST['estadoCivil'];
$comentarios = $_POST['comentarios'];

$sql = "UPDATE formulario SET 
        nombres='$nombres', 
        apellido_paterno='$apellidoPaterno',
        apellido_materno='$apellidoMaterno',
        direccion='$direccion',
        ciudad='$ciudad',
        telefono='$telefono',
        email='$email',
        fecha_nacimiento='$fechaDeNacimiento',
        estado_civil='$estadoCivil',
        comentarios='$comentarios'
        WHERE rut='$rut'";

if (mysqli_query($conex, $sql)) {
} else {
    echo '<div class="formulario" style="text-align:center;"><h3>Error: ' . $sql . "<br>" . mysqli_error($conex) . '</h3></div>';
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Paciente</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="formulario">
        <?php
            if (mysqli_query($conex, $sql)) {
                echo '<h3 style="text-align: center;">Registro actualizado</h3>';
            } else {
                echo '<h3 style="text-align: center;">Error: ' . mysqli_error($conex) . '</h3>';
            }
        ?>
        <div class="btngroup" style="justify-content: center;">
            <a href="index.php" class="btn">Inicio</a>
        </div>
    </div>
</body>
</html>