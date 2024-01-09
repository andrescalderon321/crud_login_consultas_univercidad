<?php
include("conexion_db.php");
//Verifica si llegó a la página presionando el botón guardar
if (isset($_POST['bt_guardar_profesor'])) {
    //Captura los datos enviados por el método POST
    $idProfesor = $_POST['idProfesor'];
    $NIF = $_POST['NIF'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $codigoPostal = $_POST['codigoPostal'];
    $municipio = $_POST['municipio'];
    $provincia = $_POST['provincia'];
    $categoria = $_POST['categoria'];
    //Realiza la insersión del nuevo dato (nótese el uso de \' para poder colocarlas comillas simples necesarias en la sentencia SQL)
    $query = 'INSERT INTO profesor (idprofesor, NIF, nombre, apellido1, apellido2, email, direccion, codigoPostal, municipio, provincia, categoria) VALUES
(\'' . $idProfesor . '\',\'' . $NIF . '\',\'' . $nombre . '\',\'' . $apellido1 . '\',\'' . $apellido2 . '\',\'' . $email . '\',\'' . $direccion . '\',\'' . $codigoPostal . '\',\'' . $municipio . '\',\'' . $provincia . '\',\'' . $categoria . '\')';
    //Ejecuta la consulta
    mysqli_query($conn, $query);
    //Con este comando retorna a la página principal y muestra los datos actualizados de la nueva tarea
    header("Location: index.php");
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
    <form action="guardar_profesor.php" method="POST">
        <section class="form-guardar">
            <h4>Formulario Profesor</h4>
            <hr>

            <label for="lidProfesor">IdProfesor:</label><br>
            <input class="form-control" type="text" id="idProfesor" name="idProfesor">

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

            <label for="lcategoria">categoria:</label>
            <input class="form-control" type="text" id="categoria" name="categoria" required>

            <button class="btn btn-primary" name="bt_guardar_profesor" type="submit" value="Guardar profesor">Guardar profesor</button>

            <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>

        </section>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>