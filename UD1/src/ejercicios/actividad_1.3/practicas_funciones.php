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
    $contrasena = hash('sha256', $contrasena);
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

function validar (string $nic, string $password) {
    $toret = [];
    $conexion = getConexion();
    
    $password = hash('sha256', $password);
    $sql = "SELECT nic, contraseña FROM usuarios WHERE nic = '$nic' and contraseña = '$password'";
    $resultado = $conexion->query($sql);
    $toret = $resultado->fetch();
    $conexion = null;
    if(!$toret){
        return false;
    } else {
        return true;
    }
}
?>