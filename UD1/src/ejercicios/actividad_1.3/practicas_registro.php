<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require 'practicas_funciones.php';
    //Obtengo usuarios actuales
    $usuarios = getUsuarios();
    if (count($usuarios) > 0) {
        echo "<h1>Usuarios</h1><ul>";
        foreach ($usuarios as $usuario) {
            echo "<li>" . $usuario["nombre"] . " - " . $usuario["apellido1"] . " - " . $usuario["apellido2"] . " - " . $usuario["nic"] . " - " . $usuario["email"] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="practicas_login.php">Volver al formulario</a>
</body>
</html>