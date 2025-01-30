<?php
define('DEPARTAMENTOS', [
    'Guajira',
    'Meta',
]);

//CONSTANTE DE MUNICIPIOS DE LA GUAJIRA
define('MUNICIPIOS', [
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


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
</head>
<body>
    
<h1>Datos</h1>

<div class="SECCION">

    <label for="DEPARTAMENTOS">DEPARTAMENTOS</label>
    <select name="DEPARTAMENTOS" id="DEPARTAMENTOS">
        <option>SELECCIONAR DEPARTAMENTOS</option>
        <?php
        foreach (DEPARTAMENTOS as $departamentos) {
            echo "<option value =\"$departamentos\">$departamentos</option>";
        }
        ?>
    </select>
</div>

<div class="SECCION">

    <label for="MUNICIPIOS">MUNICIPIOS</label>
    <select name="MUNICIPIOS" id="MUNICIPIOS">
        <option>SELECCIONAR MUNICIPIO</option>
        <?php
        foreach (MUNICIPIOS as $municipio) {
            echo "<option value=\"$municipio\">$municipio</option>";
        }
        ?>
    </select>
</div>


</body>
</html>