<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LOGIN</h1>
    <?php

    function contraseña (string $usuarioP, string $contraseñaP) {
        $usuario = "hector";
        $contraseña = "spheal";
    
        if(!empty($usuarioP) && !empty($contraseñaP)) {
            if (($usuario === $usuarioP) && ($contraseña === $contraseñaP)) {
                echo "Usuario aceptado";
            } else {
                echo "Acceso denegado. Escriba de nuevo";
            }
        } else {
            echo "cadenas vacias, Escriba de nuevo";
        } 
    }
    contraseña ("hector","spheal");
    ?>
</html>