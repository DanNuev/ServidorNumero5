<?php
// insertar_usuario.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "1234", "usuarios");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Preparar la consulta SQL para insertar datos
    $consulta = "INSERT INTO informacion (nombre, email) VALUES ('$nombre', '$email')";

    // Ejecutar la consulta
    if ($conexion->query($consulta) === TRUE) {
        echo "Usuario agregado correctamente.";
    } else {
        echo "Error al agregar usuario: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Acceso no permitido.";
}
