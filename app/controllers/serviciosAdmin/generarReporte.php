<?php

require __DIR__ . '/../../../vendor/autoload.php';
require '../../config/conexion.php';

$mpdf = new \Mpdf\Mpdf();

use Dompdf\Dompdf;
use Dompdf\Options;

// Consulta de datos
$sql = "
  SELECT p.id, p.tipo_pago, p.monto, p.fecha_pago, p.metodo_pago, p.descripcion, u.nombre as usuario_nombre, u.apellido as usuario_apellido, u2.nombre as empleado_nombre, u2.apellido as empleado_apellido
  FROM pagos p
  INNER JOIN usuarios u ON u.id = p.id_usuario
  INNER JOIN empleados e ON e.id = p.id_empleado
  INNER JOIN usuarios u2 ON u2.id = e.id_usuario
  ORDER BY p.fecha_pago DESC";

$result = $conexion->query($sql);
if (!$result) {
  die("Error en la consulta: " . $conexion->error);
}

// Construcción del HTML
$html = '
<!DOCTYPE html>
<html>
<head>
  <style>
    body { font-family: Arial; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 50px; }
    th, td { border: 1px solid #ccc; padding: 5px; text-align: center; }
    th { background-color: #eee; }
    header {
      position: fixed;
      top: -40px;
      text-align: center;
      font-size: 14px;
    }
    footer {
      position: fixed;
      bottom: -20px;
      left: 0;
      right: 0;
      text-align: center;
      font-size: 10px;
      color: gray;
    }
  </style>
</head>
<body>
<header>
  <strong>Reporte de Pagos</strong><br>
</header>

<footer>
  Página {PAGE_NUM} de {PAGE_COUNT}
</footer>

<table>
  <thead>
    <tr>
      <th colspan="7">Reporte de Pagos</th>
    </tr>
    <tr>
      <th>N°</th>
      <th>Usuario</th>
      <th>Empleado</th>
      <th>Tipo de pago</th>
      <th>Monto</th>
      <th>Fecha de pago</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>';

$numero = 1;
while ($row = $result->fetch_assoc()) {
  $usuario = htmlspecialchars($row['usuario_nombre'] . ' ' . $row['usuario_apellido']);
  $empleado = htmlspecialchars($row['empleado_nombre'] . ' ' . $row['empleado_apellido']);
  $tipo_pago = htmlspecialchars($row['tipo_pago']);
  $monto = '$' . number_format($row['monto'], 2);
  $fecha_pago = htmlspecialchars($row['fecha_pago']);
  $descripcion = htmlspecialchars($row['descripcion']);

  $html .= "<tr>
                <td>{$numero}</td>
                <td>{$usuario}</td>
                <td>{$empleado}</td>
                <td>{$tipo_pago}</td>
                <td>{$monto}</td>
                <td>{$fecha_pago}</td>
                <td>{$descripcion}</td>
              </tr>";
  $numero++;
}

$html .= '</tbody></table></body></html>';

// Configuración de Dompdf
$mpdf->WriteHTML($html);

// Generar el PDF directamente en el navegador
$mpdf->Output('reporte_pago.pdf', 'I');
