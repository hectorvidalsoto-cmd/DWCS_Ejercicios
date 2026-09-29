<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Simon dice</h1>

    <form action="" method="POST">
        <label for="numero">Tu respuesta</label>
        <input type="text" name="numero"><br>

    </form>
    <?php
    $numero = rand(1, 4);
    echo $numero;

    if($_POST["numero"] && $_POST["numero"] !== "") {
        echo "Correcto";
    } else {
        echo "Respuesta incoreecta, perdiste";
    }
    ?>

</body>

</html>