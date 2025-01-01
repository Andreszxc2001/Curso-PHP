<?php
// esta se imptime en la pantAlla de del navegador

$nombres_y_apellidos = "Arnaldo Andres Pushaina Pushaina";

// VARIABLES
$saludo = "¿que tal?";


// CONSTANTES
define ('LENGUAJE', 'C#');	

// CONATNTES CON UN ARRAY
define('LENGUAJES', [
    'PHP',
    'HTML',
    'CSS',
    'PYTHON',
    'JAVASCRIPT',]);

    // CONDIIONATES
    if(defined ('LENGUAJE'))


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



 <h1> <?php echo "Hola, $nombres_y_apellidos"; ?></h1>

 <p><?php echo 'Como estas '. $saludo; ?></p>

 <p>El estudiante <strong><?php echo $nombres_y_apellidos; ?></strong> ha estado envuelto en infinidades de polemicas y este joven es un gran profesional
dedicado a varios campos de la programAcion tales como <?php echo LENGUAJE;?> y otros como <?php echo implode (',', LENGUAJES); ?> </p>





</body>
</html>