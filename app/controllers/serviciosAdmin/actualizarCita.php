<?php
require_once '../../config/conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar_reserva_id'])) {
    $reserva_id = intval($_POST['actualizar_reserva_id']);

    if (!isset($_SESSION['id_usuario'])) {
        echo '<div class="text-red-500 mt-2">No tienes permiso para actualizar esta reserva.</div>';
        return;
    }

    

    $id_usuario = intval($_SESSION['id_usuario']);
    $fecha = $_POST['fecha'] ?? null;
    $hora = $_POST['hora'] ?? null;
    $servicio = $_POST['id_servicio'] ?? null;
    $estado = $_POST['estado'] ?? null;
    $id_empleado = $_POST['estilistas'] ?? null;


    $stmt = $conexion->prepare(
        "UPDATE reservas SET fecha_reserva = ?, hora_reserva = ?,   id_servicio = ?, estado = ?, id_empleado = ? 
         WHERE id = ? ;"
        
    
    );
    
    echo $estado;

    // Asegúrate de que los tipos coincidan con los de la base de datos
    // Por ejemplo, si 'estado' es string y los demás son enteros:
    $stmt->bind_param("sssssi", $fecha, $hora, $servicio, $estado, $id_empleado, $reserva_id);

    if ($stmt->execute()) {
        echo "<script>window.location.href = '/app/views/AdminEmpleoyee/modificarcita.php';</script>";

    } else {
        echo '<div class="text-red-500 mt-2">No se pudo actualizar la reserva.</div>';
    }
}
else {
    echo '<div class="text-red-500 mt-2">No se pudo actualizar la reserva.</div>';
}
?>
