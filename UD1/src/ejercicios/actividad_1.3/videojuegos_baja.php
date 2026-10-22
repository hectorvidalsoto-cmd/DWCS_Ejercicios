<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar videojuego</title>
</head>

<body>
    <?php
    //Obtengo clientes actuales
    require_once "videojuegos.php";
    $id = (int) $_GET['id'];
    deleteVideoJuego($id);
    ?>

</body>

</html>