<?php
require '../../config/conexion.php'; // Asegúrate de que define $conexion

// Verificamos si se proporcionó un id_categoria válido
if (!isset($_GET['id_categoria']) || !is_numeric($_GET['id_categoria'])) {
    echo "<p class='text-red-500'>⚠️ Categoría no válida o no especificada.</p>";
    exit;
}

$id_categoria = intval($_GET['id_categoria']);
echo "<h2 class='text-2xl font-bold mb-4'>Servicios de la Categoría ID: $id_categoria</h2>";
// Consulta los servicios de la categoría solicitada
$sql = "SELECT id, nombre, detalle, precio, duracion FROM Servicios WHERE id_categoria = ?";
$stmt = $conexion->prepare($sql);

if (!$stmt) {
    echo "<p class='text-red-500'>Error al preparar la consulta: {$conexion->error}</p>";
    exit;
}

$stmt->bind_param("i", $id_categoria);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado && $resultado->num_rows > 0):
    while ($servicio = $resultado->fetch_assoc()):
?>
    <div class="accordion" role="accordion">
        <button type="button"
            class="toggle-button cursor-pointer w-full text-base outline-none text-left font-semibold py-6 text-slate-900 hover:text-blue-600 flex items-center">
            <span class="mr-4"><?= htmlspecialchars($servicio['nombre']) ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42" class="w-3 fill-current ml-auto shrink-0">
                <path class="plus"
                    d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" />
                <path
                    d="M37.059 16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5h32.118C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" />
            </svg>
        </button>
        <div class="content invisible max-h-0 overflow-hidden transition-all duration-300">
            <p class="text-sm text-slate-600 leading-relaxed mb-1"><?= intval($servicio['duracion']) ?> minutos</p>
            <p class="text-sm text-yellow-600 leading-relaxed"><?= number_format($servicio['precio'], 2) ?> Bs</p>
        </div>
    </div>
<?php
    endwhile;
else:
    echo "<p class='text-gray-600'>No se encontraron servicios en esta categoría.</p>";
endif;

$stmt->close();
$conexion->close();
?>
