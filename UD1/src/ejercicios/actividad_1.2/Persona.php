<?php
include "Direccion.php";
class Persona
{

    //Propiedades
    private string $nombre;
    private int $edad;
    private Direccion $direccion;


    public function __construct(string $nombre, int $edad, Direccion $direccion)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getDireccion(): Direccion
    {
        return $this->direccion;
    }

    public function setNombre(string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEdad(int $edad): Persona
    {
        if ($edad > 0) {
            $this->edad = $edad;
        }
        return $this;
    }

    public function setDireccion(Direccion $direccion): Persona
    {
        $this->direccion = $direccion;
        return $this;
    }

    public function mostrarDireccionCompleta(): string
    {
        return $this->direccion->mostrarDireccion();
    }

    public function esMayorDeEdad(int $edad): bool
    {
        if ($edad > 18) {
            return true;
        } else {
            return false;
        }
    }
}
