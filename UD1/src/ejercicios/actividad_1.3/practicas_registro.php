<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="practicas_registro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required><br>
        <label for="apellido1">apellido1</label>
        <input type="text" name="apellido1" required><br>
        <label for="apellido2">apellido2</label>
        <input type="text" name="apellido2"><br>
        <label for="nic">NIC</label>
        <input type="text" name="nic" required><br>
        <label for="email">email</label>
        <input type="text" name="email" required><br>
        <label for="password">Contraseña</label>
        <input type="password" name="contrasena" required><br>
        <button type="submit">Agregar</button>
    </form>
    <a href="practicas_login.php">Volver al formulario</a>
</body>
<?php
require_once "practicas_funciones.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    addUsuario(
        $_POST['nombre'],
        $_POST['apellido1'],
        $_POST['apellido2'],
        $_POST['nic'],
        $_POST['email'],
        $_POST['contrasena']
    );
}
?>

</html>