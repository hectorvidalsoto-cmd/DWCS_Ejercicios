<?php
include "Persona.php";
class Profesor extends Persona {
    private string $especialidad;

    public function __construct($nombre, $edad, $especialidad) {
        parent::_construct($nombre, $edad);
        $this->especialidad = $especialidad;
    }

    public function getEspecialidad(): string
    { 
        return $this->especialidad; 
    }
    public function setEspecialidad(string $especialidad) { 
        $this->especialidad = $especialidad; 
        }

    public function mostrarInformacion(): string {
        parent::mostrarInformacion();
        echo "Especialidad: " . $this->especialidad . "<br>";
    }
}
?>