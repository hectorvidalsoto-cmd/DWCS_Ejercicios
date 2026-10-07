<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Anagramas</h1>

    <form action="/ejercicios/actividad1/7_anagramas.php" method="POST">
        <label for="palabra1">Primera palabra</label>
        <input type="text" name="palabra1"><br>
        <label for="palabra2">Segunda palabra</label>
        <input type="text" name="palabra2"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    

    if (isset($_POST['palabra1']) && isset($_POST['palabra2'])) {
        $palabra1 = $_POST['palabra1'];
        $palabra2 = $_POST['palabra2'];

        $palabra1 = strtolower(str_replace(' ', '', $palabra1));
        $palabra2 = strtolower(str_replace(' ', '', $palabra2));

        $array1 = str_split($palabra1);
        $array2 = str_split($palabra2);

        sort($array1);
        sort($array2);

        /**
         * ==  compara que los arrays tengan los mismos elementos
         * === compara que los arrays tengan los mismos elementos y en el mismo orden
         */
        if ($array1 === $array2) {
            echo "Son anagramas";
        } else {
            echo "No son anagramas";
        }
    }

    ?>

</html>