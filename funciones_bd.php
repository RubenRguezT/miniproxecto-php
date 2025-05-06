<?php

// Funcion que utilizamos para obtener los 4 primeros libros de la tabla para la página de inicio.

function obter_os_catro_primerios_libros()
{
  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos de los 5 primeros libros de la tabla

    $consulta = mysqli_query($conexion, "select * from libros order by id asc limit 4;");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}


// Funcion que utilizamos para obtener la tabla con todos los libros.

function total_libros()
{

  // conectamos con la base de datos,

  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos 
    $consulta = mysqli_query($conexion, "select * from libros");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}


// Funcion que utilizamos para obtener la tabla con todos los libros del genero accion.


function genero_accion()
{
  // conectamos con la base de datos,

  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos de los libros con el genero accion
    $consulta = mysqli_query($conexion, "select * from libros where genero = 'accion'");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }
  return $consulta;
}



// Funcion que utilizamos para obtener la tabla con todos los libros del genero ciencia ficcion.

function genero_ciencia_ficcion()
{

  // conectamos con la base de datos,

  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos de los libros con el genero Ciencia Ficcion
    $consulta = mysqli_query($conexion, "select * from libros where genero = 'Ciencia Ficcion'");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}



// Funcion que utilizamos para obtener la tabla con todos los libros del genero Comedia.

function genero_comedia()
{

  // conectamos con la base de datos,

  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos de los libros con el genero comedia
    $consulta = mysqli_query($conexion, "select * from libros where genero = 'comedia'");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }
  return $consulta;
}



// Funcion que utilizamos para obtener la tabla con todos los libros del genero drama.


function genero_drama()
{
  // conectamos con la base de datos,

  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // Realizamos la consulta a la base de datos de los libros con el genero drama
    $consulta = mysqli_query($conexion, "select * from libros where genero = 'drama'");


    // configuramos el mensaje de error

  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}


// Funcion que utilizamos para añadir un libro.

function insertar_libro()
{
  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // obtenemos los datos

    $isbn = $_POST["isbn"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST['anio'];
    $genero = $_POST["genero"];
    $resumen = $_POST["resumen"];

    // Realizamos la insercion en nuestra tabla

    $insert = "INSERT INTO libros (isbn, titulo, autor, anio, genero, resumen) VALUES ('$isbn', '$titulo', '$autor', $anio, '$genero', '$resumen')";

    // Ejecutamos la insercion
    mysqli_query($conexion, $insert);

    // Realizamos la consulta a la base de datos del libro añadido la tabla
    $consulta = mysqli_query($conexion, "select * from libros where isbn = $isbn");

    // configuramos el mensaje de error
  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}


// Funcion que utilizamos para eliminar un libro.

function eliminar_libro()
{
  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // obtenemos los datos

    $isbn = $_POST["isbn"];

    // Realizamos la eliminacion del libro de nuestra tabla

    $eliminar = "DELETE FROM libros WHERE isbn = $isbn";

    mysqli_query($conexion, $eliminar);

    $consulta = mysqli_query($conexion, "SELECT * FROM libros");

    // configuramos el mensaje de error
  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}


// Funciona para obtener el formulario del libro y poder modificarlo

function modificar_libro()
{
  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // obtenemos los datos para poder modificarlos

    $isbn = $_POST["isbn"];


    $consulta = "SELECT * FROM libros WHERE isbn = $isbn";


    // Seleccionamos los datos 

    $resultado = mysqli_query($conexion, $consulta);

    // configuramos el mensaje de error
  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $resultado;
}


// Funciona para mostrar el resultado del libro modificado.

function resultado_modificacion()
{
  $host =  "localhost";
  $user =  "librouser";
  $pwd = "passworduser";
  $database = "Ruben_Rguez_BD";

  try {
    // conectamos a base de datos
    $conexion = mysqli_connect($host, $user, $pwd);

    mysqli_select_db($conexion, $database);

    // obtenemos los datos para poder modificarlos

    $id = $_POST["id"];
    $isbn = $_POST["isbn"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio"];
    $genero = $_POST["genero"];
    $resumen = $_POST["resumen"];

    // realizamos la modificacion de los datos

    $modificar = "UPDATE libros SET id='$id', isbn='$isbn', titulo='$titulo',autor='$autor', anio='$anio', genero='$genero',resumen='$resumen' WHERE id=$id";

    mysqli_query($conexion, $modificar);

    // configuramos la consulta

    $consulta = mysqli_query($conexion,"SELECT * FROM libros WHERE id = $id");


    // configuramos el mensaje de error
  } catch (Exception $e) {
    echo 'Acaba de ocorrer un erro :' . $e->getMessage();
  }

  return $consulta;
}
