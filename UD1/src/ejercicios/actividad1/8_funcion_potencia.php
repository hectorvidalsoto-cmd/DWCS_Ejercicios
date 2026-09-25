<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Potencia</h1>

    <form action="" method="POST">
        <label for="base">Base</label>
        <input type="text" name="base"><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        function potencia($base, $exponente) {
            $resultado = 1;
            for ($i = 0; $i < $exponente; $i++) {
                $resultado = $resultado * $base;
            }
            return $resultado;
        }

        if (isset($_POST['base']) && isset($_POST['exponente'])) {
        $base = $_POST['base'];
        $exponente = $_POST['exponente'];
        echo "La respuesta es " . potencia($base, $exponente);
        }
    ?>

</body>
</html>