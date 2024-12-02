<?php

//Llama la funcion BuscarLibros de la Instancia Biblioteca, pasando 'titulo' como criterio y $titulo como valor.
function buscarLibroPorTitulo($biblioteca, $titulo)
{
    //Devuelve los libros que coinciden con el título proporcionado.
    return $biblioteca->buscarLibro('titulo', $titulo);
}
//Llama la funcion BuscarLibros de la Instancia Biblioteca, pasando 'autor' como criterio y $autor como valor.
function buscarLibroPorAutor($biblioteca, $autor)
{
    //Devuelve los libros que coinciden con el autor proporcionado.
    return $biblioteca->buscarLibro('autor', $autor);
}

//Llama la funcion BuscarLibros de la Instancia Biblioteca, pasando 'categoria' como criterio y $categoria como valor.
function buscarLibroPorCategoria($biblioteca, $categoria)
{
    //Devuelve los libros que coinciden con la categoría proporcionada.
    return $biblioteca->buscarLibro('categoria', $categoria);
}
