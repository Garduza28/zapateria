
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
          <b><h1 class="NoH1">TÉRMINOS Y CONDICIONES</h1></b>
          <p align="justify">
Internet <b>www.zapateriaFuentes.com (en adelante el SITIO)</b> aplicación móvil o cualquier otro servicio en línea <b>(en conjunto los SERVICIOS)</b> relacionado con estos <b>TÉRMINOS</b>, mismos que regirán su acceso y uso al <b>SITIO</b> o cualquier otro sitio de Internet..
         </p>
         <br>
          <b><h1 class="NoH1">ACEPTACIÓN DE USUARIO</h1></b>
          <p align="justify">
       El <b>USUARIO</b>  acepta los TÉRMINOS desde el momento en que accede al <b>SITIO</b> y permanece en el mismo. Si el USUARIO no está de acuerdo con los mismos, deberá de abandonar inmediatamente el <b>SITIO</b> y por ende no podrá tener acceso a los <b>SERVICIOS</b> ni al <b>CONTENIDO</b> del mismo. Al momento de que un <b>USUARIO</b> realice una transacción dentro del <b>SITIO</b>, recibirá un correo electrónico donde se le indicará su número de pedido y el detalle de su compra.  
         </p>        
          <b><h1 class="NoH1">Derechos y obligaciones del USUARIO.</h1></b>
          <p align="justify">
Cada <b>USUARIO</b> es el responsable de la propiedad intelectual que se deriven del <b>CONTENIDO</b> que éste haya proporcionado, enviado, expuesto, reproducido, o cualquiera otra forma de interacción en los <b>SERVICIOS</b> del <b>SITIO</b>.  La información suministrada por el <b>USUARIO</b>  a través de los <b>SERVICIOS</b> para el CONTENIDO del <b>SITIO</b> no podrá contener, de forma enunciativa mas no limitativa, lo siguiente:
         </p>
         <li align="justify">Hipervínculos o URLs que comprendan material o contenidos no apropiados, difamatorios, utilizados para fraude o que contengan virus;</li>
         <li align="justify">Material o información protegida por la legislación de propiedad intelectual, industrial, derechos de autor o derechos de privacidad de terceros;</li>
         <li align="justify">Material sexualmente explícito, obsceno, difamatorio, racista, relacionado con el terrorismo o la violencia, y, en general, cualquier material que altere el orden social y que se considere ofensivo o inapropiado. <b>NAZAN</b> es la única persona facultada para determinar qué material es considerado inapropiado en relación con los fines del SITIO.</li><br>
           <li align="justify">Asumir una identidad falsa;</li>
         <li align="justify">Enviar, reproducir, proporcionar o exponer a través de los <b>SERVICIOS</b> información falsa o engañosa;</li>
         <li align="justify">Publicar información contraria a los fines u objeto del <b>SITIO</b>;</li>
         <li align="justify">Utilizar el <b>SITIO</b> para publicitar productos o servicios de cualquier índole;</li>
         <li align="justify">Modificar la información de los <b>CONTENIDOS</b>;</li>
          <li align="justify">Cualquier otra acción análoga y que sea contraria a los fines del <b>SITIO</b>.</li>
         <b><h1 class="NoH1">OBJETO DEL SITIO.</h1></b>
          <p align="justify">El objeto del SITIO es que los  <b>USUARIO</b>  a través de los SERVICIOS, tengan acceso al CONTENIDO mismo que incluye, enunciativa mas no limitativamente, noticias, imágenes, videos, opiniones, música, etc. El CONTENIDO comprende tanto lo que NAZAN como el <b>USUARIO</b>  proporcionan al mismo.
Queda estrictamente prohibido para el <b>USUARIO</b>  utilizar el <b>SITIO</b> para un objeto distinto al establecido, así como para acciones contrarias a la legislación aplicable, a lo dispuesto en estos <b>TÉRMINOS</b>, al orden público, de manera alguna que lesione a NAZAN, directa o indirectamente, en cualquier ámbito.
         </p>
         <b><h1 class="NoH1">Uso del CONTENIDO del SITIO.</h1></b>
          <p align="justify">El <b>USUARIO</b>se obliga a no deshabilitar o interferir con las funciones de los <b>SERVICIOS</b>, tanto en la seguridad como en su <b>CONTENIDO</b>. De igual forma, el <b>USUARIO</b> reconoce que, al ingresar al <b>SITIO</b>, es bajo su estricta responsabilidad, por lo que NAZAN no será responsable de algún desperfecto, malfuncionamiento o problema que se llegase a presentar ya sea en el equipo o programa de cómputo que el USUARIO utilice para acceder al <b>SITIO</b> .
            <br><br>
Asimismo, el <b>USUARIO</b> reconoce que, al utilizar los <b>SERVICIOS </b>del <b>SITIO</b>, tendrá acceso a una gran variedad de información y <b>CONTENIDO</b> de fuentes externas a <b>NAZAN</b> , por lo que se compromete a no responsabilizar a NAZAN por la exactitud o inexactitud, seguridad, derechos de propiedad intelectual ni utilidad relacionado con el <b>CONTENIDO</b>. Derivado de lo anterior, el <b>USUARIO</b> renuncia en este acto al ejercicio de cualquier acción legal en contra de NAZAN por la información desplegada en el <b>CONTENIDO</b>, y, en el supuesto de que el <b>USUARIO</b> sea parte de alguna acción legal en contra de <b>NAZAN</b>, el USUARIO se obliga a sacar en paz y en salvo a <b>NAZAN</b>.
         </p>
                  <b><h1 class="NoH1">REGISTRO Y MEMBRESÍA.</h1></b>
          <p align="justify">El registro como <b>USUARIO</b> implica una membresía mediante la cual, al cubrir la cantidad correspondiente al mantenimiento de la misma, se enviará al domicilio proporcionado por el <b>USUARIO</b>, un paquete con diversos productos oficiales. El <b>USUARIO </b>podrá recibir correos electrónicos derivados de su registro en relación a promociones, actualizaciones, estados de cuenta de montos pendientes, y en general, cualquier información por parte de <b> NAZAN</b> en relación a su cuenta.
            <br><br>
El <b>USUARIO</b> al mantener su membresía designará el método de pago mensual por los <b>SERVICIOS</b> y los envíos que en su caso se realicen de productos oficiales. Por este medio, el <b>USUARIO</b> autoriza a <b>NAZAN</b> el cobro mensual y recurrente conforme a los costos estipulados en la membresía. <b>NAZAN</b> se reserva el derecho de realizar ajustes en relación al costo de la membresía del  <b>USUARIO</b> en cualquier tiempo. Dichos ajustes se aplicarán a partir del día siguiente a la fecha en que se le notifique vía correo electrónico al <b>USUARIO</b> sin necesidad de que exista consentimiento expreso por parte de éste.
         </p>
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