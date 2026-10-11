<?php
include "Direccion.php";
include "Persona.php";
include "Estudiante.php";
include "Profesor.php";
include "Curso.php";

// ---- Ejercicio 3: Dirección y Persona ----
echo "<h2>Ejercicio 3: Composición</h2>";
$dir = new Direccion("Calle Mayor 10", "Madrid", "28013");
echo $dir->mostrarDireccion() . "<br>";

$persona = new Persona("Hector", 19, $dir);
echo $persona->mostrarDireccionCompleta() . "<br>";

// ---- Ejercicio 4: Estudiante ----
echo "<h2>Ejercicio 4: Herencia Estudiante</h2>";
$est = new Estudiante("Hector", 19, $dir, "2DAW");
echo $est->mostrarInformacion() . "<br>";

// ---- Ejercicio 5: Método estático ----
echo "<h2>Ejercicio 5: Método estático</h2>";
$calificaciones = [8, 9, 7, 10, 6];
$promedio = Estudiante::calcularPromedio($calificaciones);
echo "El promedio es: " . number_format($promedio, 2) . "<br>";

// ---- Ejercicio 6: Polimorfismo ----
echo "<h2>Ejercicio 6: Polimorfismo</h2>";
$profesor = new Profesor("Marta", 40, $dir, "Matemáticas");
echo $profesor->mostrarInformacion() . "<br>";

// ---- Ejercicio 7: Array de calificaciones ----
echo "<h2>Ejercicio 7: Calificaciones</h2>";
$est2 = new Estudiante("Sofía", 16, $dir, "10°");
$est2->agregarCalificacion(8.5)
     ->agregarCalificacion(9.0)
     ->agregarCalificacion(7.5)
     ->agregarCalificacion(10.0);

echo "Calificaciones: " . implode(", ", $est2->getCalificaciones()) . "<br>";
echo "Promedio: " . number_format($est2->promedioCalificaciones(), 2) . "<br>";

// ---- Ejercicio 8: Curso ----
echo "<h2>Ejercicio 8: Curso</h2>";
$curso = new Curso("Programación PHP");
$curso->agregarEstudiante(new Estudiante("Ana", 20, $dir, "10°"))
      ->agregarEstudiante(new Estudiante("Luis", 22, $dir, "11°"))
      ->agregarEstudiante(new Estudiante("María", 19, $dir, "10°"));

$curso->mostrarEstudiantes();
?>