<?php
// Parámetros de conexión
$server = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "estilourbano";

// Crear la conexión usando mysqli
$conexion = new mysqli($server, $usuario, $contrasenia, $base_de_datos);

// Verificar errores de conexión
if ($conexion->connect_errno) {
    // Mostrar mensaje personalizado
    die("❌ Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Opcional: establecer conjunto de caracteres UTF-8
$conexion->set_charset("utf8");

// Si llegamos aquí, la conexión fue exitosa
// Puedes usar $conexion en otros scripts con require/include
?>
