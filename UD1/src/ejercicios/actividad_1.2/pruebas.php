<?php
include "Persona.php";
include "Direccion.php";
$dir = new Direccion("Calle Mayor 10", "Madrid", "28013");
echo $dir->mostrarDireccion();
?>