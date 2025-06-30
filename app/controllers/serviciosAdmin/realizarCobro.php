<?php
require_once '../../config/conexion.php';
session_start();

// Verificar que la petición sea POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir y sanitizar los datos
    $id_usuario   = isset($_POST['id_usuario']) ? intval($_POST['id_usuario']) : 0;
    $id_reserva   = isset($_POST['idreserva']) ? intval($_POST['idreserva']) : 0;
    $tipo_pago    = 'servicio';
    $monto        = isset($_POST['monto']) ? floatval($_POST['monto']) : 0;
    $metodo_pago  = 'Efectivo';
    $id_empleado        = isset($_POST['id_empleado']) ? floatval($_POST['id_empleado']) : 0;
    $descripcion  = 'pago en efectivo hecho en cuenta :' . $id_usuario;

    if ($id_usuario > 0 && $id_reserva > 0 && in_array($tipo_pago, ['producto', 'servicio']) && $monto > 0 && $metodo_pago != '') {
        $sql = "INSERT INTO Pagos (id_usuario, id_empleado, tipo_pago, monto, metodo_pago, descripcion)
                VALUES (?, ?, ?, ?, ?,?)";
        $stmt = $conexion->prepare($sql);
        if ($stmt) {
            $stmt->bind_param('iisdss', $id_usuario, $id_empleado, $tipo_pago, $monto, $metodo_pago, $descripcion);
            if ($stmt->execute()) {
                // Cambiar estado de la reserva a 'confirmado'
                $update = $conexion->prepare("UPDATE reservas SET estado = 'confirmado' WHERE id = ?");
                if ($update) {
                    $update->bind_param('i', $id_reserva);
                    if ($update->execute()) {
                       echo "<script>window.location.href = '/app/views/AdminEmpleoyee/cobrarcitas.php';</script>";
       
                    } else {
                        echo "Pago registrado, pero error al confirmar la reserva: " . $update->error;
                    }
                    $update->close();
                } else {
                    echo "Pago registrado, pero error en la preparación de la actualización: " . $conexion->error;
                }
            } else {
                echo "Error al registrar el pago: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
        }
    } else {
        echo "Datos incompletos o inválidos.";
    }
} else {
    echo "Método no permitido.";
}

$conexion->close();
?>