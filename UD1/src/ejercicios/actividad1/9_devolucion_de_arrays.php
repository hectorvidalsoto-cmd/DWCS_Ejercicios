<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Mayor, menor y media</h1>

    <form action="" method="POST">
        <label for="n1">Número 1</label>
        <input type="text" name="n1"><br>
        <label for="n2">Número 2</label>
        <input type="text" name="n2"><br>
        <label for="n3">Número 3</label>
        <input type="text" name="n3"><br>
        <label for="n4">Número 4</label>
        <input type="text" name="n4"><br>
        <label for="n5">Número 5</label>
        <input type="text" name="n5"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php

    function calcular($array)
    {
        $mayor = $array[0];
        $menor = $array[0];
        $suma  = 0;

        foreach ($array as $num) {
            if ($num > $mayor) {
                $mayor = $num;
            }
            if ($num < $menor) {
                $menor = $num;
            }
            $suma += $num;
        }

        $media = $suma / count($array);

        return [$mayor, $menor, $media];
    }

    if (
        isset($_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4'], $_POST['n5']) &&
        $_POST['n1'] !== "" && $_POST['n2'] !== "" && $_POST['n3'] !== "" &&
        $_POST['n4'] !== "" && $_POST['n5'] !== ""
    ) {
        $numeros = [
            (float) $_POST['n1'],
            (float) $_POST['n2'],
            (float) $_POST['n3'],
            (float) $_POST['n4'],
            (float) $_POST['n5']
        ];
    
        $resultado = calcular($numeros);
    
        echo "El mayor es: " . $resultado[0] . "<br>";
        echo "El menor es: " . $resultado[1] . "<br>";
        echo "La media es: " . $resultado[2];
    } else {
        echo "Rellena todos los campos.";
    }
    ?>

</body>

</html>