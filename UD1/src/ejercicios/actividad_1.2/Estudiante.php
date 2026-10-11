<?php

class Estudiante extends Persona
{
    // Propiedades
    private string $grado;
    private array $calificaciones = [];

    public function __construct(string $nombre, int $edad, Direccion $direccion, string $grado)
    {
        parent::__construct($nombre, $edad, $direccion);
        $this->grado = $grado;
    }

    public function getGrado(): string
    {
        return $this->grado;
    }

    public function getCalificaciones(): array
    {
        return $this->calificaciones;
    }

    public function setGrado(string $grado): Estudiante
    {
        $this->grado = $grado;
        return $this;
    }

    public function agregarCalificacion(float $calificacion): Estudiante
    {
        $this->calificaciones[] = $calificacion;
        return $this;
    }

    public static function calcularPromedio(array $calificaciones): float
    {
        if (count($calificaciones) === 0) {
            return 0.0;
        }
        return array_sum($calificaciones) / count($calificaciones);
    }

    public function promedioCalificaciones(): float
    {
        return self::calcularPromedio($this->calificaciones);
    }

    public function getIdentificador(): string
    {
        return "Estudiante: " . $this->nombre;
    }

    public function mostrarInformacion(): string
    {
        return parent::mostrarInformacion()
            . " | Grado: " . $this->grado
            . " | Dirección: " . $this->direccion->mostrarDireccion();
    }
}
?>