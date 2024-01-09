<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .bg {
            background-image: url(img/escudo\ 1.jpg);
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-lg-stretch ">
            <div class="col bg  d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">


            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">

                    <img src="img/education-logo-open-book-dictionary-textbook-or-notebook-with-graduation-hat-icon-modern-emblem-idea-concept-design-for-business-libraries-schools-universities-educational-courses-free-vector.jpg" width="48" alt="">

                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!-- login -->


                <form method="post" action="">

                    <?php

                    include("conexion_db.php");
                    include("validar.php");

                    ?>

                    <div class="mb-4">
                        <label for="User Name" class="form-label">Nombre de usuario</label>
                        <input id="usuario" class="form-control" type="text" placeholder="Ingrese Usuario" name="usuario">
                    </div>
                    <div class="mb-4">
                        <label for="Password">Contraseña</label>
                        <input id="input" class="form-control" type="password" placeholder="Ingrese Contraseña" name="password">

                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="btn_ingresar" value="iniciar secion ">iniciar sesion </button>
                    </div>

                    <div class="my-3">

                        <span>No tienes cuenta ? <a href="guardar_profesor.php">Registrate</a></span> <br>
                        <span><a href="#">Recuperar Password</a></span>

                    </div>

                    <!-- login con redes sociales  -->

                    <div class="container w-100 my-5">
                        <div class="row  text-center">
                            <div class="col-12">Iniciar sesion</div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">

                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="img/Untitled.png" width="32" alt="">

                                        </div>
                                        <div class="col-10 text-center">
                                            Facebook
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-danger w-100 my-1">

                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="img/google.png" width="32" alt="">

                                        </div>
                                        <div class="col-10 text-center">
                                            Google
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </div>


                </form>


            </div>
        </div>
    </div>





</body>

</html>