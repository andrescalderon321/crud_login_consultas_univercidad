<?php
include("conexion_db.php");
//Verifica si llegó a la página presionando el botón guardar
if (isset($_POST['bt_guardar_matricula'])) {
     //Captura los datos enviados por el método POST
     $codigoMatricula = $_POST['codigoMatricula'];
     $idAlumno = $_POST['idAlumno'];
     $idAsignatura = $_POST['idAsignatura'];
     $nota = $_POST['nota'];
     //Realiza la insersión del nuevo dato (nótese el uso de \' para poder colocarlas comillas simples necesarias en la sentencia SQL)
     $query = 'INSERT INTO matricula (codigoMatricula, idAlumno, idAsignatura, nota) VALUES
(\'' . $codigoMatricula . '\',\'' . $idAlumno . '\',\'' . $idAsignatura . '\',\'' . $nota . '\')';
     //Ejecuta la consulta 

     mysqli_query($conn, $query);


     //Con este comando retorna a la página principal y muestra los datos actualizados de la nueva tarea
     header("Location: listar_matricula.php");
}
?>
<html>

<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="style_crear.css">
     <link rel="stylesheet" href="style.css">

</head>

<body>
     <form action="guardar_matricula.php" method="POST">
          <section class="form-guardar">
               <h4>Formulario Matriculas</h4>
               <hr>

               <label for="formGroupExampleInput" class="form-label">Codigo Matricula</label>
               <input type="text" class="form-control" id="codigoMatricula" name="codigoMatricula" placeholder='El codigo se autogenera' disabled>

               <label for="formGroupExampleInput" class="form-label">id Alumno</label>
               <input type="text" class="form-control" id="idAlumno" name="idAlumno" required>           

               <label for="formGroupExampleInput" class="form-label">id Asignatura</label>
               <input type="text" class="form-control" id="idAsignatura" name="idAsignatura" required>

               <label for="formGroupExampleInput" class="form-label">Nota</label>
               <input type="text" class="form-control" id="nota" name="nota" required>


               <button class="btn btn-primary" name="bt_guardar_matricula" type="submit" value="Guardar matricula">Guardar Matricula</button>

               <a class="btn btn-danger" href="listar_matricula.php" role="button">Cancelar</a>


          </section>

     </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>