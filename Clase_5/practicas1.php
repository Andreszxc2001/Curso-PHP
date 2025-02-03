<?php
//IMPUESTOS
define('IVA', 0.19);

//DESCUENTOS POR CANTIDAD
define('DESCUENTO_10_SUPERIOR_A_100', 0.10);
define('DESCUENTO_15_SUPERIOR_A_200', 0.15);

//DESCUENTOS CONDICIONALES POR TIPO DE PAGO Y DIA DE SEMANA
define('DESCUENTO_5_FIN_SEMANA', 0.05);  // Corregido a 5%
define('DESCUENTO_2_PAGO_EFECTIVO', 0.02);  // Corregido a 2%

//DÍAS DE LA SEMANA
define('SEMANA', [
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes', 
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo'
]);

define('FIN_SEMANA', ['Sábado', 'Domingo']);

//METODOS DE PAGO
define('METODOS_PAGO', [
    'Efectivo',
    'Tarjeta de Crédito',
    'Tarjeta de Débito',
    'PSE',
    'NEQUI',
    'CUCA CREDITO'
]);

//PRODUCTO
$producto = "Zapato Adidas";
$precio = 80000;

// Variables para descuentos
$metodo_pago = 'CUCA CREDITO'; 
$dia_actual = SEMANA[date('l')]; 

//CALCULOS
$subtotal = $precio;
$iva = $subtotal * IVA;
$descuento = 0;

// Descuento por monto
if ($subtotal >= 200000) {
    $descuento += $subtotal * DESCUENTO_15_SUPERIOR_A_200;
} elseif ($subtotal >= 100000) {
    $descuento += $subtotal * DESCUENTO_10_SUPERIOR_A_100;
}

// Descuento por día
if (in_array($dia_actual, FIN_SEMANA)) {
    $descuento += $subtotal * DESCUENTO_5_FIN_SEMANA;
}

// Descuento por método de pago
if ($metodo_pago === 'Efectivo') {
    $descuento += $subtotal * DESCUENTO_2_PAGO_EFECTIVO;
}

$total = $subtotal + $iva - $descuento;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Compra</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .product-info {
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .price-details {
            display: grid;
            gap: 10px;
        }
        .price-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .total {
            font-size: 1.2em;
            font-weight: bold;
            color: #2c3e50;
            border-top: 2px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }
        .discount {
            color: #27ae60;
        }
        .payment-info {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-info">
            <h2>Detalles del Producto</h2>
            <p>Producto: <?php echo $producto; ?></p>
            <p>Precio Base: $<?php echo number_format($precio, 0, ',', '.'); ?></p>
        </div>

        <div class="price-details">
            <div class="price-item">
                <span>Subtotal:</span>
                <span>$<?php echo number_format($subtotal, 0, ',', '.'); ?></span>
            </div>
            <div class="price-item">
                <span>IVA (19%):</span>
                <span>$<?php echo number_format($iva, 0, ',', '.'); ?></span>
            </div>
            <div class="price-item discount">
                <span>Descuento Total:</span>
                <span>$<?php echo number_format($descuento, 0, ',', '.'); ?></span>
            </div>
            <div class="price-item total">
                <span>Total a Pagar:</span>
                <span>$<?php echo number_format($total, 0, ',', '.'); ?></span>
            </div>
        </div>

        <div class="payment-info">
            <h3>Información de Pago</h3>
            <p>Método de Pago: <?php echo $metodo_pago; ?></p>
            <p>Día de compra: <?php echo $dia_actual; ?></p>
        </div>
    </div>
</body>
</html>