<?php
// aplica solo si la compra supera los 100.000 COP
define('DESCUENTO', 0.10);
define('IVA', 0.19);
define('COSTO_ENVIO_UNIDAD', 5000);

$pantalon_unidad = 60000;
$cantidad = 1;

// calculo
$total_sin_iva = $pantalon_unidad * $cantidad;
$iva = $total_sin_iva * IVA;
$envio = $cantidad * COSTO_ENVIO_UNIDAD;

// totales
$precio_total = $total_sin_iva + $iva; 

// descuento
$descuento_aplicado = 0;

if ($total_sin_iva >= 100000){
    $descuento_aplicado = $precio_total * DESCUENTO;
}

$total_pagar = ($precio_total - $descuento_aplicado) + $envio;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .factura {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            margin: 8px 0;
        }
        .total {
            font-size: 22px;
            font-weight: bold;
            color: #d9534f;
        }
    </style>
</head>
<body>

<div class="factura">
    <h1>Factura de Venta</h1>
    <p><strong>Producto:</strong> Pantalón ancho 3x5</p>
    <p><strong>Precio unitario:</strong> $<?php echo number_format($pantalon_unidad, 2); ?></p>
    <p><strong>Cantidad:</strong> <?php echo intval($cantidad); ?></p>
    <p><strong>Subtotal:</strong> $<?php echo number_format($total_sin_iva, 2); ?></p>
    <p><strong>IVA (19%):</strong> $<?php echo number_format($iva, 2); ?></p>
    <p><strong>Descuento:</strong> -$<?php echo number_format($descuento_aplicado, 2); ?></p>
    <p>(Aplica solo para compras superiores a $100.000 COP)</p>
    <p><strong>Costo de Envío:</strong> $<?php echo number_format($envio, 2); ?></p>
    <p class="total"><strong>Total a Pagar:</strong> $<?php echo number_format($total_pagar, 2); ?></p>
</div>

</body>
</html>
