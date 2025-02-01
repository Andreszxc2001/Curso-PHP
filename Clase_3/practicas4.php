<?php
// Definir salario mensual como constante
define('SALARIO_MENSUAL', 2000000);

// Definir gastos mensuales
$arriendo = 300000;
$servicios = 250000;
$transporte = 150000;
$alimentacion = 350000;
$otros_gastos = 100000;

// Calcular el total de gastos
$gastos_totales = $arriendo + $servicios + $transporte + $alimentacion + $otros_gastos;

// Calcular saldo disponible
$saldo = SALARIO_MENSUAL - $gastos_totales;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe Financiero</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Contenedor del informe */
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
        }

        /* Título */
        h1 {
            color: #6a11cb;
            font-size: 24px;
        }

        /* Estilo para los párrafos */
        p {
            font-size: 18px;
            margin: 10px 0;
        }

        /* Negrita en los textos importantes */
        strong {
            color: #2575fc;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Informe Financiero</h1>
        <p><strong>Salario Mensual:</strong> $<?php echo number_format(SALARIO_MENSUAL, 0, ',', '.'); ?></p>
        <p><strong>Total Gastos:</strong> $<?php echo number_format($gastos_totales, 0, ',', '.'); ?></p>
        <p><strong>Saldo Disponible:</strong> $<?php echo number_format($saldo, 0, ',', '.'); ?></p>
    </div>

</body>
</html>
