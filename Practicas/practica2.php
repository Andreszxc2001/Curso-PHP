<?php
define ('GRADOS',[
    'Primero',
    'Segundo',
    'Tercero',
    'Cuarto',
    'Quinto',
    'Sexto',
]);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="grados">grados</label>
    <select name="grados" id="grados">
        <option value="grados">seleciona un grado</option>
        <?php
        foreach (GRADOS as $grados) {
            echo"<option value=\"$grados\">$grados</osption>";
        } ?>
    </select>
</body>
</html>