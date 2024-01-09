<?php
// el valor "btn_ingresar" proviene de index.php en el input name ="btn_ingresar"
//el password y el usuario vienen tambien del name 



if(!empty($_POST["btn_ingresar"])){

    if(empty($_POST["usuario"]) and empty($_POST["password"])){

        echo ' <div class="container mt-5 text-center">
        <div class="alert alert-danger" role="alert">
            los campos estan vacios
        </div>
    </div>';

    }else{

        // se crean las variables $usuario y $clave para guardar los names de usuario y password
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        
        //se crea la variable $sql y ella se le asigna la varible $conexion , la cula viene de la carpeta conexion.php
        //el metodo query nos conecta con las consultas de nuestra base de datos
        // 
        $sql=$conn->query("select * from profesor where nombre='$usuario' and NIF='$clave' ");

        //fetch_object() se utiliza en el contexto de POO y esta asociada con el manejo de resultados de consultas, en este
        //caso if($datos=$sql->fetch_object() se esta guaradando en la variable $datos
        if($datos=$sql->fetch_object()){

            header("location:segunda_pagina.php");
   
        }else{

        //     echo"acceso denegado";
        //    echo "<button type  class="btn btn-danger">acceso denegado</div>"

       echo ' <div class="container mt-5 text-center">
            <div class="alert alert-danger" role="alert">
                acceso denegado 
            </div>
        </div>';



        }

    }
}

?>