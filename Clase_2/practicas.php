<?php

// Tienda en línea

// Productos: camisetas oversizes
$producto1 = 'Camisetas oversizes';
$precio1 = 30;

// Productos: pantalones anchos
$producto2 = 'Pantalones anchos';
$precio2 = 70;

// Constante porque el impuesto es para todos los productos
define('IVA', 0.19);

// Cálculo de precios finales
$preciofinal1 = $precio1 + ($precio1 * IVA);
$preciofinal2 = $precio2 + ($precio2 * IVA);

// Cálculo del IVA por producto
$precio1iva = $precio1 * IVA;
$precio2iva = $precio2 * IVA;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa en Línea</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .producto {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .resumen {
            margin-top: 20px;
            padding: 15px;
            border: 2px solid #ccc;
            background-color: #e9e9e9;
        }
        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <main>
        <h1>Tienda de Ropa en Línea</h1>

        <!-- Lista de productos -->
        <div class="producto">
            <h2>Producto: <?php echo $producto1; ?></h2>
            <p>Precio final: <strong>$<?php echo number_format($preciofinal1, 2); ?></strong> (IVA incluido)</p>
        </div>
        
        <div class="producto">
            <h2>Producto: <?php echo $producto2; ?></h2>
            <p>Precio final: <strong>$<?php echo number_format($preciofinal2, 2); ?></strong> (IVA incluido)</p>
        </div>

        <!-- Resumen de la compra -->
        <div class="resumen">
            <h2>Resumen de Compra</h2>
            <p>Precio neto: <strong>$<?php echo number_format($precio1 + $precio2, 2); ?></strong></p>
            <p>Total IVA: <strong>$<?php echo number_format($precio1iva + $precio2iva, 2); ?></strong></p>
            <p>Total a pagar: <strong>$<?php echo number_format($preciofinal1 + $preciofinal2, 2); ?></strong></p>
        </div>
    </main>
</body>
</html>
