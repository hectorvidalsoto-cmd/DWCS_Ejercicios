<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
    <form action="videojuegos_alta.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required><br>
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma" required><br>
        <label for="anio_lanzamiento">Año de lanzamiento</label>
        <input type="text" name="anio_lanzamiento" required><br>
        <label for="genero">Genero</label>
        <input type="text" name="genero"><br>
        <button type="submit">Agregar</button>
    </form>

    <?php
    //Obtengo clientes actuales
    require_once "videojuegos.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        addVideoJuego($_POST['nombre'], $_POST['plataforma'], $_POST['anio_lanzamiento'], $_POST['genero']);
    }
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
            <td><a href=\"altamodificacion.php?id=3\">Editar</a></td>
            <td><a href=\"eliminar.php?id=3\">Eliminar</a></td>
        </tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>