<?php
class Prestamo
{
    //Para la clase Prestamo usamos 3 atributos encapsulados
    private $libro;
    private $fechaPrestamo;
    private $fechaDevolucion;

    //Creamos el constructor publico
    public function __construct($libro)
    {
        $this->libro = $libro;
        $this->fechaPrestamo = date('Y-m-d');
        $this->fechaDevolucion = null;
    }

    //Se definen los metodos get y set para cumplir con la Abstracción
    public function getLibro()
    {
        return $this->libro;
    }

    public function getFechaPrestamo()
    {
        return $this->fechaPrestamo;
    }

    public function setFechaDevolucion($fecha)
    {
        $this->fechaDevolucion = $fecha;
    }

    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }
}
