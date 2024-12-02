<?php
class Biblioteca
{
    //Para la clase Biblioteca utilizamos dos array para almacenar los libros y los prestamos, los definimos como privados aplicando encapsulamiento
    private $libros = [];
    private $prestamos = [];

    //Definimos una funcion para agregar los libros el cual recibe el parametro $libro, el cual se asigna al array $libros[]
    public function agregarLibro($libro)
    {
        $this->libros[] = $libro;
    }

    //Definimos la funcion buscaLibro el cual al recibir el criterio de busqueda y el valor proporcionado realizará la busqueda.
    public function buscarLibro($criterio, $valor)
    {
        $resultados = [];   //Se define un array vacío que almacenará los libros que encuentre
        foreach ($this->libros as $libro) {

            if ($libro->{"get" . ucfirst($criterio)}() == $valor) {  /*Se crea el método de busqueda dinamicamente 
                                                                     Convierte la primera letra del criterio a mayúscula.
                                                                    Por ejemplo, si $criterio es "autor", ucfirst($criterio) 
                                                                    será "Autor", y el método construido será "getAutor".
                                                                    Luego hace la comparación == $valor*/
                $resultados[] = $libro;  //Añade el libro al array de resultados.
            }
        }
        return $resultados; //Devuelve el array de libros que coinciden con el criterio de búsqueda.
    }


    //Definimos la funcion para validar los libros prestados utilizando un atributo $titulo
    public function prestarLibro($titulo)
    {
        foreach ($this->libros as $libro) { //Recorremos toda la colección
            if ($libro->getTitulo() == $titulo && $libro->getEstado() == "disponible") {  //Comprobamos si el Título coincide y está disponible
                $libro->setEstado("prestado");   //Cambiamos el estado para que ya no esté disponible
                $prestamo = new Prestamo($libro);   //Crea un nuevo objeto Prestamo pasando el libro como parámetro.
                $this->prestamos[] = $prestamo;     //Añade el objeto Prestamo al array de préstamos ($this->prestamos).
                return $prestamo;                  //Devuelve el objeto Prestamo creado, indicando que la operación de préstamo fue exitosa.
            }
        }
        return null;        //Si ningún libro coincide con el título proporcionado o si todos los libros con ese título no están disponibles, el método devuelve null.
    }



    //Definimos la funcion para conocer cuales libros ya han sido devueltos
    public function devolverLibro($titulo)
    {
        foreach ($this->prestamos as $prestamo) {      //Recorremos toda la coleccion

            //Validamos si el Título del Libro Coincide y No ha sido Devuelto
            if ($prestamo->getLibro()->getTitulo() == $titulo && $prestamo->getFechaDevolucion() == null) {

                //Establece la fecha de devolución del préstamo con la fecha actual
                $prestamo->setFechaDevolucion(date('Y-m-d'));

                //Actualiza el Estado del Libro a "Disponible"
                $prestamo->getLibro()->setEstado("disponible");

                //Devuelve true para indicar que la operación de devolución fue exitosa.
                return true;
            }
        }
        //Si ningún préstamo coincide con el título proporcionado o si el libro ya ha sido devuelto, el método devuelve false.
        return false;
    }
}
