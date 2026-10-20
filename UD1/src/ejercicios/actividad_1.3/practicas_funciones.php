<?php

function getConexion()
{
    //1º Tenemos que establecer la conexión entre PHP y la BD.
    $dsn = "mysql:host=db;dbname=practicas";
    try {
        $conexion = new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD.";
        die();
    }

    return $conexion;
}
/**
 * Agrega un cliente a la base de datos mi_base_de_datos utilizando
 * la PDO
 */
function addUsuario(string $nombre, string $apellido1, string $apellido2, string $nic, string $email, string $contrasena)
{
    $sql = "INSERT INTO usuarios(nombre, apellido1, apellido2, nic, email, contraseña) VALUES ('$nombre','$apellido1','$apellido2','$nic','$email','$contrasena')";
    $conexion = getConexion();
    echo "Consulta ejecutada: <br><span>$sql</span><br>";
    try {
        $filasAfectadas = $conexion->exec($sql);
        echo "Se ha agregado $filasAfectadas usuario(s)<br>";
    } catch (PDOException $th) {
        echo "Algo ha fallado en la consulta.<br>";
    }

    $conexion = null;
}

function getUsuarios(): array
{
    $toret = [];
    $conexion = getConexion();

    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);
    $toret = $resultado->fetchAll();
    $conexion = null;
    return $toret;
}

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
<body>
    <form action="" method="post">
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

    <?php
    //Obtengo usuarios actuales
    $usuarios = getUsuarios();
    if (count($usuarios) > 0) {
        echo "<h1>Usuarios</h1><ul>";
        foreach ($usuarios as $usuario) {
            echo "<li>" . $usuario["nombre"] . " - " . $usuario["apellido1"] . " - " . ($usuario["apellido2"] ?? "") . " - " . $usuario["nic"] . " - " . $usuario["email"] . "</li>";
        }
        echo "</ul>";
    }
    ?>

</body>

</html>