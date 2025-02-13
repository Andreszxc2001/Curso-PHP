<?php


// Estructuras repetitivas o bucles (WHILE Y DO WHILE)
$numero = 1;

while ($numero <= 2) {
    echo "el numero es $numero <br>";
    //empleas un operador de incremento para que el bucle no sea infinito
    $numero++;
    
}

echo "<br>";

echo "haz salido del bucle vuelve a ingresar " . "<br>";

echo "<br>";

do {
    echo "el numero es $numero <br>";
    //empleas un operador de incremento para que el bucle no sea infinito
    $numero++;
} while ($numero <= 2);
?>