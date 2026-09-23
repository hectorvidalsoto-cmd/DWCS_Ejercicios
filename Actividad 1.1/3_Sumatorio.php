<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sumatorio</h1>
    <?php
    function sumatorio (int $a, int $b, int $c, int $d, int $e) {
    echo "La suma da ", $a + $b + $c + $d + $e; 
    }

    sumatorio(1,2,3,4,5);
    ?>
</html>