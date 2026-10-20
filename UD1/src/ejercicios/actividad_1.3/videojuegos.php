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
        echo "Se ha agregado $filasAfectadas videojuego(s)<br>";
    } catch (PDOException $th) {
        echo "Algo ha fallado en la consulta.<br>";
    }


    $conexion = null;
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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    addVideoJuego($_POST['nombre'], $_POST['plataforma'], $_POST['anio_lanzamiento'], $_POST['genero']);
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
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma"><br>
        <label for="anio_lanzamiento">Año de lanzamiento</label>
        <input type="text" name="anio_lanzamiento"><br>
        <label for="genero">Genero</label>
        <input type="text" name="genero"><br>
        <button type="submit">Agregar</button>
    </form>

    <?php
    //Obtengo clientes actuales
    $videojuego = getVideojuego();
    if(count($videojuego)>0){

        echo "<h1>Clientes</h1><ul>";
        foreach($videojuego as $videojuego){
            echo "<li>".$videojuego["nombre"]."- ".$videojuego["plataforma"]."- ".$videojuego["anio_lanzamiento"]."- ".$videojuego["genero"]."</li>";
        }
        echo "</ul>";
    }
    ?>

</body>

</html>