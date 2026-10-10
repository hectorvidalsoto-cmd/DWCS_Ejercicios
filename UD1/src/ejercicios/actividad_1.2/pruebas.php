<?php
include "Estudiante.php";

$dir = new Direccion("Calle Mayor 10", "Madrid", "28013");
echo $dir->mostrarDireccion() . "<br><br>";

$persona = new Persona("Hector", 19, $dir);
echo $persona->mostrarDireccionCompleta() . "<br><br>";

$Est = new Estudiante($persona->getNombre(), $persona->getEdad(), $dir, 4);
$Est->mostrarInformacion();   // <-- sin "echo", porque ya hace echo dentro
echo "<br>";

$calificaciones = [8, 9, 7, 10, 6];
$promedio = Estudiante::calcularPromedio($calificaciones);
echo "El promedio es: " . number_format($promedio, 2) . "<br>";