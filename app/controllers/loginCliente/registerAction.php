<?php
require '../../config/conexion.php'; // Esto debería definir $conexion (mysqli)

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre     = trim($_POST['nombre']);
    $apellido   = trim($_POST['apellido']);
    $email      = trim($_POST['email']);
    $telefono   = trim($_POST['telefono']);
    $direccion  = trim($_POST['direccion']);
    $rol        = 'cliente'; // Rol por defecto
    $contraseña = $_POST['contraseña'];

    $conn = $conexion;

    if (empty($contraseña)) {
        die("❌ La contraseña no puede estar vacía.");
    }

    // Verificar si el email ya existe
    $verificar = $conn->prepare("SELECT id FROM Usuarios WHERE email = ?");
    $verificar->bind_param("s", $email);
    $verificar->execute();
    $verificar->store_result();

    if ($verificar->num_rows > 0) {
        // Email ya registrado
        echo '<script type="text/javascript">
            alert("Usuario ya registrado. Por favor, intenta con otro email.");
            window.location.href = "../../views/loginViews/register.php";
        </script>';
        $verificar->close();
        $conn->close();
        exit;
    }
    $verificar->close();

    // Continuar con el registro
    $contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT);

    $sql = "INSERT INTO Usuarios (nombre, apellido, email, contraseña, telefono, direccion, rol)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("❌ Error al preparar la consulta: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $nombre, $apellido, $email, $contraseña_hash, $telefono, $direccion, $rol);

    if ($stmt->execute()) {
        // Crear carrito si es cliente
        if ($rol === 'cliente') {
            $id_usuario = $conn->insert_id;
            $carrito = $conn->prepare("INSERT INTO Carrito (id_usuario) VALUES (?)");
            $carrito->bind_param("i", $id_usuario);
            $carrito->execute();
            $carrito->close();
        }

        // Redirigir al login
        header('Location: ../../views/loginViews/login.php');
        exit;
    } else {
        echo "❌ Error al registrar usuario: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
