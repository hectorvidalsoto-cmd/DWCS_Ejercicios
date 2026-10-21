<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
    <form action="videojuegos_baja.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" required><br>
        <button type="submit">Borrar</button>
    </form>

    <?php
    //Obtengo clientes actuales
    require_once "videojuegos.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        deleteVideoJuego($_POST['id']);
    }    
    ?>

</body>

</html>