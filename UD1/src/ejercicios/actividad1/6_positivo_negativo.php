<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Reverso</h1>

    <form action="/ejercicios/actividad1/6_positivo_negativo.php" method="POST">
        <input type="text" name="numero"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if (isset($_POST['numero'])) {
            $num = strval($_POST['numero']);
            if ($num > 0) {
                echo "Es positivo";
            }
        }
    ?>

</html>