<?php
include_once('funciones_bd.php');
$resultado = modificar_libro();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>modificar Libro</title>
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

    <form action="Resultado_Modificar_libro.php" method="POST">
      <?php
      if ($fila = mysqli_fetch_assoc($resultado)) {
        $id = $fila["id"];
        $isbn = $fila['isbn'];
        $titulo = $fila['titulo'];
        $autor = $fila['autor'];
        $anio = $fila['anio'];
        $resumen = $fila['resumen'];
      } else {
        echo "Libro no encontrado.";
        exit;
      }
      ?>
      <div class="mb-3">
        <label for="id" class="form-label">ID:</label>
        <input type="number" class="form-control" name="id" id="id" value="<?php echo htmlspecialchars($id); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="isbn" class="form-label">ISBN:</label>
        <input type="text" class="form-control" name="isbn" id="isbn" value="<?php echo htmlspecialchars($isbn); ?>">
      </div>
      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo:</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo htmlspecialchars($titulo); ?>">
      </div>
      </br>
      <div class="mb-3">
        <label for="autor" class="form-label">Autor:</label>
        <input type="text" class="form-control" name="autor" id="autor" value="<?php echo htmlspecialchars($autor); ?>">
      </div>
      <div class="mb-3">
        <label for="anio" class="form-label">Año:</label>
        <input type="number" class="form-control" name="anio" id="anio" min="1950" max="2030" value="<?php echo htmlspecialchars($anio); ?>">
      </div>
      </br>
      <div class="mb-3">
        <label for="genero">Genero:</label>
        <select name="genero" class="form-select" id="genero" value="<?php echo htmlspecialchars($genero); ?>" required>
          <option value="Acción">Accion</option>
          <option value="Ciencia ficción">Ciencia Ficcion</option>
          <option value="Ciencia ficción">Comedia</option>
          <option value="Drama">Drama</option>
        </select>
      </div>
      </br>
      <div class="mb-3">
        <label for="resumen" class="form-label">Resumen:</label>
        <textarea class="form-control" name="resumen" id="resumen" value="<?php echo htmlspecialchars($resumen); ?>" rows="3"></textarea>
      </div>
      </br>

      <input type="submit" placeholder="Modificar"/>
    </form>
  </div>
</body>

</html>