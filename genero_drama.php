<?php
include_once('funciones_bd.php');
$consulta = genero_drama();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Genero Drama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

        <div class="container-fluid">
            <div class="w-75 mx-auto">
                <span class="navbar-text">
                    <h3 class="text-white fw-bold">Bienvenido a Libreria Ruben</h3>
                </span>
            </div>
            <a class="navbar-brand" href="Inicio.php"><strong>Inicio</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Consulta_total_libros.php"><strong>Todos los Libros</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>Generos</strong></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="genero_accion.php">Accion</a></li>
                            <li><a class="dropdown-item" href="genero_ciencia_ficcion.php">Ciencia Ficcion</a></li>
                            <li><a class="dropdown-item" href="genero_comedia.php">Comedia</a></li>
                            <li><a class="dropdown-item" href="genero_drama.php">Drama</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </br>
    </br>

    <div class="container">
        <div class="d-flex justify-content-center gap-3">
            <a href="form_nuevo_libro.html" class="btn btn-dark">Añadir Libro</a>
            <a href="form_eliminar_libro.html" class="btn btn-dark">Eliminar Libro</a>
            <a href="form_modificar_libro.html" class="btn btn-dark">Modificar Libro</a>
        </div></br>

        <!-- creamos la tabla !-->

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Año</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Resumen</th>
                </tr>
            </thead>
            <tbody>

                <?php

                // Mostramos el resultado de la consulta en la tabla

                $cont = 0;

                while ($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
                    $libro[$cont++] = $fila;
                    echo "<tr>";

                    echo "<td>{$fila['id']}</td>";
                    echo "<td>{$fila['isbn']}</td>";
                    echo "<td>{$fila['titulo']}</td>";
                    echo "<td>{$fila['autor']}</td>";
                    echo "<td>{$fila['anio']}</td>";
                    echo "<td>{$fila['genero']}</td>";
                    echo "<td>{$fila['resumen']}</td>";

                    echo "</tr>";
                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>