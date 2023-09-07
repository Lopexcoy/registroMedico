<?php
include("conDB.php");
$rut = $_GET['rut'];
$sql = "SELECT * FROM formulario WHERE rut='$rut'";
$result = mysqli_query($conex, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Paciente</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="post" action="actualizarPaciente.php">
        <input type="hidden" name="rut" value="<?php echo $row['rut']; ?>">
        Nombres: <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>"><br>
        Apellido Paterno: <input type="text" name="apellido_paterno" value="<?php echo $row['apellido_paterno']; ?>"><br>
        Apellido Materno: <input type="text" name="apellido_materno" value="<?php echo $row['apellido_materno']; ?>"><br>
        Dirección: <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"><br>
        Ciudad: <input type="text" name="ciudad" value="<?php echo $row['ciudad']; ?>"><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Fecha de Nacimiento: <input type="date" name="date" value="<?php echo $row['fecha_nacimiento']; ?>"><br>
        Estado Civil: <input type="text" name="estadoCivil" value="<?php echo $row['estado_civil']; ?>"><br>
        Comentarios: <textarea name="comentarios"><?php echo $row['comentarios']; ?></textarea><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>