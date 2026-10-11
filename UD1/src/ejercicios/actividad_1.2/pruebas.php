<?php
include "profesor.php";

$profesor = new Profesor("Marta", 40, $dir, "Matemáticas");
echo $profesor->mostrarInformacion() . "<br>";
?>