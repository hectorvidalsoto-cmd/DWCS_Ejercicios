<?php

function getConexion() {
    $conexion = new mysqli("db", "usuarioBD", "abc123", "mi_base_de_datos", 3306);
    if($conexion->connect_error) {
        echo "Error de conexion";
        die();
    }
    return $conexion;
}
/**
 * Agrega a un cliente a la base de datos mi_base_de_datos utilizando
 * la libreria mysqli
 */

function addCliente(string $nombre, string $telf) {

    $conexion = getConexion();

    $sql = "INSERT INTO clientes(nombre, telefono) VALUES ('$nombre','$telf')";
    echo "Consulta ejecutada: <br><span>$sql</span><br>";

    $conexion->query($sql);
    $conexion->close();
}

function getClientes():array {
    $toret = [];
    $conexion = getConexion();

    $sql = "SELECT * FROM clientes";
    $resultado = $conexion->query($sql);
    while($fila = $resultado->fetch_array()) {
        $toret[] = $fila; //["nombre-param"=>"valor",]
    }
    return $toret;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    addCliente($_POST['nombre'],$_POST['telefono']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono"><br>
        <button type="submit">Agregar</button>
    </form>

    <?php
        //Obtengo clientes actuales
        $clientes = getClientes();
        if(count($clientes)>0) {
            echo "<h1>Clientes</h1><ul>";
            foreach($clientes as $cliente) {
                echo "<li>",$cliente["nombre"],"-",$cliente["telefono"],"</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>