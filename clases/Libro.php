<?php
class Libro
{
    //Creamos los atributos privados de la clase Libro aplicando encapsulamiento
    private $titulo;
    private $autor;
    private $categoria;
    private $estado;

    //Se define el constructor de forma publica para tener acceso por medio de los metodos get y set
    public function __construct($titulo, $autor, $categoria)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->estado = "disponible";
    }

    //Se definen los metodos de acceso get y set
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}
