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
    <link href="estilodashboard.css" rel="stylesheet">
          <style type="text/css">
            .btn-warning{
  padding: 1px;
  position: relative;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 16px;
  position:relative;
  background: red;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
.NoH11{
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 60px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
#linea{
  background-color: #fdfaf4;
  border-top: 5px solid grey;
  border-bottom:5px solid grey;
  text-align: center;
  padding-right: 30px;
  padding-left: 30px;
  padding-bottom: 15px;
  padding-top: 15px;
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
.btn-warning3{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: green;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 

td{
    text-align: center;
    font-size: 16px;
}

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
.table-responsive {
    width: 100%;
    overflow-x: auto;
}
.card {
    background: #BDBDBD;
}

thead tr {
    border-top: 1px solid #BDBDBD;
    border-bottom: 2px solid #BDBDBD;
}

thead td {
    font-weight: 700;
}

td {
    padding: .5rem 1rem;
    font-size: .9rem;
    color: #222;
}

td .status {
    display: inline-block;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin-right: 1rem;
}

tr td:last-child {
    display: flex;
    align-items: center;
}
.card-header {
    padding: 1rem;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #BDBDBD;
}

.card-header button {
    background: var(--main-color);
    border-radius: 10px;
    color: #BDBDBD;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
}

table {
    border-collapse: collapse;
     background: white;
     font-size: 20px;
     text-align: center;
}
table td {
     font-size: 20px;
     text-align: center;
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
  <h1  class="NoH11">Historial pedidos</h1>
</div>
<br>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                          <td>Imagen</td>
                                             <td>Fecha de Compra </td>
                                            <td>Nombre Zapato</td>
                                            <td>Talla</td>
                                            <td>Cantidad</td>
                                            <td>Total</td>
                                            <td>Status</td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php 
                                          include("PHP/conexion.php");
                                          $resultado = $conn ->query("
            select Z.IMAGEN_ZA,NOMBRE_ZAP,U.CVE_USUARIOS,NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,IMAGEN_USU,P.FECHA_COMPRA,P.CVE_ZAPATO,CVE_PEDIDO,CANTIDAD,T.NUM_TALLAS,TOTAL_PROD,STATUS
from PEDIDOS AS P,CLIENTE AS C,ZAPATOS AS Z,USUARIOS AS U ,TALLAS AS T
where Z.CVE_ZAPATO=P.CVE_ZAPATO and P.CVE_MEMBRESIA=C.CVE_MEMBRESIA and C.CVE_MEMBRESIA=U.CVE_USUARIOS and T.CVE_TALLAS=P.CVE_TALLAS and P.STATUS in ('Sucursal') and P.CVE_MEMBRESIA in ('$Clave2')") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                                         <center>
                                        <tr> 
                                          <td>  <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="210px"></center></td>
                                           <td><?php echo $fila ['FECHA_COMPRA']; ?></td>
                                            <td><?php echo $fila ['NOMBRE_ZAP'];?></td>
                                            <td><?php echo $fila ['NUM_TALLAS'];?></td>
                                            <td>#<?php echo $fila ['CANTIDAD'];?></td>
                                            <td>$<?php echo $fila ['TOTAL_PROD'];?></td>
                                            <td><br><br><br><?php echo $fila ['STATUS'];?></td>
                                        </tr>
                                    </center>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <br>

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