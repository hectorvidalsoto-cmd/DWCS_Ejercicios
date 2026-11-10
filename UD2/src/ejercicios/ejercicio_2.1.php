<?php
//Leer cookie

if (isset($_COOKIE['contador'])) {
    $cont = intval($_COOKIE['contador']);
    if (isset($_POST['nombre'])) {
    echo $_POST['nombre'];
    }
} else {
    $cont = 0;
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejercicio_2.1</title>
    </head>

    <body>
        <form action="ejercicio_2.1.php" method="post">
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" name="nombre">
            <button type="submit">Enviar</button>
        </form>

    </body>

    </html>
<?php
}
$cont++;

//Escribir cookie
//OJO!
setcookie(
    name: "contador",
    value: $cont,
    expires_or_options: time() + 300,
    path: "/ejercicios",
    domain: "",
    secure: true,
    httponly: true
);

?>