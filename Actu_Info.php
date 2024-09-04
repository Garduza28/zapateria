<?php 
  include(".PHP/conexion.php");
  if (isset($_SESSION['carrito'])) {
    //SI existe se busca si ya estaba agregado
  }else{
     if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
      include("PHP/conexion.php");
      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $DOM=$fila ['CVE_DOMICILIO'];
      }
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
    <link href="PHP/ionicons.min.css" rel="stylesheet">
    <link href="ST_RE.css" rel="stylesheet">
    <style media="screen">
    * {
      margin: 0;
      box-sizing: border-box;
    }
    #FLO{
      float: right;
      color:  WHITE;
      font-size: 35px;
      background: RED;
    }
      #FLO2{
      color: white;
      font-size: 25px;
       background-color: red;
    }
    body {
      font-family: Arial;
      padding: 90px 20px 0;
    }

.register-bg {
    background-image: url("IMG/FONDOLO.jpg");
    background-size: 2700px;
    background-repeat: no-repeat;
    min-height: 150vh;
}
    .header {
      background-color: red;
      height: 50px;
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
    }

    .nav {
      display: flex;
      justify-content: space-between;

      max-width: 992px;
      margin: 0 auto;
    }

    .nav-link {
      color: white;
      text-decoration: none;
    }

    .logo {
      font-size: 30px;
      font-weight: bold;
      padding: 0 40px;
      line-height: 80px;
    }

    .nav-menu {
      display: flex;
      margin-right: 40px;
      list-style: none;
    }

    .nav-menu-item {
      font-size: 18px;
      margin: 0 10px;
      line-height: 80px;
      text-transform: uppercase;
      width: max-content;
    }

    .nav-menu-link {
      padding: 8px 12px;
      border-radius: 3px;
    }

    .nav-menu-link:hover,
    .nav-menu-link_active {
      background-color: #034574;
      transition: 0.5s;
    }

    /* TOGGLE */
    .nav-toggle {
      color: white;
      background: none;
      border: none;
      font-size: 30px;
      padding: 0 20px;
      line-height: 60px;
      cursor: pointer;

      display: none;
    }

    /* MOBILE */
    @media (max-width: 768px) {
      body {
        padding-top: 70px;
      }

      .header {
        height: 60px;
      }

      .logo {
        font-size: 25px;
        padding: 0 20px;
        line-height: 60px;
      }

      .nav-menu {
        flex-direction: column;
        align-items: center;
        margin: 0;
        background-color: #2c3e50;
        position: fixed;
        top: 60px;
        width: 100%;
        padding: 20px 0;

        height: calc(100% - 60px);
        overflow-y: auto;

        left: 100%;
        transition: left 0.3s;
      }

      .nav-menu-item {
        line-height: 70px;
      }

      .nav-menu-link:hover,
      .nav-menu-link_active {
        background: none;
        color: #83c5f7;
      }

      .nav-toggle {
        display: block;
      }

      .nav-menu_visible {
        left: 0;
      }

      .nav-toggle:focus:not(:focus-visible) {
        outline: none;
      }
    }
    .form-control2 {
    background-color:  #1f232b;
    color: white;
    border: 2px solid var(--color-light-xx);
    border-radius: .2rem;
    padding-top: 25px;
    padding left: 435px;
    padding-right: 435px;
    padding-bottom: 25px;
    padding:1rem;

}
  .form-control3 {
    background-color:  white;
    color:  #1f232b;
    border: 2px solid var(--color-light-xx);
    border-radius: .2rem;
    padding-top: 15px;
    padding left: 135px;
    padding-right: 135px;
    padding-bottom: 15px;
}

    </style>
    <title>Pre-Registro</title>
  </head>
  <body background="IMG/fondo2.jpg">
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
               <?php 
  $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
  $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>               <center>
               <h3 id="FLO" id="linea2" class="font-weight-bold text-light"><?php echo $fila ['NOMBRE'];?>  <?php echo $fila ['APELLIDO_PATERNO'];?> <?php echo $fila ['APELLIDO_MATERNO'];?></h3></center>
              <?php } ?>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Actualización de Información.</h1>
                    <p>Introduzca los datos que desee cambiar:</p>
                    <br>
                    <form action="Actualizar_Usuario.php" method="POST">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                            <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>     
                                <label class="font-weight-bold">Nombre(s): <span class="text-danger">*</span></label>
                                <input name="NOMBRE" type="text" class="form-control" value="<?php echo $fila ['NOMBRE'];?>" placeholder="<?php echo $fila ['NOMBRE'];?>">
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                               <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                                <label class="font-weight-bold">Apellido Paterno:<span class="text-danger">*</span></label>
                                <input name="APELLIDO_PATERNO" type="text" class="form-control" value="<?php echo $fila ['APELLIDO_PATERNO'];?>" placeholder="<?php echo $fila ['APELLIDO_PATERNO'];?>">
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                                <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                                <label class="font-weight-bold">Apellido Materno:<span class="text-danger">*</span></label>
                                <input name="APELLIDO_MATERNO" type="text" class="form-control" value="<?php echo $fila ['APELLIDO_MATERNO'];?>" placeholder="<?php echo $fila ['APELLIDO_MATERNO'];?>">
                                <?php } ?>
                            </div>
                            <div class="form-group col-md-6">
                                <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                                <label class="font-weight-bold">Número telefónico: <span class="text-danger">*</span></label>
                              <input name="NUM_TELEFONO" type="varchar" class="form-control" value="<?php echo $fila ['NUM_TELEFONO'];?>" placeholder="<?php echo $fila ['NUM_TELEFONO'];?>">
                              <?php } ?>
                            </div>
                          <div class="form-group col-md-12">
                              <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                            <label class="font-weight-bold">Correo electrónico: <span class="text-danger">*</span></label>
                            <input name="CORREO_ELECT" type="email" class="form-control" value="<?php echo $fila ['CORREO_ELECT'];?>" placeholder="<?php echo $fila ['CORREO_ELECT'];?>">
                            <?php } ?>
                        </div>
                        </div>
                        <div class="form-group mb-12">
                           <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                                <label class="font-weight-bold">Municipio: <span class="text-danger">*</span></label>
        <select class="form-control2" id="Municipio" class="Municipio" name="NOMBRE_MUNICIPIO">
                        <option>Balancán</option>
                        <option>Cárdenas</option>
                        <option>Centla</option>
                        <option>Centro</option>
                       <option> Comalcalco </option>
                       <option> Cunduacán</option>
                        <option>Emiliano Zapata</option>
                        <option>Huimanguillo</option>
                        <option>Jalapa</option>
                        <option>Jalpa de Méndez</option>
                        <option>Jonuta</option>
                        <option>Macuspana</option>
                        <option>Nacajuca</option>
                        <option>Paraíso</option>
                        <option>Tacotalpa</option>
                        <option>Teapa</option>
                        <option>Tenosique</option>
                        <option value="<?php echo $fila ['NOMBRE_MUNICIPIO'];?>" selected><?php echo $fila ['NOMBRE_MUNICIPIO'];?></option>
        </select>
        <?php } ?>
                            </div>
                        <div class="form-group mb-3">
                        <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                            <label class="font-weight-bold">Colonia: <span class="text-danger">*</span></label>
                            <input name="NOMBRE_COLONIA" type="varchar" class="form-control" value="<?php echo $fila ['NOMBRE_COLONIA'];?>" placeholder="<?php echo $fila ['NOMBRE_COLONIA'];?>">
                            <?php } ?>
                        </div>
                        <div class="form-group mb-3">
                         <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                            <label class="font-weight-bold">Calle:<span class="text-danger">*</span></label>
                            <input name="CALLE" class="form-control" value="<?php echo $fila ['CALLE'];?>" placeholder="<?php echo $fila ['CALLE'];?>">
                            <?php } ?>
                        </div>
                        <div class="form-group mb-3">
                         <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?> 
                            <label class="font-weight-bold">Numero Interior:<span class="text-danger">*</span></label>
                            <input name="NUM_INT" type="varchar" class="form-control" value="<?php echo $fila ['NUM_INT'];?>" placeholder="<?php echo $fila ['NUM_INT'];?>">
                            <?php } ?>
                        </div>
                        <div class="form-group mb-3">
                          <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                            <label class="font-weight-bold">Numero Exterior:<span class="text-danger">*</span></label>
                            <input name="NUM_EXT"  class="form-control" value="<?php echo $fila ['NUM_EXT'];?>" placeholder="<?php echo $fila ['NUM_EXT'];?>">
                            <?php } ?>
                        </div>
                        <div class="form-group mb-3">
                          <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>  
                            <label class="font-weight-bold">Codigo Postal: <span class="text-danger">*</span></label>
                            <input name="CP" type="varchar" class="form-control" value="<?php echo $fila ['CP'];?>" placeholder="<?php echo $fila ['CP'];?>">
                            <?php } ?>
                        </div>
                        <div class="form-group mb-12">
                            <?php 
                              $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
                              $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                              while ($fila = mysqli_fetch_array($resultado)) {
                             ?>   
                                <label class="font-weight-bold">Clave de la Membresía: <span class="text-danger">*</span></label>
                                <br>
        <select class="form-control3" id="Municipio" class="Municipio" name="CVE_USUARIOS">
                        <option value="<?php echo $fila ['CVE_USUARIOS'];?>" selected><?php echo $fila ['CVE_USUARIOS'];?></option>
        </select>
        <?php } ?>
                            </div>
                            
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">He comprobado que mis datos son correctos.</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cambiar Información</button>
                        <br>
                         <br>
                        <br>
                    </form>
                      <a href="Zapateria.php?CVE=<?php echo $Clave; ?>" id="FLO2" class="font-weight-bold">Ir a Inicio</a><br><br>
                        <a href="USUARIO EJEMPLO.php?CVE=<?php echo $Clave; ?>" id="FLO2"  class="font-weight-bold">Regresar a Perfil</a>
                        <br>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © Antonio Fuentes Jara. UTTAB.</small>
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
