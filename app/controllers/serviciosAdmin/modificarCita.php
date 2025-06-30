<?php
require_once '../../config/conexion.php'; // Ajusta el path según tu estructura
session_start();
// Procesar cancelación de reserva
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelar_reserva_id'])) {
    $cancelar_id = intval($_POST['cancelar_reserva_id']);
    // Solo permitir cancelar si la reserva es del usuario actual y está pendiente
    if (!isset($_SESSION['id_usuario'])) {
        echo '<div class="text-red-500 mt-2">No tienes permiso para cancelar esta reserva.</div>';
        return;
    }
    $id_usuario = intval($_SESSION['id_usuario']);
    $stmt = $conexion->prepare("UPDATE reservas SET estado = 'cancelado' WHERE id = ? AND id_usuario = ? AND estado = 'pendiente'");
    $stmt->bind_param("ii", $cancelar_id, $id_usuario);
    if ($stmt->execute()) {
        echo "<script>window.location.href = '/app/views/AccessPublicViews/home.php';</script>";
       
    } else {
        echo '<div class="text-red-500 mt-2">No se pudo cancelar la reserva.</div>';
    }
}
?>