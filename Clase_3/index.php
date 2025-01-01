<?php


// Esto es una constante y es un valor que define y que no va acambiar en el sistema y bueno tener en cuenta que esa constante tiene un valor   que no se puede cambiar , Las conatntes se definen en mayuscula
define('USUARIOS', 'Arnaldo');

// esta es una cosntante con un nombre diferente y una raya al piso y un numero

define('USUARIOS_1', 'Carlos');


// dEENTRO DE UNA COSNTANTES SE PUEDE DEFINIR UN ARRAY CON DIFERENTES DATOS
define('MUNICIPIOS_GUAJIRA', [

    'Maicao',
    'Riohacha',
    'Uribia',
    'Manaure',
    'Albania',
    'Dibulla',
    'Fonseca',
    'Hatonuevo',
    'La Jagua del	Pilar',
]);


// para imprimir una constante se usa el echo y se pone el nombre de la constante NUMERO 1
echo USUARIOS;
 echo "<br>";   
// para imprimir una constante se usa el echo y se pone el nombre de la constante NUMERO 2
echo USUARIOS_1;
echo "<br>";

// eL ARRAY ME PERIMTE SELECIONAR CUAL DE TODOS LOS DATOS DE LA CONSTANTE SE VA A IMPRIMIR
echo MUNICIPIOS_GUAJIRA[0];
 echo "<br>";

// ESTA ES UNA CONDICIONATE QUE VEREMOS MAS ADELANTE para verificar si una constante esta definida 

if (defined('USUARIOS')) {
    echo 'La constante USUARIOS esta definida';

//  if sirve para imprimir un mensaje si la condicionante se cumple

} else {
    echo 'La constante USUARIOS no esta definida';
}
echo "<br>";

// Eelse sirve para imprimir un mensaje si la condicionante no se cumple


echo "Mi version de PHP: " . PHP_VERSION;

echo "<br>";

echo "Sistema operativo del servidor: " . PHP_OS;

?>