<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Medico </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
        <h1>Formulario de Registro Ficha Clinica</h1>
        <a href="listaPacientes.php" type="button">Buscar Pacientes</a>

        <div class="formulario">
            <form method="POST">
                <label>Rut</label>
                <input type="text" name="rut" placeholder="12345678-9" required></input>
                <label>Nombres</label>
                <input type="text" name="nombres" placeholder="Nombres" required></input>
                <label>Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" required></input>
                <label>Apellido Materno</label>
                <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" required></input>
                <label>Direccion</label>
                <input type="text" name="direccion" placeholder="Direccion" required></input>
                <label>Ciudad</label>
                <input type="text" name="ciudad" placeholder="Ciudad" required></input>
                <label>Telefono</label>
                <input type="tel" name="telefono" placeholder="56912345678" required></input>
                <label>Email</label>
                <input type="email" name="email" placeholder="email@email.com" required></input>
                <label>Fecha de Nacimiento</label>
                <input type="date" name="date" placeholder="Nombres" required></input>
                <label>Estado Civil</label>
                <select class="select" name="estadoCivil" id="estadoCivil" aria-label="Estado civil" required>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Separado">Separado</option>
                </select>
                <label>Comentario</label>
                <input name="comentarios"  type="text" required></input>
                <div class="btngroup">
                    <input name="guardar" class="btn" type="submit">
                    <button class="btn" type="reset">Limpiar</button>
                    <button class="btn" type="submit">Cerrar</button>
                </div>
            </form>
            <?php
            include("registro.php");
            ?>


        </div>

    </body>
</html>     
