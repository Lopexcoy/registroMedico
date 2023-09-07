<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Pacientes </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Lista de Pacientes</h1>
        <div class="buscarNav">
            <a style="margin-left:10px; margin-right: 340px;" href="index.php">Inicio</a>

            <form method="GET">
                <input class="btn" name="apellido" style="background-color:white; color:black;" placeholder="Ingresar Apellido" />
                <input type="submit" name="buscar" class="btn" value="Mostrar Paciente" />
            </form>
           
            
        </div><br>
        <div class="container mt-3" id="response"></div>

        <?php
    include("conDB.php");

    if (isset($_GET['buscar'])) {
        $busqueda = $_GET['apellido'];

        $consulta = $conex->query("SELECT * FROM formulario WHERE apellido_paterno LIKE '%$busqueda%' OR apellido_materno LIKE '%$busqueda%'");

        if ($consulta) {
            echo '<table style="width: 100%; border-collapse: collapse; border: 1px solid #000000;">';
            echo '<tr>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">RUT</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Nombres</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Apellido Paterno</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Apellido Materno</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Dirección</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Ciudad</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Teléfono</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Email</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Fecha de Nacimiento</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Estado Civil</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Comentarios</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Editar</th>';
            echo '<th scope="col" style="padding: 8px; border-bottom: 1px solid #000000;">Eliminar</th>';
            echo '</tr>';

            while ($row = $consulta->fetch_array()) {
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

            echo '</table>';
        } else {
            echo 'Error en la consulta: ' . $conex->error;
        }
    }
    ?>
</body>
<script src="listar.pacientes.js"></script>
</html>