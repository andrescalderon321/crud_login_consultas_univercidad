<?php
include('conexion_db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo "Eliminando la tarea con id ". $id;
    $query = "DELETE FROM matricula WHERE codigoMatricula = '$id'";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        die("Fallo eliminando el alumno");
    }
    header("Location: listar_matricula.php");
}
