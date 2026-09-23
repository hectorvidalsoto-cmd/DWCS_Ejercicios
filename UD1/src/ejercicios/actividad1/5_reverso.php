<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Reverso</h1>
    <?php

    function revertir (String $numero) {
        $reverso = strrev($numero);
        echo $reverso;
    }

    revertir ("525623");
    ?>
</html>