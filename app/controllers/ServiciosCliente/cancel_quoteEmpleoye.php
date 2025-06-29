<?php
require_once '../../config/conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelar_reserva_id'])) {
    $cancelar_id = intval($_POST['cancelar_reserva_id']);

    $id_usuario = intval($_SESSION['id_usuario']);

    // Usamos parámetros con bind_param
    $stmt = $conexion->prepare("UPDATE reservas SET estado = 'cancelado' WHERE id = ?");
    $stmt->bind_param('i', $cancelar_id);  // Un solo parámetro, tipo 'i' (integer)


    if ($stmt->execute()) {
        header("Location: /app/views/EmpleoyeeViews/reservations.php");
    } else {
        echo '<div class="text-red-500 mt-2">No se pudo cancelar la reserva.</div>';
    }

    $stmt->close();
} else {
    echo '<div class="text-red-500 mt-2">Método no permitido.</div>';
}
?>
