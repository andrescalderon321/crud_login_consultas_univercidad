<?php
include('conexion_db.php') ?>
<html>

<head>
  <title>Proyecto final</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

  <video muted autoplay loop> 
  <source src="video/Universidad.mp4" type = "video/mp4">  
  </video>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>