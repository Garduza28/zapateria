<?php 
  include(".PHP/conexion.php");
  if (isset($_SESSION['carrito'])) {
    //SI existe se busca si ya estaba agregado
  }else{
      if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
  }
     ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="stylos_LOGIN.css">
    <style type="text/css">
           #let{
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class="login-box">
      <img src="IMG/Candado.png" class="avatar" alt="Avatar Image">
      <h1 class="NoH1">Recuperar Contraseña</h1>
      <form>
        <!-- USERNAME INPUT -->
        <br>
        <label for="username">Numero de Membresía</label>
        <input type="text" placeholder="Ingresa Membresía">
        <label for="username">Correo Electronico</label>
        <input type="text" placeholder="Ingresa Membresía">
        <!-- PASSWORD INPUT -->
        <button class="btn btn-outline-danger"><a href="#">Mandar Correo</a></button>
        <br>
        <br>
        <a id="let" href="Login_ZA.php">Regresar a Ingresar</a><br>
        <a id="let" href="PARTE INDEX.php">Ir a Inicio</a>
      </form>
    </div>
  </body>
</html>