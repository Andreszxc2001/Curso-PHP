<?php
$materia = "matemáticas";
$profesor = "Andrés Pushaina";
$Num_estudiantes = 25;

define("GRADO", "11");

$ahorasclase_x_dia = 4;

// Cálculo de horas por semana
$total_ahoras_sem = ($ahorasclase_x_dia * 5);

// Horas dedicadas a los estudiantes uno por uno
$horas_x_estudiante = ($total_ahoras_sem / $Num_estudiantes);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Clases</title>
    <style>
        /* Diseño general */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Tarjeta contenedora */
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            font-size: 1rem;
            line-height: 1.5;
            color: #555;
            margin: 5px 0;
        }

        /* Estilo especial para los datos */
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Información de Clases</h1>
        <p>Materia: <span class="highlight"><?php echo $materia; ?></span></p>
        <p>Profesor: <span class="highlight"><?php echo $profesor; ?></span></p>
        <p>Grado: <span class="highlight"><?php echo GRADO; ?></span></p>
        <p>Estudiantes inscritos: <span class="highlight"><?php echo $Num_estudiantes; ?></span></p>
        <p>Duración total de las clases en la semana: 
            <span class="highlight"><?php echo $total_ahoras_sem; ?> horas</span>
        </p>
        <p>Horas dedicadas por estudiante: 
            <span class="highlight"><?php echo number_format($horas_x_estudiante, 2); ?> horas</span>
        </p>
    </div>
</body>
</html>
