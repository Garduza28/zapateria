
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Zapateria</title>

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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
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

    <script src="scripts.js"></script>
  </head>	  
  <body background="IMG/fondo2.jpg">
    <br>
    <center><img id="logo2" src="IMG/LOGO.png" width="40%"></center>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="NoH3" class="navbar-brand" href="PARTE INDEX.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
            <a class="NoH3" class="nav-link disabled" href="FormularioMem.php" tabindex="-1" aria-disabled="true">Membresía</a>
          </li>
           <li class="nav-item">
            <a  class="NoH3" class="nav-link disabled" href="Login_ZA.php" tabindex="-1" aria-disabled="true">Usuario</a>
          </li> 
        </ul>
        <center><a href="PARTE INDEX.php"class="d-sm-none d-md-block"><img class="logo" src="IMG/LOGO2.png" width="220px"height="150px"></a></center>
      </div>
    </div>
  </nav>
</header>
<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carimg" class="first-slide" src="IMG/imagen1.png" alt="First slide">
        <div class="container">
        </div>
      </div>
      <div class="carousel-item">
        <img class="carimg" class="first-slide" src="IMG/imagen2.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="carimg" class="first-slide" src="IMG/imagen3.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-end">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
     </div>  
          <hr class="featurette-divider">
        <center> 
     <div class="FONW">
      <br>
            <a  href="DamasZ2.php"><img id="CONTIMG" src="IMG/damas.jpg" width="25%"></a>
            <a  href="CaballerosZ2.php"><img id="CONTIMG" src="IMG/hombre.jpg" width="25%" ></a>
            <a  href="NiñosZ2.php"><img id="CONTIMG" src="IMG/niño.jpg" width="25%" ></a>
            <a  href="NiñasZ2.php"><img id="CONTIMG" src="IMG/niña.jpg" width="25%"></a>
      </div>  
      <br>
          <hr class="featurette-divider">
     <a href="TenisZ2.php"><img id="FLOTA" class="c" src="IMG/DEPORTIVOS.jpg" width="350px" height="510px"></a> 
    </center>                 
    <!-- START THE FEATURETTES -->
  </div>

  <section  id="linea4" >
    <br>
    <center><h2 class="NoH1" >Cualquier Tipo de Tenis Deportivo</h2></center>
      <div class="container">
    <div class="item">
      <img src="ZapatosF/TenisD.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Tenis Pirma Morados</p>
      </div>
    </div>
    <div class="item">
      <img src="IMG/HALOGENNE.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Tenis Halogen Negros</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/PIRMANE.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Tenis Pirma Negros</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/NIKENE.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Tenis Nike Negros</p>
      </div>
    </div>
  </div>
  </section> 
  <hr class="featurette-divider">
     <center><a href="CasualZ2.php"><img id="FLOTA"src="IMG/CASUALP.jpg" width="350px" height="540px"></a></center> 

               
    <!-- START THE FEATURETTES -->
  </div>
  <section  id="linea4" >
    <br>
    <center><h2 class="NoH1">Cualquier Tipo de Zapatos Casuales</h2></center>
      <div class="container">
    <div class="item">
      <img src="ZapatosF/ZapatoH1.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Casuales Custom Style Negros</p>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/ZapatoH33.jpg" alt="" class="item-img">
      <div class="item-text">
       <p>Casuales Custom Style Azules</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/STYCAME.jpg" alt="" class="item-img">
      <div class="item-text">
        <p> Casuales Destroyer Cafes</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/STY50.jpg" alt="" class="item-img">
      <div class="item-text">
       <p>Casuales Destroyer Negros</p>
      </div>
    </div>
  </div>
  </section>
    <hr class="featurette-divider">
     <center><a href="BotasZ2.php"><img  id="FLOTA" src="IMG/BOTASP.jpg" width="350px" height="510px"></a>   </center>         
    <!-- START THE FEATURETTES -->
  </div>
   <section  id="linea4" >
    <br>
    <center><h2 class="NoH1">Cualquier Tipo De Botas</h2></center>
      <div class="container">
    <div class="item">
      <img src="ZapatosF/BOTACA.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Botas National.G Negro/Rojo</p>
      </div>
    </div>
    <div class="item">
      <img src="IMG/BOTABY.png" alt="" class="item-img">
      <div class="item-text">
       <p>Botas de Piel Steel Boost Cafes</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/BOTAMEL.jpg" alt="" class="item-img">
      <div class="item-text">
        <p>Botas de Piel Destroyer Cafes</p>
      </div>
    </div>
     <div class="item">
      <img src="IMG/BOTAAM.jpg" alt="" class="item-img">
      <div class="item-text">
       <p>Botas de Piel Steel Boost Negros</p>
      </div>
    </div>
  </div>
  </section>
      <hr class="featurette-divider">
      <hgroup id="linea2">
        <br>
        <h2 class="NoH1">Marcas</h2>
          <div class="contenedor"> 
  <ul id="linea2" class="slider">
    <li id="slide1">
      <img src="IMG/LOGONIK.png">
    </li>
    <li id="slide2">
      <img src="IMG/LOGOPIR.png" >
    </li>
    <li id="slide3">
      <img src="IMG/STEELB.png">
    </li> 
    <li id="slide4">
      <img src="IMG/LILMILL.png">
    </li> 
     <li id="slide5">
      <img src="IMG/HALOLO.png">
    </li> 
  </ul>
  <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
    <li>
      <a href="#slide3">3</a>
    </li>
    <li>
      <a href="#slide4">4</a>
    </li>
    <li>
      <a href="#slide5">5</a>
    </li>
  </ul>
</div>
<br>
</hgroup>
  </div>
   <hr class="featurette-divider">
 </hgroup>
        <div id="linea">
          <a href="Login_EM.php"><b><h1 class="NoH1">Zapatería Fuentes</h1></a>
          <p>Somos expertos en la industria del calzado en México, contamos con una opción para toda la familia, conoce toda la gama de zapatos para mujer, zapatos para hombre y zapatos para niños que tenemos para ti, elige el par que mejor se adapte a tu estilo y necesidades.
          <br>
          Puedes elegir entre las diferentes categorías que tenemos: tenis, casual, flats, escolar, sandalias, botas, etc.  Además, contamos con gran variedad de marcas para todos los estilos, como son: Nike, Adidas, Puma, Charly, Kswiss, Pirma, Halogen, Miracol y más …
          <br>
          No esperes más, elije el par que necesitas y aprovecha nuestras promociones para recibir tu compra nuestra Sucursal.
          <br>
          En Zapatería Fuentes, sabes de moda, sabes de ahorro !</p></b>
        </div>

    <hr class="featurette-divider">
  </div>
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
         <a href="Politica_Priv.php">Politica y privacidad</a> |
         <a href="Terminos_Cond.php">Terminos y Condiciones</a>
          </div>
       </div>
  </footer>
</main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
  </body>
</html>