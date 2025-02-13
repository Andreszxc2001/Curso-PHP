<?php
$precio1 = 30;
$precio2 = 20;

// Operador ternario que logra lo mismo que las condicionales pero con menos lineas de codigo  si se cumple la condicion se ejecutara el codigo del lado izquierdo y si no se cumple se ejecutara el codigo del lado derecho

$precio = $precio1 > $precio2? 'El precio #1 es mayor': ($precio1 < $precio2? 'El precio #1 es menor': 'El precio es igual');
echo $precio;

?>