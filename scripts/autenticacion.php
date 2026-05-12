<?php
include '../scripts/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['email'])){
        session_start();
        $usuario = $_POST['username'];
        $pass = $_POST['password']; // la contra que escribio el user
        $email = $_POST['email'];

        //buscamos al usuario por su nombre (no por la contra)
        $query = "SELECT nombre, contraseña, email, id_usuario FROM usuario WHERE nombre = '$usuario'";
        $resultado = mysqli_query($conn,$query);

        if (mysqli_num_rows($resultado) > 0){
            $fila =mysqli_fetch_assoc($resultado);
            $hash_db = $fila['contraseña']; /// hash guardado en la db

            //Verificamos si la contraseña coincide con el hash
            if(password_verify($pass, $hash_db,)) {

                //Creamos la session
                $_SESSION['username'] = $fila['username'];
                $_SESSION['id_usuario'] = $fila['id_usuario'];

                header("Location: ../processes/bienvenida.php");
                exit();

            }else{//error contraseña incorrecta
    
                echo"<script> alert('contraseña incorrecta'); window.location='../view/login.html';</script>";
            }
        }else{// error usuario no existe
            echo "<script> alert('El usuario no existe'); window.location='../view/login.html';</script>";
            }
        }
    }
?>