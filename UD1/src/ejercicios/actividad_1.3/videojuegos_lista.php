<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
<a href="videojuegos_alta.php">Agregar nuevo</a>

    <?php
    //Obtengo clientes actuales
    require_once "videojuegos.php";
    $videojuego = getVideojuego();
    if(count($videojuego)>0){

        echo "<table>
        <tr>
            <th>Nombre</th>
            <th>Plataforma</th>
            <th>Año</th>
            <th>Género</th>
            <th>Acción</th>
        </tr>";
        foreach($videojuego as $videojuego){
            echo "<tr>
            <td>",$videojuego["nombre"],"</td>
            <td>",$videojuego["plataforma"],"</td>
            <td>",$videojuego["anio_lanzamiento"],"</td>
            <td>",$videojuego["genero"],"</td>
            <td><a href=videojuegos_modificacion.php?id=".$videojuego["id"]."\">Editar</a></td>
            <td><a href=videojuegos_baja.php?id=".$videojuego["id"]."\">Eliminar</a></td>
        </tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>