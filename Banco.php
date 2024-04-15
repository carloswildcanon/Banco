<?php
class Banco{
    private $mostradores;

    public function __construct($coleccionMostradores)
    {
        $this->mostradores=$coleccionMostradores;
    }
    public function getMostradores(){
        return $this->mostradores;
    }
    public function setMostradores($nuevoMostradores){
        $this -> mostradores=$nuevoMostradores;
    }
    public function __toString()
    {
        return "hola";
    }
}

?>