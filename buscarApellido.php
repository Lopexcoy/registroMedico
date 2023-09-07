<?php

include("conDB.php");

$columns = ['rut', 'nombres', 'apellido_paterno', 'apellido_materno', 'direccion', 'ciudad', 'telefono', 'email', 'fecha_nacimiento', 'estado_civil', 'comentarios'];
$table = "formulario";

$campo = isset($_POST['buscar']) ? $conex->real_escape_string($_POST['buscar']) : null;

if (isset($_POST['buscar_btn'])){
    $sql = "SELECT " . implode(", ", $columns) . "
    FROM $table"
    WHERE apellido_paterno LIKE '%$campo%' OR apellido_materno LIKE '%$campo%';


    $resultado = $conex->query($sql);
    $num_rows = $resultado->num_rows;

    $html = '';

    if($num_rows > 0){
        while($row = $resultado->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['rut']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['nombres']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['apellido_paterno']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['apellido_materno']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['direccion']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['ciudad']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['telefono']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['email']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['fecha_nacimiento']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['estado_civil']. '</td>';
            $html .= '<td style="padding: 8px; border-bottom: 1px solid #000000;">'. $row['comentarios']. '</td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr>';
        $html .= '<td colspan="7">Sin resultados</td>';
        $html .= '</tr>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);
}
?>