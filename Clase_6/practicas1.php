<?php
$usuario = "Arnaldo Pushaina";
$rol = "Invitado";

// Definición de roles como constantes
define('ROLES', ["Admin", "User", "Invitado"]);

// Determinar el mensaje de bienvenida
if (in_array($rol, ROLES)) {
    $mensaje = "Tu rol de usuario es <strong>$rol</strong>, un gusto volver a verte <strong>$usuario</strong>.";
    $claseMensaje = "bienvenida";
} else {
    $mensaje = "No eres parte de la organización. Acceso denegado.";
    $claseMensaje = "error";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 50%;
        }

        h1 {
            color: #333;
        }

        .mensaje {
            padding: 15px;
            font-size: 18px;
            border-radius: 5px;
        }

        .bienvenida {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p class="mensaje <?php echo $claseMensaje; ?>"><?php echo $mensaje; ?></p>
    </div>
</body>
</html>
