<?php
// Verifica si existe un parámetro 'id' y que sea numérico
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    // Puedes redirigir a una página de error o mostrar un mensaje
    // Ejemplo: redirigir al home
    header("Location: /app/views/ClientViews/booking.php");
    exit();

    // O mostrar un error personalizado
    // die("Acceso no autorizado. Parámetro 'id' requerido.");
}

$id_categoria = intval($_GET['id']); // Lo puedes usar luego
?>
