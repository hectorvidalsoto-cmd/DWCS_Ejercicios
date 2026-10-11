<?php

class Curso
{
    // Propiedades
    private string $nombre;
    private array $estudiantes = [];

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEstudiantes(): array
    {
        return $this->estudiantes;
    }

    public function setNombre(string $nombre): Curso
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function agregarEstudiante(Estudiante $estudiante): Curso
    {
        $this->estudiantes[] = $estudiante;
        return $this;
    }

    public function mostrarEstudiantes(): void
    {
        echo "<h3>Curso: " . $this->nombre . "</h3>";
        foreach ($this->estudiantes as $estudiante) {
            echo $estudiante->mostrarInformacion() . "<br>";
        }
    }
}