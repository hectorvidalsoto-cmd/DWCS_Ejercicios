<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculadora de IVA</h1>
    <?php

    /**
     * Calcula el IVA de un precio base y un tipo imponible
     * @param $producto Precio base
     * @param $iva Tipo de iva (como porcentaje)
     */
    function descuento(float $producto, int $iva = 21)
    {
        echo "El iva son ", $producto * $iva / 100, " euros";
    }

    descuento(16.99);
    ?>
</html>