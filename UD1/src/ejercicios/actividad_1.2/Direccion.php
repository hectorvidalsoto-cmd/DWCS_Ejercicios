<?php
class Direccion {

    private string $calle;
    private string $ciudad;
    private int $codigoPostal;

    public function __construct(string $calle, string $ciudad, int $codigoPostal)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }
    
    public function getCalle() : string {
        return $this->calle;
    }

    public function getCiudad() : string {
        return $this->ciudad;
    }

    public function getCodigoPostal() : int {
        return $this->codigoPostal;
    }

    public function setCalle(String $calle) {
        $this->calle = $calle;
        return $this;
    }

    public function setCiudad(String $ciudad) {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function setCodigoPostal(int $codigoPostal) {
        $this->codigoPostal = $codigoPostal;
        return $this;
    }

    public function mostrarDireccion(): string
    {
        return "$this->calle, $this->ciudad, $this->codigoPostal";
    }
}
?>