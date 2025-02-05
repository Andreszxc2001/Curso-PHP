<?php

$precio_pantalon_grande = 200;

$precio_pantalon_pequeño = 200;

if($precio_pantalon_grande < $precio_pantalon_pequeño){
    //dentro de esta cuestion si la condicion se cumple se ejecutara el codigo dentro de esta condicional
    echo "El precio pantalon grande es menor que el precio pantalon pequeño";
} elseif($precio_pantalon_grande > $precio_pantalon_pequeño){
    //dentro de esta cuestion si la condicion no se cumple se ejecutara el codigo dentro de esta condicional
    echo "El precio pantalon grande es mayor que el precio pantalon pequeño";
}
else{
    //dentro de esta cuestion si la anterior condicion no se cumple se ejecutara el codigo dentro de esta condicional
    echo "Son iguales los precios y no es posible para los pobres como ustedes";
}
?>