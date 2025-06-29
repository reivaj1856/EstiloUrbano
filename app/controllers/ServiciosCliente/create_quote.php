<?php
// Conexión a la base de datos
require_once '../../config/conexion.php'; // ajusta el path según tu estructura
session_start();
// Verificar si se recibió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados por el formulario
    
    $id_usuario = $_SESSION['id_usuario'];       // por ejemplo desde sesión
    $id_servicio = intval($_POST['id_servicio']);
    $id_empleado = intval($_POST['id_empleado']);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    // Validación mínima (puedes expandirla)
    if (!empty($id_usuario) && !empty($id_servicio) && !empty($id_empleado) && !empty($fecha) && !empty($hora)) {
        $sql = "INSERT INTO Reservas (id_usuario, id_servicio, id_empleado, fecha_reserva, hora_reserva)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("iiiss", $id_usuario, $id_servicio, $id_empleado, $fecha, $hora);

        if ($stmt->execute()) {
            header("Location: /app/views/AccessPublicViews/home.php");
        } else {
            echo "❌ Error al crear la reserva: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "⚠️ Por favor completa todos los campos.";
    }
}
?>
