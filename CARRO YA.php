<?php
  if(isset($_GET['CVE'])){
      $Clave2=$_GET['CVE'];
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
	<title>Casuales</title>

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
.btn-danger{
  font-size: 20px;
}
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
    img{
      display: flex;
    }
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
#fondo{
  background-color: white;
}
.item{
  background-color: #fff;
  cursor: pointer;
  box-shadow: 0 0 5px 0 rgba(0,0,0,.095);
  
  transition: all 300ms;
  
  position: relative;
}

.item::after {
  content: "";
  background-color: rgba(179, 229, 252, .1);
  width: 100%;
  height: 70%;
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
#linea9{
  background-color: #fdfaf4;
  border-top: 3px solid grey;
  border-bottom:3px solid grey;
   border-right: 3px solid grey;
 border-left: 3px solid grey;
  text-align: center;
  padding-right: 30px;
  padding-left: 30px;
  padding-bottom: 15px;
  padding-top: 15px;
}

#linea15{
  background-color: #fdfaf4;
  border-top: 3px solid grey;
  border-bottom:3px solid grey;
   border-right: 3px solid grey;
 border-left: 3px solid grey;
  text-align: center;
  padding-right: 30px;
  padding-left: 30px;
  padding-bottom: 15px;
  padding-top: 15px;
  width: 30%;
  float: right;
}
.item-img{
  max-width: 100%;
  display: block;
}

.btn-warning2{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: #8A0829;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
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
    </style>
     <script src="scripts.js"></script>
</head>
<body background="IMG/fondo2.jpg">
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="NoH3" class="navbar-brand" href="Zapateria.php?CVE=<?php echo $Clave2; ?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="NoH3" class="nav-link" href="CARRO YA.php?CVE=<?php echo $Clave2; ?>">Lista de Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="NoH3" class="nav-link" href="Historial_Ped_CL.php?CVE=<?php echo $Clave2; ?>">Historial de Pedidos</a>
          </li>
           <li class="nav-item">
            <a  class="NoH3" class="nav-link disabled" href="USUARIO EJEMPLO.php?CVE=<?php echo $Clave2; ?>" tabindex="-1" aria-disabled="true">Mi Perfil</a><img class="avatar" src="IMG/AVATARP.png">
          </li> 
        </ul>
        <center><a href="Zapateria.php?CVE=<?php echo $Clave2; ?>" class="d-sm-none d-md-block"><img class="logo" src="IMG/LOGO2.png" width="220px"height="150px"></a></center>
      </div>
    </div>
  </nav>
</header>

<br>

<br>
<br>
<div id="linea5">
  <h1  class="NoH11">Lista pedidos</h1>
</div>
 <br>
<br>
  <table class="table table-bordered" id="linea9">
                <thead>
                  <tr>
                    <th class="product-thumbnail" class="NoH11">Imagen</th>
                    <th class="product-name" class="NoH11">Producto</th>
                    <th class="product-price" class="NoH11">Precio Unitario</th>
                    <th class="product-quantity " class="NoH11">Cantidad</th>
                    <th class="product-Talla" class="NoH11">Talla</th>
                    <th class="product-total" class="NoH11">Total</th>
                    <th class="product-remove" class="NoH11">Remover</th>
                  </tr>
                </thead><?php 
include("PHP/conexion.php");
$resultado = $conn ->query("select Z.CVE_ZAPATO,IMAGEN_ZA,NOMBRE_ZAP,PRECIO,CAR.CANTIDAD,CVE_CARRITO,TOTAL_PROD,T.NUM_TALLAS 
from CARRITO AS CAR,CLIENTE AS C,ZAPATOS AS Z,TALLAS AS T 
where Z.CVE_ZAPATO=CAR.CVE_ZAPATO and T.CVE_TALLAS=CAR.CVE_TALLAS and CAR.CVE_MEMBRESIA=C.CVE_MEMBRESIA and C.CVE_MEMBRESIA in ('$Clave2')") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                <tbody>
                  <tr>
                      
                    <td class="product-thumbnail">
                      <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="190px"></center>
                    </td>
                    <td class="product-name">
                      <br>
                      <br>
                      <br>
                      <h2 class="h5 text-black"><?php echo $fila ['NOMBRE_ZAP']; ?></h2>
                    </td>
                    <td><br>
                      <br>
                      <br>
                      <p>$<?php echo $fila ['PRECIO'] ?></p>
                    </td>
                    <td>
                      <br>
                      <br>
                      <br>
                      <center>
                      <P><?php echo $fila ['CANTIDAD'] ?></P>
                      </center>
                    </td>
                    <td>
                      <br><br>
                      <br>
                      <p><?php echo $fila ['NUM_TALLAS'] ?></p>
                    </td>
                    <td><br>
                      <br>
                      <br>
                      <p>$<?php echo $fila ['TOTAL_PROD']; ?></p>
                      <?php  
                      $PROD_TOT=$fila ['TOTAL_PROD'];
                      $TOTAL_MAX= $TOTAL_MAX + $PROD_TOT;
                      ?>
                    </td>
                    <td><br><br><br><a href="Eliminar_Carro.php?id=<?php echo $fila ['CVE_CARRITO'] ?><?php echo'&'?>CVE=<?php echo $Clave2; ?><?php echo'&'?>idz=<?php echo $fila ['CVE_ZAPATO'] ?><?php echo'&'?>idc=<?php echo $fila ['CANTIDAD'] ?>" class="btn btn-warning2">X</a></td>
                  </tr>
                <?php } ?>
              </table>
             <div id="linea15" >
               <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cantidad a Pagar</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo "$TOTAL_MAX"; ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo "$TOTAL_MAX"; ?></strong>
                  </div>
             </div>
                   <a href="pagar.php?CVE=<?php echo $Clave2 ?><?php echo'&'?>TOT=<?php echo "$TOTAL_MAX"; ?>"><button class="btn btn-danger">Realizar Pedido</button></a>
              </div>
             <br><br>
                <br><br><br>
     <br><br><br>
      <br><br><br>
       <br><br><br>
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
       <a href="Politica_Priv2.php?CVE=<?php echo $Clave2; ?>">Politica y privacidad</a> |
         <a href="Terminos_Cond2.php?CVE=<?php echo $Clave2; ?>">Terminos y Condiciones</a>
          </div>
       </div>
  </footer>
</body>
</html>