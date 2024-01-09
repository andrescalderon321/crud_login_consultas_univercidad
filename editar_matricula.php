<?php
include("conexion_db.php");
//CAPTURA LOS VALORES QUE TIENE EL ARREGLO GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM matricula WHERE codigoMatricula=$id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_array($resultado);
        $idAlumno = $fila['idAlumno'];
        $idAsignatura = $fila['idAsignatura'];
        $nota = $fila['nota'];
    }
}
//CAPTURA LOS VALORES QUE TIENE EL ARREGLO POST
if (isset($_POST['bt_actualizar'])) {
    $codigoMatricula = $_GET['codigoMatricula'];
    $idAlumno = $_POST['idAlumno'];
    $idAsignatura = $_POST['idAsignatura'];
    $nota = $_POST['nota'];
    $query = "UPDATE matricula SET idAlumno = '$idAlumno', idAsignatura = '$idAsignatura', nota = '$nota' WHERE codigoMatricula = $id";

    mysqli_query($conn, $query);
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
    <form action="editar_Matricula.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <section class="form-guardar">
            <h4>Editar Matriculas</h4><hr>
            <label for="lidAlumno">ID Alumno:</label>
            <input type="text" class="form-control" id="idAlumno" name="idAlumno" value="<?php echo $idAlumno ?>" required>

            <label for="lidAsignatura">ID Asignatura:</label>
            <input type="text" class="form-control" id="idAsignatura" name="idAsignatura" value="<?php echo $idAsignatura ?>" required>

            <label for="lnota">Nota:</label>
            <input type="text" class="form-control" id="nota" name="nota" value="<?php echo $nota ?>" required>

            <button class="btn btn-success" name="bt_actualizar" type="submit">Actualizar Matricula</button>
            <a class="btn btn-danger" href="listar_matricula.php" role="button">Cancelar</a>

        </section>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>