
<?php
session_start();
require '../../config/conexion.php'; // Asegúrate de que define $conexion (mysqli)

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die("❌ Por favor, completa todos los campos.");
    }

    $conn = $conexion;

    // Verificar si el email existe
    $stmt = $conn->prepare("SELECT id, nombre, apellido, email, contraseña, rol FROM Usuarios WHERE email = ?");
    if (!$stmt) {
        die("❌ Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario['contraseña'])) {
            // Inicio de sesión exitoso
            $_SESSION['id_usuario'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['apellido'] = $usuario['apellido'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['rol'] = $usuario['rol'];

            // Redirigir según el rol
            switch ($usuario['rol']) {
                case 'cliente':
                    header('Location: /app/views/AccessPublicViews/home.php');
                    break;
                case 'empleado':                   
                    // Consulta extra para obtener la categoría del empleado
                    $empleadoStmt = $conn->prepare("SELECT id_categoria FROM Empleados WHERE id_usuario = ?");
                    if ($empleadoStmt) {
                        $empleadoStmt->bind_param("i", $usuario['id']);
                        $empleadoStmt->execute();
                        $empleadoResult = $empleadoStmt->get_result();

                        if ($empleadoResult->num_rows === 1) {
                            $empleado = $empleadoResult->fetch_assoc();
                            if ($empleado['id_categoria'] == 5) {
                                header('Location: /app/views/adminEmpleoyee/homeSupervisor.php');
                            } else {
                                header('Location: /app/views/EmpleoyeeViews/homeEmpleoyee.php');
                            }
                        } else {
                            echo "⚠️ No se encontró información del empleado.";
                        }
                        $empleadoStmt->close();
                    } else {
                        echo "⚠️ Error al preparar la consulta de empleado.";
                    }
                    break;
                case 'administrador':
                    header('Location: /app/views/adminViews/dashboard.php');
                    break;
                default:
                    
                    echo "⚠️ Rol no reconocido.";
                    break;
            }
            exit;
        } else {
            echo "<script>alert('❌ Contraseña incorrecta.'); window.location.href = '/app/views/loginViews/login.php';</script>";
            exit;
        }
    } else {
        echo "❌ El correo electrónico no está registrado.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "❌ Método no permitido.";
}
?>
