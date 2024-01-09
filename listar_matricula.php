<?php
include('conexion_db.php') ?>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="form-index">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Salir</a>
        <a class="navbar-brand" href="segunda_pagina.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="listar_matricula.php">Matriculas</a>
            <a class="nav-link active" aria-current="page" href="alumnos.php">Alumnos</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="consulta1.php">Consulta 1</a></li>
                <li><a class="dropdown-item" href="consulta2.php">Consulta 2</a></li>
                <li><a class="dropdown-item" href="consulta3.php">Consulta 3</a></li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <br>
  <a class="btn btn-success" href="guardar_matricula.php" role="button">Crear Matricula</a>
  <br><br>
  <div class=" table-responsive">

 

  <table  class="table table-striped  table-sm table-hover ">    
      <thead  class="table-light">
        <tr>
          <th>Codigo Matricula</th>
          <th scope="col">ID Alumno</th>
          <th scope="col">Nombre Alumno</th>
          <th scope="col">ID Asignatura</th>
          <th scope="col">Nombre Asigatura</th>
          <th scope="col">Nota</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT matricula.codigoMatricula, matricula.idAlumno, alumno.nombre ,matricula.idAsignatura, asignatura.nombreAs, matricula.nota
        FROM matricula
        JOIN alumno ON matricula.idAlumno = alumno.idAlumno
        JOIN asignatura ON matricula.idAsignatura = asignatura.idAsignatura";
        $resultado = mysqli_query($conn, $query);
        while ($fila = mysqli_fetch_array($resultado)) { ?>
          <tr>
            <td><?php echo $fila['codigoMatricula'] ?></td>
            <td><?php echo $fila['idAlumno'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['idAsignatura'] ?></td>
            <td><?php echo $fila['nombreAs'] ?></td>
            <td><?php echo $fila['nota'] ?></td>
            <td>
              <a class="text-success" href="editar_matricula.php?id=<?php echo $fila['codigoMatricula'] ?>"><i class="bi bi-pencil-square"></i></a>
              <a class="text-danger" href="eliminar_matricula.php?id=<?php echo $fila['codigoMatricula'] ?>"><i class="bi bi-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>    
  </table>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>