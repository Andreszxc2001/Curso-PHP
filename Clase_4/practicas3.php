<?php
// 1. Definir constantes
define('DESCUENTO', 0.15); // 15% de descuento
define('ENVIO_GRATIS', 300000);
define('COSTO_ENVIO', 10000);
define('UMBRAL_DESCUENTO', 200000);
$fg = input("fg"); 
$
// 2. Definir variables
$precio_producto = 75000; // Precio unitario
$cantidad = 1; // Cantidad de productos comprados
$cliente_vip = true; // Booleano que indica si el usuario es VIP

// 3. Calcular el total sin descuento
$total_sin_descuento = $precio_producto * $cantidad;

// 4. Aplicar descuento si cumple con una de las condiciones
$descuento_aplicado = 0;
if ($total_sin_descuento >= UMBRAL_DESCUENTO || $cliente_vip) {
    $descuento_aplicado = $total_sin_descuento * DESCUENTO;
}

// 5. Calcular el total después del descuento
$total_con_descuento = $total_sin_descuento - $descuento_aplicado;

// 6. Determinar el costo de envío
$costo_envio = ($total_con_descuento >= ENVIO_GRATIS) ? 0 : COSTO_ENVIO;

// 7. Calcular el total a pagar
$total_a_pagar = $total_con_descuento + $costo_envio;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Compra</title>
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
            max-width: 450px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            margin: 8px 0;
        }
        .resaltado {
            font-weight: bold;
            color: #28a745;
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
    <h1>Factura de Compra</h1>
    <p><strong>Producto:</strong> Zapatos deportivos</p>
    <p><strong>Precio unitario:</strong> $<?php echo number_format($precio_producto, 2); ?></p>
    <p><strong>Cantidad:</strong> <?php echo intval($cantidad); ?></p>
    <p><strong>Subtotal:</strong> $<?php echo number_format($total_sin_descuento, 2); ?></p>

    <?php if ($descuento_aplicado > 0): ?>
        <p class="resaltado"><strong>Descuento aplicado (15%):</strong> -$<?php echo number_format($descuento_aplicado, 2); ?></p>
    <?php else: ?>
        <p>No se aplicó descuento</p>
    <?php endif; ?>

    <p><strong>Total con descuento:</strong> $<?php echo number_format($total_con_descuento, 2); ?></p>

    <p><strong>Costo de Envío:</strong> 
        <?php echo ($costo_envio == 0) ? "<span class='resaltado'>¡Gratis!</span>" : "$" . number_format($costo_envio, 2); ?>
    </p>

    <p class="total"><strong>Total a Pagar:</strong> $<?php echo number_format($total_a_pagar, 2); ?></p>
</div>

</body>
</html>
