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
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
       <link href="PHP/ionicons.min.css" rel="stylesheet">
    <link href="PHP/Registros.css" rel="stylesheet">

    <title>Registro</title>

    <style type="text/css">
         #let{
        font-size: 20px;
          font-family: Bahnschrift SemiBold;
      }

.font-weight-bold{
    text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 25px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
    } 
    #FLO{
      float: right;
      color:  WHITE;
      font-size: 25px;
    }
#linea2{
  width: 100%;
  background-color: #fdfaf4;
  border-top: 5px solid red;
  border-bottom:5px solid red;
  text-align: center;
  color: red;
}
    </style>
  </head>
  <body background="IMG/fondo2.jpg">
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <center>
       <?php 
  $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
  $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
                <h3 id="linea2" class="font-weight-bold text-dark"><?php echo $fila ['NOMBRE'];?>  <?php echo $fila ['APELLIDO_PATERNO'];?> <?php echo $fila ['APELLIDO_MATERNO'];?></h3>
        </center>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Cambio de Información</h1>
                  
                  <?php } ?>
                    <a href="Zapateria.php?CVE=<?php echo $Clave; ?>" id="FLO" class="font-weight-bold">Ir a Inicio</a><br><br>
                        <a href="USUARIO EJEMPLO.php?CVE=<?php echo $Clave; ?>" id="FLO" class="font-weight-bold">Regresar a Perfil</a>
                    <small id="let" class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2021 ZapateriaF</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>