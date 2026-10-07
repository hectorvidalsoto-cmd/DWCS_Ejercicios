<?php
include "Persona.php";
class Estudiante extends Persona{

    private int $grado;

    public function __construct(string $nombre, int $edad, Direccion $direccion,int $grado)
    {
        parent::__construct($nombre,$edad,$direccion);
        $this->grado = $grado;
    }
    

    public function getGrado() : int {
        return $this->grado;
    }

    public function setGrado(int $grado) {
        $this->grado = $grado;
        return $this;
    }

    public function mostrarInformacion(): string {
        return "$nombre, $edad, $grado";
    }

}
?>