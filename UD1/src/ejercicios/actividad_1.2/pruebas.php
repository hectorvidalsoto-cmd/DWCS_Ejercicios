<?php
include "Persona.php";

$dir = new Direccion("Calle Mayor 10", "Madrid", "28013");
echo $dir->mostrarDireccion();
$persona = new Persona("Hector","19",$dir);
echo $persona->mostrarDireccionCompleta();
$Est = new Estudiante($persona->getNombre(), $persona->getEdad(),$dir, "2DAW");
echo $Est -> mostrarInformacion();
?>