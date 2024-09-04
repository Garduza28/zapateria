<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
	<title>Marcas</title>

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

.btn-danger{
  width: 30%;
 padding: 1px;
  position: relative;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 32px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;

}
#linea5{
  width: 80%;
}
.NoH11{
  font-size: 45px;
}
    </style>
 }
</head>
<body background="IMG/fondo2.jpg">
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
        <center><a href="PARTE INDEX.php"><img class="logo" src="IMG/LOGO2.png" width="220px"height="150px"></a></center>
      </div>
    </div>
  </nav>
</header>
<center>
<section id="linea5">
	<br>
    <h2 class="NoH11">Formulario para tramitar la membresía.</h2>
    <br>
    <p class="NoH1">Este siguiente cuestionario es necesario para Tramitar la Membresía y realizar pedidos dentro de la tienda</p>

   <form action="LOGINDOM.php" method="POST">
      <fieldset class="FORM2">
       <b><legend class="NoH12">Datos personales:</legend></b>
        <label for="nombree">Nombre (o nombres en caso de tener dos): </label><br>
        <input type="text" name="NOMBRE"placeholder="Tu(s) nombre(s)"  required><br>
        <label for="apellido"> Apellido Paterno: </label><br>
        <input type="text" name="APELLIDO_PATERNO" id="apellido_p" placeholder="Apellido Mat"  required><br><br>
        <label for="apellido"> Apellido Materno: </label><br>
        <input type="text" name="APELLIDO_MATERNO" id="apellido_m" placeholder="Apellido Pat"  required><br>
        <br>
        <label>Fecha de Nacimiento: </label><br>
        <input type="date" name="FECHA_NAC" id="apellido_m"  required><br>
        <br>
      </fieldset>
		<br>
      <fieldset class="FORM2"> 
       <b> <legend class="NoH12">Domicilio:</legend></b>
      
        <br><br>
        <label for="Municipio">Municipio: </label>
        <select id="Municipio" class="Municipio" name="NOMBRE_MUNICIPIO">
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
                         <option value="---" selected>- - -</option>
        </select>
        <br><br>
         <label>Colonia: </label>
        <input type="text" name="NOMBRE_COLONIA"  required placeholder="Medellin y Pigua 3ra"><br><br>
        <label>Calle: </label>
        <input type="text" name="CALLE"  required placeholder="Sector la Huerta"><br><br>
        <label>Numero Interior: </label>
        <input type="text" name="NUM_INT"  required  placeholder="42"><br><br>
        <label>Numero Exterior: </label>
        <input type="text" name="NUM_EXT"  required placeholder="24"><br><br>
        <b><p>Nota:Si no cuenta con Algún Número Escribir "Na"</p></b>
        <label> Codigo Postal: </label>
        <input type="text" name="CP"  required placeholder="86280"><br><br>
      </fieldset>
      <br>
      <fieldset class="FORM2">
        <b><legend class="NoH12">Contacto personal:</legend><br>
        <br></b>
        <label>Correo Electrónico: </label>
        <input type="email" name="CORREO_ELECT"  required placeholder="Lorem@ipsum.com"><br><br>
        <label>Número de teléfono (10 dígitos): </label>
        <input type="varchar" name="NUM_TELEFONO"  required placeholder="Ejem: 99 31 07 47 65">
        <br>
      </fieldset>
      <br>
      <fieldset class="FORM2">
       <b><legend class="NoH12">Membresía:</legend></b> 
        <br>
        <br>
        <br>
         <label>Contraseña: </label>
        <input type="password" name="CONTRASENA_CLI"  required><br><br>
        <br>
      </fieldset>
      <br>
            <ul>
        <b><P class="NoH12">Procesos de Entrega de Membresía desde Sucursal.</P></b>
      </ul>
      <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
<br>
<br>
  </section>
  </center>
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
       <a href="Politica_Priv.php">Politica y privacidad</a> |
         <a href="Terminos_Cond.php">Terminos y Condiciones</a>
          </div>
       </div>
  </footer>
</body>
</html>