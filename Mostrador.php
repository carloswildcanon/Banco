<?php
class Mostrador{
    private $tramite;
    private $coleccionClientes;
    private $numeroClientes;
    private $numeroMaximoCliente;
    public function __construct($tramite,$arrayClientes,$numClientes,$numMaxClienteXMostrador)
    {
        $this->tramite=$tramite;
        $this->coleccionClientes=$arrayClientes;
        $this->numeroClientes=$numClientes;
        $this->numeroMaximoCliente=$numMaxClienteXMostrador;
    }
    public function getTramite(){
        return $this->tramite;
    }
    public function getColeccionClientes(){
        return $this->coleccionClientes;
    }
    public function getNumeroClientes(){
        return $this->numeroClientes;
    }
}

?>