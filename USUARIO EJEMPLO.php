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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apock web design</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <style type="text/css">

.container{
  text-align: center;
  width: 90%;
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3em;
  margin-bottom: 3em;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-gap: 40px;
}
.navbar {
    padding-top: 35px;
    padding-bottom: 35px;
    padding-left: 20px;
    padding-right: 20px;
}
.NoH0{
    text-transform: uppercase;
    position:relative;
    font-size: 35px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
}
.item{
  color: black;
  background-color:  #EAE7E7;
  cursor: pointer;
  box-shadow: 0 0 5px 0 rgba(0,0,0,.095);
  transition: all 300ms;
  position: relative;
  font-family: Bahnschrift SemiBold;
}

a .item::after {
  content: "";
  background-color: rgba(179, 229, 252, .1);
  width: 100%;
  height: 100%;
  position: absolute;
  top:0;
  left: 0;
  transform: scale(0);
  transition: all 300ms;
  opacity: 0;
}

.item:hover:after{
  opacity: 1;
  transform: scale(1);
}

.btn-warning{
  padding: 1px;
  position: relative;
  color: black;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 22px;
  position:relative;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
#CONTIMG{
  width: 20%;
  margin: 0 auto;
  min-width: 200px;
}
.item:hover {
  transform: scale(1.05);
}

.item-text{
  padding: 1em;
}

#linea4{
  background-color: #fdfaf4;
  border-top: 5px solid grey;
  border-bottom:5px solid grey;
}
.item-img{
  max-width: 100%;
  display: block;
}
.footer{
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;  
    padding: 20px;
}
@media screen and (max-width: 1100px){
    
    .container-body{
        flex-wrap: wrap;
    }
    
    .colu1{
        max-width: 100%;
    }
    
    .colu2,
    .colu3{
        margin-top: 40px;
    }
}

@media screen and (min-width: 590px) {
  
  .container{
    grid-template-columns: repeat(2, 1fr);
  }
  
}


@media screen and (min-width: 960px) {
  
  .container{
    grid-template-columns: repeat(4, 1fr);
  }
  
}   
@media screen and (min-width: 400px) and (max-width: 800px) {

 #FLOTA{
  width: 50%;
  float: center;
  padding-top: 30px;
}
}
@media screen and (min-width: 1200px) and (max-width: 2000px) {

 #FLOTA{
  float: left;
  padding-left: 30px;
  padding-top: 30px;
}
}
    </style>
    <!-- Custom styles for this template -->
     <link href="stylos.css" rel="stylesheet">
</head>

<body background="IMG/fondo2.jpg">
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="NoH3" class="navbar-brand" href="Zapateria.php?CVE=<?php echo $Clave; ?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="NoH3" class="navbar-brand" href="Cambio_CC.php?CVE=<?php echo $Clave; ?>">Cambiar Contraseña</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <a class="NoH3" class="navbar-brand" href="PARTE INDEX.php">Cerrar Sesión</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
    </div>
  </nav>
</header>
    <!--======================================
=            Apock web design            =
=======================================
Gracias por utilizar mi contenido!
Me siento agradecido compartiendo para Uds
No olvides seguirme en:
👉 Instagram - https://www.instagram.com/ApockGraficos
👉 Twitter - https://twitter.com/ApockGraficos
👉 Faccobook - https://www.facebook.com/ApockGraficos
====-->

<style type="text/css">
/*=====================================
reset estilos
no es necesario que copies esto
=====================================*/

html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: linear-gradient(orange, transparent);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background: linear-gradient(45deg, #15181f, red);
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}
body {
    padding-top: 10px;
    padding-bottom: 10px;
    color: black;
    padding-left: 10px;
    padding-right: 10px;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}
</style>
    <!--==========================
=            html            =
===========================-->
<?php 

  $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
  $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                  <img src="IMG/<?php echo $fila ['IMAGEN_USU'];?>" width="40px" height="170px">
                   <a href="Cambio_IMG.php?CVE=<?php echo $Clave;?>"><button class="boton-avatar"><i class="far fa-image"></i></button></a>
                </div>
               
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $fila ['NOMBRE'];?>  <?php echo $fila ['APELLIDO_PATERNO'];?> <?php echo $fila ['APELLIDO_MATERNO'];?></h3><?php } ?>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
<?php $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error); while ($fila = mysqli_fetch_array($resultado)) { ?>
                    <li><i class="icono fas fa-map-signs"></i> Direccion de usuario:<?php echo $fila ['NOMBRE_COLONIA'];?>, <?php echo $fila ['CALLE'];?>,#<?php echo $fila ['NUM_EXT'];?>, Codigo Postal:<?php echo $fila ['CP'];?>  </li>
              
                    <?php } ?>
                    <?php $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error); while ($fila = mysqli_fetch_array($resultado)) { ?>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:<?php echo $fila ['NUM_TELEFONO'];?></li>
                    <?php } ?>
                </ul>
                <ul class="lista-datos">
                  <?php $resultado = $conn ->query("select * from domicilios where CVE_DOMICILIO='$DOM'") or die($conn -> error); while ($fila = mysqli_fetch_array($resultado)) { ?>
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicacion: <?php echo $fila ['NOMBRE_MUNICIPIO'];?>, Tabasco</li>
                    <?php } ?>
                     <?php $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error); while ($fila = mysqli_fetch_array($resultado)) { ?>
                    <li><i class="icono fas fa-calendar-alt"></i>Fecha nacimiento:<?php echo $fila ['FECHA_NAC'];?></li>
                    <li><i class="icono fas fa-calendar-alt"></i>Correo:<?php echo $fila ['CORREO_ELECT'];?></li>
                </ul>
                <?php } ?>
                <center>
                  <style type="text/css">
                    .btn-warning{
  padding: 1px;
  position: relative;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 22px;
  background: red;
  position:relative;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
}
.btn {
    font-weight: 400;
    padding: 1rem 2rem;
    border-radius: 5rem;
    min-width: 10rem;
}
                  </style>
                 
            </div>
            <br>
            <a  href="Actu_Info.php?CVE=<?php echo $Clave; ?>"><button type="submit" class="btn btn-warning">Cambiar Información</button></a>
        </div>
    </section>
    <!--====  End of html  ====-->

<!--=============================
redes sociales fijadas en pantalla
No es necesario que copies esto!
==============================-->
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>

<br>
<br>
  <footer>
    <div>
      <div class="container-footer-all">
      <div class="container-body">

        <div class="colu1">
          <center><h1 class="NoH2">Conócenos</h1></center>
          <p>
            Somos expertos en la industria del calzado en México, contamos con una opción para toda la familia, conoce toda la gama de zapatos para mujer, zapatos para hombre y zapatos para niños que tenemos para ti, elige el par que mejor se adapte a tu estilo y necesidades.
          </p>
        </div>
        <div class="colu2">
          <center><h1 class="NoH2">Siguenos</h1></center>
          <div class="row2">
              <img src="IMG/FACEB.png"> 
              <label>Facebook</label> 
          </div>
          <div class="row2">
              <img src="IMG/TWITE.png"> 

              <label>Twiter</label> 
          </div>
          <div class="row2">
              <img src="IMG/WHATS.png"> 
              <label>WhatsApp</label> 
          </div>
        </div>
        <div class="colu3">
          <center><h1 class="NoH2">Información de Contacto</h1></center>
          <div  class="row3">
            <img src="IMG/TIENDZ.png"> 
            <label>Perif. Carlos Pellicer Cámara 205, Guayabal Villahermosa,Tab.3.84 km</label>
          </div>
           <div  class="row3">
            <img src="IMG/CORREO.png"> 
            <label>antoniofuentesjara@gmail.com</label>
          </div>
           <div  class="row3">
            <img src="IMG/TELFZ.png"> 
            <label>9931074765</label>
          </div>
         
        </div>
        <center>
      </div>
    </div>
    <div class="container-footer">
    <div class="copy">
      ZapateríaF © 2021.Designe by Antonio_FJ
    </div>
          <div class="infor">
             </center>
       <a href="Politica_Priv2.php?CVE=<?php echo $Clave; ?>">Politica y privacidad</a> |
         <a href="Terminos_Cond2.php?CVE=<?php echo $Clave; ?>">Terminos y Condiciones</a>
          </div>
       </div>
  </footer>
<!--====  End of tarjeta  ====-->
</body>

</html>
