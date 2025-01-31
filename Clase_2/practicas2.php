<?php
// Variables para productos
$cafe = 10;
$te = 30;
$pastel = 45;

define('CARGO_SERVICIO', 0.10);

$totalproductos = ($cafe + $te + $pastel);
$cargototal = $totalproductos * CARGO_SERVICIO;
$preciototal = $totalproductos + $cargototal;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería Virtual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #6c757d;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            max-width: 600px;
            margin: 2rem auto;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #495057;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #e9ecef;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border-radius: 5px;
        }
        p {
            font-size: 1.1rem;
            margin: 0.5rem 0;
        }
        .total {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pastelería Virtual</h1>
    </header>
    <main>
        <h2>Detalle de Productos</h2>
        <ul>
            <li>Café: $<?php echo number_format($cafe, 2); ?></li>
            <li>Té: $<?php echo number_format($te, 2); ?></li>
            <li>Pastel: $<?php echo number_format($pastel, 2); ?></li>
        </ul>
        
        <h2>Resumen de Compra</h2>
        <p>Total de productos: <span class="total">$<?php echo number_format($totalproductos, 2); ?></span></p>
        <p>Cargo por servicio (10%): <span class="total">$<?php echo number_format($cargototal, 2); ?></span></p>
        <p>Total a pagar: <span class="total">$<?php echo number_format($preciototal, 2); ?></span></p>
    </main>
</body>
</html>
