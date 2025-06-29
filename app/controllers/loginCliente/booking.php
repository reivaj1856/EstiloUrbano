<?php
session_start();
require_once '../../config/conexion.php';

if (isset($_SESSION['id_usuario'])) {
    $id = intval($_SESSION['id_usuario']);

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        // Ya tienes $usuario['nombre'], $usuario['email'], etc.
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "No has iniciado sesión.";
}
