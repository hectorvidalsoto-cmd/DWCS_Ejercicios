<?php

class Profesor extends Persona
{
    // Propiedades
    private string $especialidad;

    public function __construct(string $nombre, int $edad, Direccion $direccion, string $especialidad)
    {
        parent::__construct($nombre, $edad, $direccion);
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad(): string
    {
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad): Profesor
    {
        $this->especialidad = $especialidad;
        return $this;
    }

    public function getIdentificador(): string
    {
        return "Profesor: " . $this->nombre;
    }

    public function mostrarInformacion(): string
    {
        return parent::mostrarInformacion()
            . " | Especialidad: " . $this->especialidad
            . " | Dirección: " . $this->direccion->mostrarDireccion();
    }
}
?>