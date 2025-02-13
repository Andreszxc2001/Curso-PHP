<?php

$semana = '10';

switch ($semana) {
    case '1':
        echo 'Lunes';
        break;
    case '3':
        echo 'martes';
        break;
    case '4':
        echo 'Miercoles';
        break;
    case '5':
        echo 'Jueves';
        break;
    case '6':
        echo 'Viernes';
        break;
    case '7':
        echo 'Sabado';
        break;
    case '8':
        echo 'Domingo';
        break;
    default:
        echo 'No es un dia de la semana';
        break;

}

echo match ($semana) {
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miercoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sabado',
    7 => 'Domingo',
    default => 'No es un dia de la semana',
};

?>