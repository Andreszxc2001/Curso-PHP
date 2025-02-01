<?php
// Sistema de análisis de crédito
define('SALARIO_MINIMO', 1623000);

// Definir datos
$nombre_apellido = "Arnaldo Pushaina";
$edad = 23;
$salario = 5000000;
$deuda = 1000000;
$porcentaje_crediticio = 850;
$es_aprobado = false; // Condición actual

$capacidad_pago = $salario - $deuda;

// Definimos las condiciones para aprobar o rechazar el crédito
if ($edad >= 18 && $salario >= ($deuda * 3) && $porcentaje_crediticio >= 700) {
    $es_aprobado = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aprobación de Crédito</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .resultado {
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        .aprobado {
            background-color: #4CAF50;
            color: white;
        }
        .desaprobado {
            background-color: #FF5733;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sistema de Aprobación de Crédito</h1>

    <h2>Datos del Solicitante</h2>
    <p><strong>Nombres y Apellidos:</strong> <?php echo $nombre_apellido; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
    <p><strong>Salario Mensual:</strong> $<?php echo number_format($salario, 2); ?></p>
    <p><strong>Deuda Total:</strong> $<?php echo number_format($deuda, 2); ?></p>
    <p><strong>Puntaje Crediticio:</strong> <?php echo $porcentaje_crediticio; ?></p>
    <p><strong>Capacidad de Pago:</strong> $<?php echo number_format($capacidad_pago, 2); ?></p>

    <p class="resultado <?php echo $es_aprobado ? 'aprobado' : 'desaprobado'; ?>">
        <?php echo $es_aprobado ? "✅ Crédito Aprobado" : "❌ Crédito Rechazado"; ?>
    </p>
</div>

</body>
</html>
