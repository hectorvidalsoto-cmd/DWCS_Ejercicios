<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
    <form action="videojuegos_login.php" method="post">
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

        echo "<h1>Clientes</h1><ul>";
        foreach($videojuego as $videojuego){
            echo "<li>".$videojuego["nombre"]."- ".$videojuego["plataforma"]."- ".$videojuego["anio_lanzamiento"]."- ".$videojuego["genero"]."</li>";
        }
        echo "</ul>";
    }
    ?>

</body>

</html>