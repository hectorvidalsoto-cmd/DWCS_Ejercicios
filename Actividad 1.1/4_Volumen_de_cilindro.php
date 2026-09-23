<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Volumen de cilindro</h1>
    <?php
    define("PI", 3.1415);
    function volumen (float $radio, float $altura) {
        $volumen = PI * $radio * $radio * $altura;
        echo "el volumen es igual a $volumen";
    }

    volumen(6,4);
    ?>
</html>