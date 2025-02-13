<?php
$cliente = "Andres";
$edad = 19;
$bebidas_consumidas = 15;
$vip = false;
$hora = '20:00';

//EDAD MINIMA PAARA INGRESAR AL ESTABLECIMIENTO
define ('EDAD_MINIMA', 18);

//HORAIOS DE ENTRADA NORMAL Y VIP
define('HORARIOS_ENTRADA', '21:00',);
define('HORARIOS_ENTRADA_VIP', '20:00',);

//HORARIO DE SALIDA
define('HORARIO_SALIDA', '03:00',);

//CANTIDAD MINIMA PARA EVITAR REINGRESO
define('CANTIDAD_BEBIDAS',10);


//CONDICIONAL PARA VERIFICAR SI EL CLIENTE ES MAYOR DE EDAD
if ($edad <= EDAD_MINIMA){
    $mensaje = "No puedes ingresar al establecimiento $cliente, por favor abstengase de insistir en querer ingresar";
}elseif ($edad >= EDAD_MINIMA){
    $mensaje = "Puede ingresar señor $cliente, adelante, pase a la taquilla para verificar si usted es cliente VIP";
}

//CONDICIONAL PARA VERIFICAR SI EL CLIENTE ES VIP

if ($vip == true && ){
$
}


?>