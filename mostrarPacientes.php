<link rel="stylesheet" type="text/css" href="style.css">
<?php
include("conDB.php");

$sql = "SELECT * from formulario";
$resultado = mysqli_query($conex, $sql);

if ($resultado) {
    echo '<table style="width: 100%; border-collapse: collapse; border: 1px solid #000000;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Rut</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Nombres</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Apellido Paterno</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Apellido Materno</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Direccion</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Ciudad</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Telefono</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Email</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Fecha de nacimiento</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Estado civil</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Comentarios</th>';
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;"></th>';  // columna para "Editar"
    echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;"></th>';  // columna para "Eliminar"
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_array($resultado)) {
        echo '<tr>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['rut'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['nombres'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['apellido_paterno'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['apellido_materno'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['direccion'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['ciudad'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['telefono'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['email'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['fecha_nacimiento'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['estado_civil'] . '</td>';
        echo '<td style="padding: 8px; border-bottom: 1px solid #000000;">' . $row['comentarios'] . '</td>';
        echo '<td style="padding: 1px; border-bottom: 1px solid #000000;"><a style="font-size: 20px; width: 34%; padding: 10px 16px" href="editarPaciente.php?rut=' . $row['rut'] . '">Editar</a></td>';  // Botón de editar
        echo '<td style="padding: 1px; border-bottom: 1px solid #000000;"><a style="font-size: 20px; width: 38%; padding: 10px 16px" href="eliminar.php?rut=' . $row['rut'] . '" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este registro?\')">Eliminar</a></td>';
        
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'Sin resultados';
}
?>
