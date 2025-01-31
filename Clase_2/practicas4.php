<?php 

// Definir una constante para la velocidad de la luz
define('VELOCIDAD_DE_LA_LUZ', 300000); // Velocidad de la luz en km/s

// Variables
$distancia = 2000000; // Distancia en kilómetros
$tiempo = 1000; // Tiempo en segundos

// Calcular la velocidad
$velocidad = $distancia / $tiempo;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Velocidad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        .result {
            font-size: 1.2em;
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .error {
            color: #d9534f;
            font-weight: bold;
        }

        .valid {
            color: #5bc0de;
            font-weight: bold;
        }

        .note {
            font-style: italic;
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Cálculo de Velocidad</h1>

        <div class="result">
            <p>La velocidad calculada es: <strong><?php echo number_format($velocidad, 2); ?> km/s</strong></p>
        </div>

        <div class="result">
            <?php
                // Validar si la velocidad está por debajo de la velocidad de la luz
                if ($velocidad < VELOCIDAD_DE_LA_LUZ) {
                    echo "<p class='valid'>La velocidad es válida y está por debajo del límite de la velocidad de la luz, que es de <strong>" . VELOCIDAD_DE_LA_LUZ . " km/s</strong>.</p>";
                } else {
                    echo "<p class='error'>¡Imposible! La velocidad calculada supera la velocidad de la luz.</p>";
                }
            ?>
        </div>

        <p class="note">*La velocidad de la luz se considera como 300,000 km/s en este cálculo.</p>
    </div>
</body>
</html>
