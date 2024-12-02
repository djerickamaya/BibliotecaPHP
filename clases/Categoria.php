<?php
class Categoria
{
    /*Para el caso de la clase Categoria solo usamos un atributo el cual encapsulamos para que se acceda 
        unicamente por medio de metodos get y set cumpliendo así el pilar de la Abstracción*/
    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
}
