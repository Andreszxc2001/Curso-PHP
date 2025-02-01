<?php

// Operadores de comparación

//definimos variables
$numero1 = 10;
$numero2 = 20;

//operadores de comparación que me devuelven el valor en binario (numericos)
echo $numero1 == $numero2; //false
echo "<br>";  
echo $numero1 != $numero2; //true
echo "<br>";




//operadores de comparación (igualdad) que me devuelven el valor en letras
var_dump($numero1 == $numero2); //false
echo "<br>";



//operadores de comparación (diferentes) que me devuelven el valor en letras
var_dump($numero1 <> $numero2); //true
echo "<br>";
var_dump($numero1 != $numero2); //true



//mayor que y mneor que
var_dump($numero1 > $numero2); //false
echo "<br>";
var_dump($numero1 < $numero2); //true
echo "<br>";



//mayor o igual que y menor o igual que
var_dump($numero1 >= $numero2); //false
echo "<br>";
var_dump($numero1 <= $numero2); //true
echo "<br>";

//operadores logicos (si se cumplen con las dos condiciones determinadas es verdadero sera afirmativo y cumplira con la condiciones determinaadas)

var_dump($numero1 && $numero2); //true
echo "<br>";

//ejemplo


// Datos del solicitante
$edad = 25; // Edad del usuario
$salario = 1500000; // Salario mensual

// Verificar si cumple ambas condiciones
if ($edad > 18 && $salario > 2000000) {
    echo "✅ Préstamo aprobado.";
} else {
    echo "❌ Préstamo rechazado.";
}


//operadores logicos como OR es si se cumple con alguna de las condiciones determinadas sera verdadero, pero si no cumple con ninguna de las condiciones establecidas sera falso

var_dump($numero1 || $numero2); //true
echo "<br>";

//ejemplo

// Datos del cliente
$membresia_vip = false;  // ¿Es cliente VIP? (true o false)
$total_compra = 120000;   // Total gastado en la tienda

// Verificar si el cliente recibe el descuento
if ($membresia_vip || $total_compra > 100000) {
    echo "✅ ¡Descuento aplicado! Has obtenido un 10% de descuento.";
} else {
    echo "❌ No aplicas para el descuento.";
}


?>