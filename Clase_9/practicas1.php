<?php
// Sistema de gestión de videojuegos

// Constantes
define('IVA', 0.19);
define('DESCUENTO', 0.50); // Solo aplica a juegos que superen el precio de 70,000 COP
define('PUNTOS', 0.1);

// Cliente
$nombre_cliente = 'Juan';
$edad_cliente = 25;
$puntos_cliente = 0;

// Lista de juegos
$nobre_del_juego1 = 'Super Mario Bros';
$precio1 = 40000;
$Catidad_stock1 = 1;
$oferta1 = false;
$descuento1 = 0.10;

$nobre_del_juego2 = 'MORTAL KOMBAT';
$precio2 = 60000;
$Catidad_stock2 = 1;
$oferta2 = true;
$descuento2 = 0.30;

$nobre_del_juego3 = 'FIFA 24';
$precio3 = 70000;
$Catidad_stock3 = 1;
$oferta3 = false;
$descuento3 = 0.50;

echo '<br>';

// ¿Hay en stock?
if ($Catidad_stock3 <= 0) {
    echo 'Agotado';
} else {
    echo 'Sí hay en stock';
}
echo '<br>';

// ¿El juego está en oferta?
if ($oferta3) {
    echo 'El juego está en oferta';
} else {
    echo 'El juego no está en oferta';
}
echo '<br>';

// ¿A qué categoría pertenece el juego?
switch ($precio3) {
    case 70000:
        echo 'Es un juego Premium';
        break;
    case 60000:
        echo 'Es un juego costoso';
        break;
    case 40000:
        echo 'Es un juego económico';
}
echo '<br>';

// ¿Cuánto es el valor final con impuestos?
$precio_final = $precio3 + ($precio3 * IVA);
echo '<br>';

// Cálculo de puntos por compra
$puntos_acumulados = 0; // Inicializamos los puntos

while ($precio_final >= 10000) {
    $puntos_acumulados++;
    $precio_final -= 10000;
}

// Mostrar puntos acumulados
echo 'El cliente tiene ' . $puntos_acumulados . ' puntos';
echo '<br>';


// Inicializar descuento para evitar error de variable indefinida
$precio_descuento = 0;

// ¿Aplica para descuento?
if ($precio3 >= 70000) {
    $precio_descuento = $precio3 * DESCUENTO;
} elseif ($precio3 >= 60000) {
    $precio_descuento = $precio2 * $descuento2;
} elseif ($precio3 >= 40000) {
    $precio_descuento = $precio1 * $descuento1;
}

// Mostrar descuento aplicado
echo '<br>';
echo 'El descuento por compra es: ' . $precio_descuento;

?>
