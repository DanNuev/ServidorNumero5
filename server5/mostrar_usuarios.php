<?php
// mostrar_usuarios.php

// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "1234", "usuarios");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener usuarios desde la base de datos
$consulta = "SELECT * FROM informacion";
$resultado = $conexion->query($consulta);

// Mostrar resultados
if ($resultado->num_rows > 0) {
    echo "<ul>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<li>ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay usuarios registrados.";
}

// Cerrar la conexión
$conexion->close();
?>
