<?php

// Una variable siempre se inicia con un sibolo de dolar y luego con el nombre de la variable

// Una variable es un espacio en memoria que se le asigna un valor

// Una variable puede ser de tipo numerico, texto, booleano, entre otros

//Para definir una variable y los estilos de variable se puede emplear es estilo snake case para definir una variable "$nombre_completo"
$nombre = "Arnaldo Pushaina"; // Esta es una variable de tipo texto con declaracion de comillas dobles



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Aca estamos concatenando variables -->
    <h1> <?php echo "Hola, Muy buenos dias " . $nombre; ?></h1>


    <!-- Aca estamos concatenando variables de otra forma mas practica, aunque esto solo aplica si esta trbajando con comillas dobles -->
    <h1> <?php echo "Hola, Muy buenos dias $nombre"; ?></h1>

<!-- Aca aplicamos la practica pero con una sola comilla y esto me rfelja en error -->
    <h1> <?php echo 'Hola, Muy buenos dias $nombre'; ?></h1>

    <!-- Esta si es una buena fotrma de aplicar la concatenacion de variables en donde se trabaj con una sola comilla -->

    <h1> <?php echo 'Hola, Muy buenos dias '. $nombre; ?></h1>
    

</body>
</html>


