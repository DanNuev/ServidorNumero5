<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Base de Datos</title>
</head>

<body align = "center">

    <h1>Formulario con Base de Datos</h1>

        <form action="insertar_usuario.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" value="Agregar Usuario">
        </form>
    
    <h2>Usuarios Registrados:</h2>

    <?php
        // Mostrar usuarios desde la base de datos
        include "mostrar_usuarios.php";
    ?>

   
    </body>
</html>

