<?php
//sistema de gestion de video juegos
//constantes
define('IVA', 0.19);
define('DESCUENTO', 0.50); // solo aplica a juegos que superene el precio de 50 COP

//Lista de juegos
$nobre_del_juego1 = 'Super Mario Bros';
$precio1 = 40;
$Catidad_stock1 = 1;
$oferta1 = false;
$descuento1 = 0.30;

$nobre_del_juego2 = 'MORTAL kOMBAT';
$precio2 = 70;
$Catidad_stock2 = 1;
$oferta2 = false;
$descuento2 = 0.50;

$nobre_del_juego3 = 'FIFA 24';
$precio3 = 60;
$Catidad_stock3 = 1;
$oferta3 = false;
$descuento3 = 0.50;


//hay en stock?
if ($Catidad_stock2 >= 0) {
    echo 'Agotado';
} else {
    echo 'si hay en sctok';
}

//¿a que categoria pertenece el juego?
switch($precio1){
    case '70':
        echo 'Es un juego Premiun';
        break;

    case '60':
        echo 'Es un juego costoso';
        break;

    case '40':
    echo 'Es un juego economico';

    default:
        echo 'No entra en ninguna categoria';
    break;
}

//¿cuanto es el valor final con impuestos?
$precio_final = $precio + ($precio * IVA);


//¿aplica para descuento?
if ($precio >= 40) {
    $precio_descuento = $precio  - ($precio * DESCUENTO);
}else {
    $precio_descuento = $precio;
}
?>