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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
	<title>Niñas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">
    
    <!-- Custom styles for this template -->
        <link href="stylos.css" rel="stylesheet">
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
  grid-gap: 30px;
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

.item{
  background-color: #fff;
  cursor: pointer;
  box-shadow: 0 0 5px 0 rgba(0,0,0,.095);
  
  transition: all 300ms;
  
  position: relative;
}

.form-select2 {
    display: block;
    width: 100%;
}

.item::after {
  content: "";
  background-color: rgba(179, 229, 252, .1);
  width: 100%;
  height: 50%;
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

.item:hover {
  transform: scale(1.05);
}

.item-text{
  padding: 1em;
}


.item-img{
  max-width: 70%;
  display: block;
}


@media screen and (min-width: 590px) {
  
  .container{
    grid-template-columns: repeat(2, 1fr);
  }
  
}



@media screen and (min-width: 960px) {
  
  .container{
    grid-template-columns: repeat(3, 1fr);
  }
  
}   
.NoH111{
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 25px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
    </style>

     <script src="scripts.js"></script>
</head>
<body background="IMG/fondo2.jpg">
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="NoH3" class="navbar-brand" href="Zapateria.php?CVE=<?php echo $Clave; ?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="NoH3" class="nav-link" href="CARRO YA.php?CVE=<?php echo $Clave; ?>">Lista de Pedidos</a>
          </li>
           <li class="nav-item">
            <a  class="NoH3" class="nav-link disabled" href="USUARIO EJEMPLO.php?CVE=<?php echo $Clave; ?>" tabindex="-1" aria-disabled="true">Mi Perfil</a><img class="avatar" src="IMG/AVATARP.png">
          </li> 
          <li class="nav-item">
            <button id="checkout" class="btn btn-warning" onclick="">Estimado</button>
          </li>
        </ul>
        <center><a href="Zapateria.php?CVE=<?php echo $Clave; ?>" class="d-sm-none d-md-block"><img class="logo" src="IMG/LOGO2.png" width="220px"height="150px"></a></center>
      </div>
    </div>
  </nav>
</header>
<main>
<br>
<br>
<div id="linea">
  <h1 class="NoH11">Niñas</h1>
  <br>
</div>
<br>
<div id="linea">
    <h1 class="NoH1">Flats</h1>
</div>
<div class="container">
    <?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select TIPO_ZAPATO,PRECIO,NOMBRE_ZAP,IMAGEN_ZA,CVE_ZAPATO
    from zapatos 
    where TIPO_ZAPATO in ('Flats')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item"> 
      <br>
      <h3 class="rojo">Precio:<?php echo $fila ['PRECIO']; ?>$</h3><p><b>Talla:=12-14</b></p>
      <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="190px"></center>
      <div class="item-text">
        <p><?php echo $fila ['NOMBRE_ZAP']; ?></p>
           <a type="button" class="btn btn-warning" onclick="add('Zapatillas Miracol By Mama Lola Color Carmel',<?php echo $fila ['PRECIO'];?>)">Agregar a Estimado</a>
           <br>
         <form action="VAMOS AYAAA.php?id=<?php echo $fila ['CVE_ZAPATO']; ?><?php echo '&'; ?>CVE=<?php echo $Clave;?>" method="POST">
          <p><b>Cantidad:</b></p>
             <input type="number" name="CANTIDAD" class="form-select2" value="1">
           <p><b>Tallas:</b></p>
            <select name="NUM_TALLAS" type="range" class="form-select">
        <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
      </select>
      <br> 
      <button type="submit" class="btn btn-danger">Agregar a Pedidos</button>
         </form>
      </div>
    </div>
<?php } ?>
    </div>
    <div id="linea">
   <h1 class="NoH1">Sandalias JUVENILES FEMENINAS</h1>
</div>
<div class="container">
  <?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select TIPO_ZAPATO,PRECIO,NOMBRE_ZAP,IMAGEN_ZA,CVE_ZAPATO
    from zapatos 
    where TIPO_ZAPATO in ('Sandalias Niñas')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item"> 
      <br>
      <h3 class="rojo">Precio:<?php echo $fila ['PRECIO']; ?>$</h3><p><b>Talla:=14-15</b></p>
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="190px"></center>
      <div class="item-text">
        <p><?php echo $fila ['NOMBRE_ZAP']; ?></p>
           <a type="button" class="btn btn-warning" onclick="add('Zapatillas Miracol By Mama Lola Color Carmel',<?php echo $fila ['PRECIO'];?>)">Agregar a Estimado</a>
           <br>
         <form action="VAMOS AYAAA.php?id=<?php echo $fila ['CVE_ZAPATO']; ?><?php echo '&'; ?>CVE=<?php echo $Clave;?>" method="POST">
          <p><b>Cantidad:</b></p>
             <input type="number" name="CANTIDAD" class="form-select2" value="1">
           <p><b>Tallas:</b></p>
            <select name="NUM_TALLAS" type="range" class="form-select">
        <option id="cant1">14</option>
        <option id="cant1">14.5</option>
        <option id="cant1">15</option>
      </select>
      <br> 
      <button type="submit" class="btn btn-danger">Agregar a Pedidos</button>
         </form>
      </div>
    </div>
<?php } ?>
  </div>
      <div id="linea">
   <h1 class="NoH1">Tenis Juveniles Femeninas</h1>
</div>
<div class="container">
     <?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select TIPO_ZAPATO,PRECIO,NOMBRE_ZAP,IMAGEN_ZA,CVE_ZAPATO
    from zapatos 
    where TIPO_ZAPATO in ('Tenis Niñas')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item"> 
      <br>
      <h3 class="rojo">Precio:<?php echo $fila ['PRECIO']; ?>$</h3><p><b>Talla:=12-15</b></p>
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="190px"></center>
      <div class="item-text">
        <p><?php echo $fila ['NOMBRE_ZAP']; ?></p>
           <a type="button" class="btn btn-warning" onclick="add('Zapatillas Miracol By Mama Lola Color Carmel',<?php echo $fila ['PRECIO'];?>)">Agregar a Estimado</a>
           <br>
         <form action="VAMOS AYAAA.php?id=<?php echo $fila ['CVE_ZAPATO']; ?><?php echo '&'; ?>CVE=<?php echo $Clave;?>" method="POST">
          <p><b>Cantidad:</b></p>
             <input type="number" name="CANTIDAD" class="form-select2" value="1">
           <p><b>Tallas:</b></p>
            <select name="NUM_TALLAS" type="range" class="form-select">
               <option id="cant1">12</option>
      <option id="cant1">12.5</option>
        <option id="cant1">13</option>
              <option id="cant1">13.5</option>
        <option id="cant1">14</option>
        <option id="cant1">14.5</option>
         <option id="cant1">15</option>
      </select>
      <br> 
      <button type="submit" class="btn btn-danger">Agregar a Pedidos</button>
         </form>
      </div>
    </div>
<?php } ?>
  </div>
</div>
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
</body>
</html>