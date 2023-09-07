<?php

    include("conDB.php");
    /*if ($conex) {
        echo "conectado a la BBDD";
    }else {
        echo "no se conectó";
    }*/
    if (isset($_POST['guardar'])) {
        if (strlen($_POST['rut']) >= 1 && 
        strlen($_POST['nombres']) >= 1 && 
        strlen($_POST['apellidoPaterno']) >= 1 && 
        strlen($_POST['apellidoMaterno']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['ciudad']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['estadoCivil']) >= 1 &&
        strlen($_POST['comentarios']) >= 1) {
            $rut = trim($_POST['rut']);
            $nombres = trim($_POST['nombres']);
            $apellidoPaterno = trim($_POST['apellidoPaterno']);
            $apellidoMaterno = trim($_POST['apellidoMaterno']);
            $direccion = trim($_POST['direccion']);
            $ciudad = trim($_POST['ciudad']);
            $telefono = trim($_POST['telefono']);
            $email = trim($_POST['email']);
            $fechaDeNacimiento = trim($_POST['date']);
            $estadoCivil = trim($_POST['estadoCivil']);
            $comentarios = trim($_POST['comentarios']);
            $consulta = "INSERT INTO formulario (rut, nombres, apellido_paterno, apellido_materno, direccion, ciudad, telefono, email, fecha_nacimiento, estado_civil, comentarios) 
            VALUES ('$rut','$nombres','$apellidoPaterno','$apellidoMaterno','$direccion','$ciudad','$telefono','$email','$fechaDeNacimiento','$estadoCivil','$comentarios')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3>correcto</h3>
               <?php
            }else {
                ?>
                <h3>error</h3>
               <?php
            }
        }
        
    }else {
        ?>
        <h3>llena</h3>
       <?php
    }

?>