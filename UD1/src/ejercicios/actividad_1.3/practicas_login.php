<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar cliente</title>
</head>

<body>
    <form action="" method="post">
        <label for="nic">NIC</label>
        <input type="text" name="nic" required><br>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" required><br>
        <button type="submit">Entrar</button>
    </form>
    <a href="practicas_registro.php">Registro</a>
    <?php
    require_once "practicas_funciones.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $validacion = validar(
            $_POST['nic'],
            $_POST['contrasena']
        );

        if (!$validacion) {
            echo "Acceso denegado";
        } else {
            echo "Acceso concedido";
        }
    }
    ?>
</body>

</html>