<?php
require "videojuegos.php";
//Cuando entro a la página para modificar (desde el enlace):
//1- Con el ID que me llega, tengo que buscar el videojuego en la BD.
//2- Poner los datos en los inputs.
//Cuando entro desde el botón Editar:
//Envio los datos a editVideojuego
// $maximoId = buscarMaximoId();
$id = $_GET['id']??null;
$id = $id??$_POST['id'];
if(isset($id)){
    $toret = buscarVideojuego(intval($id));

}
if (!$toret) {
    echo "Error, no existe un videojuego con ese id";
    die();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    editVideojuego($_POST['id'], $_POST['nombre'], $_POST['plataforma'], $_POST['anio_lanzamiento'], $_POST['genero']);
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
    <form action="videojuegos_modificacion.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $toret['nombre']; ?>" required><br>
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma" value="<?php echo $toret['plataforma']; ?>" required><br>
        <label for="anio_lanzamiento">Año de lanzamiento</label>
        <input type="text" name="anio_lanzamiento" value="<?php echo $toret['anio_lanzamiento']; ?>" required><br>
        <label for="genero">Genero</label>
        <input type="text" name="genero" value="<?php echo $toret['genero']; ?>"><br>
        <input type="text" name="id" value="<?php echo $id; ?>">
        <button type="submit">Editar</button>
    </form>

</body>

</html>