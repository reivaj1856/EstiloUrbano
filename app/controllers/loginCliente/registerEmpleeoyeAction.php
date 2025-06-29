<?php
require '../../config/conexion.php';


    $conn = $conexion;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre      = $_POST['nombre']     ?? '';
    $apellido    = $_POST['apellido']   ?? '';
    $email       = $_POST['email']      ?? '';
    $telefono    = $_POST['telefono']   ?? '';
    $direccion   = $_POST['direccion']  ?? '';
    $contraseña  = $_POST['contraseña'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $id_categoria = $_POST['categoria'] ?? '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']); // ✅ contenido binario real
        echo "Foto cargada correctamente.";
    } else {
        $foto = null; // o manejar error
    }
    echo "Nombre: $nombre, Apellido: $apellido, Email: $email, Telefono: $telefono, Direccion: $direccion, Contraseña: $contraseña, Descripcion: $descripcion, ID Categoria: $id_categoria";

    $rol = 'empleado'; // fijo como empleado

    if (empty($nombre) || empty($apellido) || empty($email) || empty($contraseña)) {
        die("❌ Todos los campos obligatorios deben estar completos.");
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
            window.location.href = "../../views/loginViews/registerEmpleeoye.php";
        </script>';
        $verificar->close();
        $conn->close();
        exit;
    }
    $verificar->close();

    $contraseña_hash = password_hash($contraseña, PASSWORD_BCRYPT);

    // Insertar en tabla Usuarios
    $sql_usuario = "INSERT INTO Usuarios (nombre, apellido, email, contraseña, telefono, direccion, rol)
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql_usuario);
    if (!$stmt) die("❌ Error en preparación de usuario: " . $conexion->error);

    $stmt->bind_param("sssssss", $nombre, $apellido, $email, $contraseña_hash, $telefono, $direccion, $rol);

    if ($stmt->execute()) {
        $id_usuario = $conexion->insert_id;
        echo "✅ Usuario registrado correctamente con ID: $id_usuario ,Descripcion: $descripcion, ID Categoria: $id_categoria";
        // Insertar en Empleados
        $sql_emp = "INSERT INTO Empleados (id_usuario, descripcion, id_categoria, foto)
                    VALUES (?, ?, ?, ?)";
        $stmt_emp = $conexion->prepare($sql_emp);
        if (!$stmt_emp) die("❌ Error en preparación de empleado: " . $conexion->error);

        $stmt_emp->bind_param("isis", $id_usuario, $descripcion, $id_categoria, $foto);

        if ($stmt_emp->execute()) {
            echo "✅ Empleado registrado correctamente.";
            header('Location: ../../views/loginViews/login.php');
            exit;

        }
        } else {
            echo "❌ Error al registrar empleado: " . $stmt_emp->error;
        }

        $stmt_emp->close();
    } else {
        echo "❌ Error al registrar usuario: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();

?>
