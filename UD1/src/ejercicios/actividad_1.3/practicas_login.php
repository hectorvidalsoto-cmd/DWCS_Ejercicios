<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar cliente</title>
</head>

<body>
<body>
    <form action="practicas_funciones.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required><br>
        <label for="apellido1">Primer apellido</label>
        <input type="text" name="apellido1" required><br>
        <label for="apellido2">Segundo apellido</label>
        <input type="text" name="apellido2"><br>
        <label for="nic">NIC</label>
        <input type="text" name="nic" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" required><br>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" required><br>
        <button type="submit">Agregar</button>
    </form>
    <a href="practicas_registro.php">Registro</a>

</body>

</html>