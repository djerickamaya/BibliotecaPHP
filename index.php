<?php
//require_once--->  Incluirá cada uno de estos archivos una vez, asegurando que no se incluyan múltiples veces.
require_once 'clases/Libro.php';
require_once 'clases/Autor.php';
require_once 'clases/Categoria.php';
require_once 'clases/Prestamo.php';
require_once 'clases/Biblioteca.php';
require_once 'funciones.php';

// Crear la biblioteca
$biblioteca = new Biblioteca();

// Agregar libros, podemos cambiar los valores para agregar el que deseemos y así poder hacer la prueba de la busqueda
$autor1 = new Autor("Victor Hugo");
$categoria1 = new Categoria("Novela");
$libro1 = new Libro("Los Miserables", $autor1->getNombre(), $categoria1->getNombre());
$biblioteca->agregarLibro($libro1);

// Buscar libros, agregamos los valores que coincidan con los que agregamos
$resultados = buscarLibroPorTitulo($biblioteca, "Los Miserables");
foreach ($resultados as $libro) {
    echo "Libro encontrado: " . $libro->getTitulo() . "<br><br>";
}

// Prestar libro, intentara prestar el libro con los datos dados, si es exitosa la busqueda regresa el nombre del libro
$prestamo = $biblioteca->prestarLibro("Los Miserables");
if ($prestamo) {
    echo "Libro prestado: " . $prestamo->getLibro()->getTitulo() . "<br><br>";
}

// Devolver libro, intenta regresar el libro con los datos dados y si lo logra brinda el "Libro devuelto"
if ($biblioteca->devolverLibro("Los Miserables")) {
    echo "Libro devuelto";
}
