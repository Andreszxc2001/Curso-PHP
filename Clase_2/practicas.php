<?php
$nombres = "Arnaldo Andres";
$apellidos = "Pushaina";
$documento = "1118858778";
$edad = "23";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nombre</title>
</head>
<body>
    

<h1><?php echo "Hola, muy buenos dias $nombres $apellidos";?></h1>

<p><?php echo "Tu numero de documento es $documento y tu edad es $edad"; ?></p>

<P><?php echo 'Gracias por confiar en nosotros ' . $nombres;?></P>
</body>
</html>