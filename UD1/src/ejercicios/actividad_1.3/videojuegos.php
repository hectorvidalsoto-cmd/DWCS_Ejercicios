<?php

function getConexion()
{
    //1º Tenemos que establecer la conexión entre PHP y la BD.
    $dsn = "mysql:host=db;dbname=videoteca";
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
function addVideoJuego(string $nombre, string $plat, int $anho, string $genero)
{


    $sql = "INSERT INTO videojuegos( nombre, plataforma, anio_lanzamiento, genero) VALUES ('$nombre','$plat','$anho','$genero')";
    $conexion = getConexion();
    echo "Consulta ejecutada: <br><span>$sql</span><br>";
    try {
        $filasAfectadas = $conexion->exec($sql);
        echo "Se ha borrado $filasAfectadas videojuego(s)<br>";
    } catch (PDOException $th) {
        echo "Algo ha fallado en la consulta.<br>";
    }


    $conexion = null;
}

function deleteVideojuego(int $id) {
    $sql = "DELETE FROM videojuegos WHERE id = '$id'";
    $conexion = getConexion();
    echo "Consulta ejecutada: <br><span>$sql</span><br>";
    try {
        $filasAfectadas = $conexion->exec($sql);
        echo "Se ha agregado $filasAfectadas videojuego(s)<br>";
    } catch (PDOException $th) {
        echo "Algo ha fallado en la consulta.<br>";
    }
}

function getVideojuego(): array
{
    $toret = [];
    $conexion = getConexion();

    $sql = "SELECT * FROM videojuegos";
    $resultado = $conexion->query($sql);
    $toret = $resultado->fetchAll();
    $conexion = null;
    return $toret;
}
?>