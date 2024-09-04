
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
p{
  font-size: 15px;
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
.padd{
  padding-left: 140px;
  padding-right: 140px;
}
li{
  font-size: 23px;
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
   <hr class="featurette-divider">
 </hgroup>
        
        <div id="linea">
          <div class="padd">
          <b><h1 class="NoH1">Politica Y Privacidad</h1></b>
          <p align="justify">Conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento y demás disposiciones aplicables de la legislación mexicana vigente en materia de Protección de Datos, pone a disposición del <b>USUARIO</b>  del sitio web <b>www.zapateriasFuentes.com</b>  el presente <b>AVISO DE PRIVACIDAD</b> respecto al tratamiento de <b>DATOS PERSONALES</b>.
         </p>
         <br>
          <p align="justify">
          Tras la lectura del <b>AVISO DE PRIVACIDAD</b>, si el <b>USUARIO</b> continúa utilizando el <b>SITIO WEB</b>, estará manifestando la aceptación expresa y voluntaria respecto al tratamiento de sus <b>DATOS PERSONALES</b>. Si el <b>USUARIO</b> está en desacuerdo con el <b>AVISO DE PRIVACIDAD</b> deberá salir del <b>SITIO WEB</b>.
         </p><br>
         <b><h1 class="NoH1">Definiciones</h1></b>
          <p align="justify"><b>COOKIES:</b> Archivos de texto que son descargados automáticamente y almacenados en el disco duro del equipo de cómputo del USUARIO al navegar en el SITIO WEB y que permiten recordar al servidor de Internet algunos datos sobre el USUARIO, entre ellos, sus preferencias para la visualización de las páginas en ese servidor, nombre y contraseña.
         </p>
          <p align="justify"><b>AVISO DE PRIVACIDAD:</b> El presente documento.
         </p>
         <p align="justify"><b>DATOS PERSONALES:</b> datos de identificación del USUARIO, así como los que éste ingrese voluntariamente cuando le sean requeridos por el SITIO WEB.
         </p>
           <p align="justify"><b>LEY:</b>  La Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
         </p>
          <p align="justify"><b>SITIO WEB:</b> El hipervínculo www.zapateriaFuentes.com.
         </p>
           <p align="justify"><b>USUARIO:</b>  Persona física identificable que acceda al  <b>SITIO WEB</b>y comunique sus datos personales a través del mismo o de los servicios disponibles.
         </p>
           <b><h1 class="NoH1">IDENTIDAD Y DOMICILIO </h1></b><br>
           <center>
            <br>
           <p align="center"><b>Perif. Carlos Pellicer Cámara 205, Guayabal Villahermosa,Tab.3.84 km</b>.
          </center>
         </p><br>
           <b><h1 class="NoH1">CONTACTO</h1></b>
             <p align="justify"><b>Domicilio: </b> Persona física identificable que acceda al  <b>SITIO WEB</b>y comunique sus datos personales a través del mismo o de los servicios disponibles.
         </p>
           <p align="justify"><b>Correo electrónico: </b> zapateriaFuentes@gmail.com
         </p>
           <p align="justify"><b>Teléfono: </b >9931074765
         </p>
         <b><h1 class="NoH1">FORMA DE RECABAR LOS DATOS PERSONALES</h1></b>
          <p align="justify">Para las finalidades señaladas en el punto IV del presente AVISO DE PRIVACIDAD, los DATOS PERSONALES pueden recabarse cuando el USUARIO los proporcione directamente, o bien utilice los servicios en línea contenidos en el SITIO WEB o a través de otras fuentes permitidas por la LEY.  Los DATOS PERSONALES recabados pudieran ser:
         </p>
         <li align="justify">-          Nombre.</li>
         <li align="justify">-          Fecha de nacimiento.</li>
         <li align="justify">-          Domicilio.</li>
         <li align="justify">-          Municipio.</li>
         <li align="justify">-          Teléfonos.</li>
          <li align="justify">-          Correo electrónico.</li>
           <li align="justify">-          Nombre de usuario Zapaterías Fuentes.</li>
            <li align="justify">-          Codigo Postal.</li>
         </p>
        </div>
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