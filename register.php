<?php
 session_start();
 $usuario= $_SESSION['username'];
  $id= $_SESSION['id'];
  include "../scripts/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro entrenador</title>
<link rel="stylesheet" href="../css/register.css">
<script src="../scripts/validacion_register_register.js"></script>
<link rel="icon" href="../img/pngtree-musical-note-festival-element-commercial-material-music-symbol-notemusic-materialcarnivalmusiccommercial-materialc4d-png-image_618221.png" type="image/png">

</head>

<body>
<div>


<form action="../processes/insert.php" method="POST" onsubmit="return validarFormulario()" class="form_register" >
<h2>Registro de Usuario</h2>
    <div class= "register_nombre">
        <label>Usuario</label>
        <input type="text" name="username" id="username" maxlength="30" required onblur="validaNombre()"> 

    </div>
        <p id="error_usuario"></p><br>
    <br><br>

    <div class="register_password">
        <label>Password</label>
        <input type="password" name="password" id="password" required onblur="validaPassword()">
    </div>
        <p id="error_pasword"></p><br>
    <br><br>

    <div class="register_conf_password">
        <label>Confirmar Password</label>
        <input type="password" name="confirmar_password" id="confirmar_password" required onblur="validaConPass()">
    </div>
        <p id="error_confirmar_pasword"></p><br>
    <br><br>

    <div class="register_email">
        <label>Email</label>
        <input type="text" name="email" id="email" required onblur="validaEmail()">
    </div>
    <p id="error_email"></p><br>
    <br><br>

    <div class="register_DNI">
        <label>DNI</label>
        <input type="text" name="email" id="email" required onblur="validaDNI()">
    </div>
    <p id="error_dni"></p><br>
    <br><br>

    <div class="register_telef">
        <label>Telefono</label>
        <input type="text" name="email" id="email" required onblur="validaTelefono()">
    </div>
        <p id="error_telefono"></p><br>
    <br><br>


<button type="submit">Registrarse</button>
<a href="login.html">
    Volver al inicio
</a>
</form>
</div>
</body>
</html>