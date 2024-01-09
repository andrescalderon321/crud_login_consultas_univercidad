<?php
include("conexion_db.php");
//Verifica si llegó a la página presionando el botón guardar
if (isset($_POST['bt_guardar_alumno'])) {
    //Captura los datos enviados por el método POST
    $idAlumno = $_POST['idAlumno'];
    $NIF = $_POST['NIF'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $codigoPostal = $_POST['codigoPostal'];
    $municipio = $_POST['municipio'];
    $provincia = $_POST['provincia'];
    $beca = $_POST['beca'];
    //Realiza la insersión del nuevo dato (nótese el uso de \' para poder colocarlas comillas simples necesarias en la sentencia SQL)
    $query = 'INSERT INTO alumno (idAlumno, NIF, nombre, apellido1, apellido2, email, direccion, codigoPostal, municipio, provincia, beca) VALUES
(\'' . $idAlumno . '\',\'' . $NIF . '\',\'' . $nombre . '\',\'' . $apellido1 . '\',\'' . $apellido2 . '\',\'' . $email . '\',\'' . $direccion . '\',\'' . $codigoPostal . '\',\'' . $municipio . '\',\'' . $provincia . '\',\'' . $beca . '\')';
    //Ejecuta la consulta
    mysqli_query($conn, $query);
    //Con este comando retorna a la página principal y muestra los datos actualizados de la nueva tarea
    header("Location: alumnos.php");
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
    <form action="guardar_alumno.php" method="POST">
        <section class="form-guardar">
        <h4>Formulario Alumnos</h4>
               <hr>

            <label for="lidAlumno">IdAlumno:</label><br>
            <input class="form-control" type="text" id="idAlumno" name="idAlumno">

            <label for="lNIF">NIF:</label>
            <input class="form-control" type="text" id="NIF" name="NIF" required>

            <label for="lnombre">Nombre:</label>
            <input class="form-control" type="text" id="nombre" name="nombre" required>

            <label for="lapellido1">Apellido1:</label>
            <input class="form-control" type="text" id="apellido1" name="apellido1" required>

            <label for="lapellido2">Apellido2:</label>
            <input class="form-control" type="text" id="apellido2" name="apellido2" required>

            <label for="lemail">Email:</label>
            <input class="form-control" type="text" id="email" name="email" required>

            <label for="ldireccion">Direccion:</label>
            <input class="form-control" type="text" id="direccion" name="direccion" required>

            <label for="lcodigoPostal">Codigo Postal:</label>
            <input class="form-control" type="text" id="codigoPostal" name="codigoPostal" required>

            <label for="lmunicipio">Municipio:</label>
            <input class="form-control" type="text" id="municipio" name="municipio" required>

            <label for="lprovincia">Provincia:</label>
            <input class="form-control" type="text" id="provincia" name="provincia" required>

            <label for="lbeca">Beca:</label>
            <input  class="form-control" type="text" id="beca" name="beca" required>

            <button class="btn btn-primary" name="bt_guardar_alumno" type="submit" value="Guardar Alumno">Guardar Alumno</button>
            <a class="btn btn-danger" href="alumnos.php" role="button">Cancelar</a>

        </section>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>