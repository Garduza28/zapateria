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
  <title>Pedidos</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
  <title>Caballeros</title>

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
  max-width: 100%;
  display: block;
}


@media screen and (min-width: 590px) {
  
  .container{
    grid-template-columns: repeat(2, 1fr);
  }
  
}

*{
  font-family: Bahnschrift SemiBold;
}

@media screen and (min-width: 960px) {
  
  .container{
    grid-template-columns: repeat(3, 1fr);
  }
  
}   
#linea5{
  justify-content: center;
  text-align: center;
  width: 75%;
}
#Caballeros:checked ~ #ImageneS .Damas, #Caballeros:checked ~ #ImageneS .Niños,  #Caballeros:checked ~ #ImageneS .Niñas{
  display: none;
}
#Damas:checked ~ #ImageneS .Niños, #Damas:checked ~ #ImageneS .Niñas,  #Damas:checked ~ #ImageneS .Caballeros{
  display: none;
}
#Niños:checked ~ #ImageneS  .Niñas, #Niños:checked ~ #ImageneS  .Damas,  #Niños:checked ~ #ImageneS .Caballeros{
  display: none;
}
#Niñas:checked ~ #ImageneS .Niños, #Niñas:checked ~ #ImageneS .Caballeros,  #Niñas:checked ~ #ImageneS .Damas{
  display: none;
}
#Tenis:checked ~ #ImageneS .Zapatos{
  display: none;
}

    </style>

     <script src="scripts.js"></script>
     <
</head>
<body background="IMG/fondo2.jpg">
    <br>
    <center><img id="logo2" src="IMG/LOGO.png" width="40%"></center>
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
            <a class="NoH3" class="nav-link" href="Lista_Pedidos.php?CVE=<?php echo $Clave; ?>">Lista de Pedidos</a>
          </li>
           <li class="nav-item">
            <a  class="NoH3" class="nav-link disabled" href="USUARIO EJEMPLO.php?CVE=<?php echo $Clave; ?>" tabindex="-1" aria-disabled="true">Mi Perfil</a><img class="avatar" src="IMG/AVATARP.png">
          </li> 
        </ul>
        <center><a href="Zapateria.php?CVE=<?php echo $Clave; ?>"><img class="logo" src="IMG/LOGO2.png" width="220px"height="150px"></a></center>
      </div>
    </div>
  </nav>
</header>
<center>
<div id="linea5">
  
<form>
  <fieldset >
    <legend class="NoH11">Listado para Realizar pedidos</legend>
    <div class="mb-3">
    <p class="NoH1">Selecciona el Genero:</p><br>
    <input type="checkbox" id="Caballeros"  name="Filtro">      <label for="Caballeros"></label>Caballeros
    <input type="checkbox" id="Damas" name="Filtro" >         <label for="Damas"></label> Damas  
    <input type="checkbox" id="Niños" name="Filtro" >       <label for="Niños"></label>Niños
    <input type="checkbox" id="Niñas" name="Filtro" >       <label for="Niñas"></label>Niñas
  </p>
</form>
 <div class="linea">
          <p>
    <p class="NoH1">Selecciona el Tipo de Zapato:</p><br>   
      <input type="checkbox" id="Tenis" name="Filtro">      <label for="Tenis"></label>Tenis
      <input type="checkbox" id="Sandalias" name="Filtro">     <label for="Sandalias"></label>Sandalias
      <input type="checkbox" id="Zapatillas" name="Filtro">     <label for="Zapatillas"></label>Zaptillas
      <input type="checkbox" id="Flats" name="Filtro">     <label for="Flats"></label>Flats
      <input type="checkbox" id="Zapatos" name="Filtro">     <label for="Zapatos"></label>Zapatos
      <input type="checkbox" id="Botas" name="Filtro">     <label for="Botas"></label>Botas
  </p>
</form>
      <label for="disabledSelect" class="form-label"><p class="NoH1">Seleccionar Especifico</p></label>
</div>
<div id="ImageneS">
<div class="Caballeros">
  <div id="linea">
  <h1 class="NoH11">Caballeros</h1>
  <br>
</div>
<br>
<div class="Tenis">
    <h1 class="NoH1">Tenis Varon</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/TenisH1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:490$</h3><p><b>Talla:=25-28</b></p><p></p>
      <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
        <option id="cant1">27.5</option>
        <option id="cant1">28</option>
      </select>
        <p>Tenis Deportivos Halogen By Mr. Shu Color Negro</p>
         <a type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Halogen By Mr. Shu Color Negro ,Precio:490$',490)">Agregar a Pedidos</a>
           <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/TenisH2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:479$</h3><p><b>Talla:=25-27</b></p>
       
         <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="Talla" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
      </select>

        <p>Tenis Deportivos H Negro Color Negro</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos H Negro Color Negro, Precio:479$',479)">Agregar a Pedidos</a>
        <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
              <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/TenisH3.jpg" alt="" class="item-img">
            <div class="item-text">
        <h3 class="rojo">Precio:459$</h3><p><b>Talla:=25-27</b></p>
         <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
      </select>
   
        <p>Tenis Deportivos H Negro Color Negro y Amarillo</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos H Negro Color Negro y Amarillo,Precio:459$',459)">Agregar a Pedidos</a>
        <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
    </div>
    <div class="Zapatos">
    <h1 class="NoH1">Zapatos Varon</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/ZapatoH1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:459$</h3><p><b>Talla:=25-26</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
      </select>
        <p>Zapatos Casuales Chamaco Sas Color Negro</p>
        <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Chamaco Sas Color Negro,Precio:459$',459)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/ZapatoH2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:390$</h3><p><b>Talla:=25-26</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
      </select>
        <p>Zapatos Casuales Custom Style Color Negro</p>
        <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Custom Style Color Negro,Precio:390$',490)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/ZapatoH3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:519$</h3><p><b>Talla:=25-28</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
        <option id="cant1">27.5</option>
        <option id="cant1">28</option>
      </select>
        <p>Zapatos Casuales Mr Shu Color Camel</p><br>
        <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Mr Shu Color Camel,Precio:519$',519)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
  </div>
</div>
<div class="Botas">
    <h1 class="NoH1">Botas</h1>
<div class="container">
     <div class="item">
      <img src="ZapatosF/BotasH1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:500</h3><p><b>Talla:=25-29</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
        <option id="cant1">27.5</option>
        <option id="cant1">28</option>
        <option id="cant1">29</option>
      </select>
        <p>Botas De Piel Steel Boost Color Negro</p>
           <a type="button" class="btn btn-danger" onclick="add('Botas De Piel Steel Boost Color Negro,Precio:500$',500)">Agregar a Pedidos</a>
            <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/BotasH2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:599$</h3><p><b>Talla:=25-29</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
       <option id="cant1">27.5</option>
        <option id="cant1">28</option>
        <option id="cant1">29</option>
      </select>
        <p>Botas American Boots Color Negro y Amarillo</p>
         <a type="button" class="btn btn-danger" onclick="add('Botas American Boots Color Negro y Amarillo,Precio:599$',599)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/BotasH3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:449$</h3><p><b>Talla:=25-28</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
        <option id="cant1">27.5</option>
        <option id="cant1">28</option>
      </select>
        <p>Botas Discovery Color Negro Estilo Nex</p>
        <a type="button" class="btn btn-danger" onclick="add('Botas Discovery Color Negro Estilo Nex,Precio:449$',449)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
      </div>
    </div>
  </div>
   </div>
  <div class="Damas"> 
<div id="linea">
  <h1 class="NoH11">Damas</h1>
  <br>
</div>
<br>
<br>
<div class="Zapatillas">
    <h1 class="NoH1">Zapatillas</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/Tacones1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:399$</h3><p><b>Talla:=22-25</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24.5</option>
        <option id="cant1">25</option>
      </select>
        <p>Zapatillas Miracol By Mama Lola Color Carmel</p>
         <a type="button" class="btn btn-danger" onclick="add('Botas De Piel Steel Boost Color Negro,Precio:399$',399)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    
    <div class="item">
      <img src="ZapatosF/Tacones2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=22-25</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24.5</option>
        <option id="cant1">25</option>
      </select>
        <p>Zapatillas Miracol By Mama Lola Color Negro</p>
         <a type="button" class="btn btn-danger" onclick="add('Botas De Piel Steel Boost Color Negro,Precio:219$',219)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    
    <div class="item">
      <img src="ZapatosF/Tacones3.jpg" alt="" class="item-img">
            <div class="item-text">
        <h3 class="rojo">Precio:299$</h3><p><b>Talla:=25-28</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
        <option id="cant1">26.5</option>
        <option id="cant1">27</option>
        <option id="cant1">27.5</option>
         <option id="cant1">28</option>
      </select>
        <p>Zapatillas Lili Mill By Sprinkles Color Carmel</p>
        <br>
         <a type="button" class="btn btn-danger" onclick="add('Botas De Piel Steel Boost Color Negro,Precio:299$',299)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
    </div>
      <div class="Tenis">
    <h1 class="NoH1">Tenis</h1> 
</div>
<div class="container">
    <div class="item">
      <img src="ZapatosF/TenisD.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:249$</h3><p><b>Talla:=22-25</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24.5</option>
        <option id="cant1">25</option>
      </select>
        <p>Tenis Deportivos Pirma Color Rosa</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Pirma Color Rosa,Precio:249$',249)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/TenisD2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:329$</h3><p><b>Talla:=22-26</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
         <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24.5</option>
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
      </select>
        <p>Tenis Deportivos Suns Color Negro/Fiusha</p>
        <a type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Suns Color Negro/Fiusha,Precio:329$',329)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/TenisD3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:299$</h3><p><b>Talla:=22-24</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24</option>
      </select>
        <p>Tenis Deportivos Diogga Color Oxford/Morado</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Diogga Color Oxford/Morado,Precio:299$',299)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
  </div>
  <div class="Sandalias">
    <h1 class="NoH1">Sandalias</h1>
<div class="container">
     <div class="item">
      <img src="ZapatosF/SandaliasD1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:355$</h3><p><b>Talla:=22-26</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24</option>
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
      </select>
        <p>Sandalias Real Jungle Color Negro</p>
          <a  type="button" class="btn btn-danger" onclick="add('Sandalias Real Jungle Color Negro,Precio:355$',355)">Agregar a Pedidos</a>
           <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/SandaliasD2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:320$</h3><p><b>Talla:=22-25</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
          <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24</option>
        <option id="cant1">25</option>

      </select>
        <p>Sandalias Hr Color Negro Modelo Bix</p>
          <a  type="button" class="btn btn-danger" onclick="add('Sandalias Hr Color Negro Modelo Bix,Precio:320$',320)">Agregar a Pedidos</a>
           <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/SandaliasD3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:419$</h3><p><b>Talla:=22-26</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">22</option>
        <option id="cant1">22.5</option>
        <option id="cant1">23</option>
        <option id="cant1">23.5</option>
        <option id="cant1">24</option>
        <option id="cant1">25</option>
        <option id="cant1">25.5</option>
        <option id="cant1">26</option>
      </select>
        <p>Sandalias Real Jungle Color Kiss Rosa</p>
          <a  type="button" class="btn btn-danger" onclick="add('Sandalias Real Jungle Color Kiss Rosa,Precio:419$',419)">Agregar a Pedidos</a>
           <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="Niños"> 
<div id="linea">
  <h1 class="NoH11">Niños</h1>
  <br>
  </div>
<br>
<div class="Tenis">
    <h1 class="NoH1">Tenis Juveniles</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/TenisJ1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=18-21</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">18</option>
        <option id="cant1">18.5</option>
        <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
      </select>
        <p>Tenis Deportivos American Fire Color Negro/Rojo</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos American Fire Color Negro/Rojo,Precio:219$',219)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    
    <div class="item">
      <img src="ZapatosF/TenisJ2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:299$</h3><p><b>Talla:=16-22</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">16</option>
        <option id="cant1">17</option>
        <option id="cant1">18</option>
        <option id="cant1">18.5</option>
        <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
          <option id="cant1">22</option>
      </select>
        <p>Tenis Deportivos Qatar Color Marino/Rojo</p>
        <br>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Qatar Color Marino/Rojo,Precio:299$',299)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    
    <div class="item">
      <img src="ZapatosF/TenisJ3.jpg" alt="" class="item-img">
            <div class="item-text">
        <h3 class="rojo">Precio:149$</h3><p><b>Talla:=15-17</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">15</option>
        <option id="cant1">15.5</option>
        <option id="cant1">16</option>
        <option id="cant1">17</option>
      </select>
        <p>Tenis Deportivos Roddyck Color Rojo</p>
        <br>
         <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Roddyck Color Rojo,Precio:149$',149)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
    </div>
    <div class="Zapatos">
   <h1 class="NoH1">Casual Juveniles</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/CasualJ1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:319$</h3><p><b>Talla:=16-22</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
       <option id="cant1">16</option>
        <option id="cant1">17</option>
        <option id="cant1">18</option>
        <option id="cant1">18.5</option>
        <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
          <option id="cant1">22</option>
      </select>
        <p>Zapatos Casuales Custom Style Color Tan</p>
        <br>
         <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Custom Style Color Tan,Precio:319$',319)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/CasualJ2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:250$</h3><p><b>Talla:=16-21</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">16</option>
        <option id="cant1">17</option>
        <option id="cant1">18</option>
        <option id="cant1">18.5</option>
        <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
      </select>
        <p>Zapatos Casuales Custom Style Color Camel</p>
         <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Custom Style Color Camel,Precio:250$',250)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/CasualJ3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=17-22</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">17</option>
        <option id="cant1">18</option>
        <option id="cant1">18.5</option>
        <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
          <option id="cant1">22</option>
      </select>
        <p>Zapatos Casuales De Piel Paolo Brigoletti Color Cafe</p>
         <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales De Piel Paolo Brigoletti Color Cafe,Precio:219$',219)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
  </div>
    </div>
    <div class="Sandalias">
   <h1 class="NoH1">Sandalias Juveniles</h1>
<div class="container">
     <div class="item">
      <img src="ZapatosF/SandaliaJ1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:410</h3><p><b>Talla:=15-17</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">15</option>
        <option id="cant1">15.5</option>
        <option id="cant1">16</option>
        <option id="cant1">17</option>
      </select>
        <p>Sandalias Destroyer Kids Color Ferrero/Naranja</p>
         <a type="button" class="btn btn-danger" onclick="add('Sandalias Destroyer Kids Color Ferrero/Naranja,Precio:410$',410)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/SandaliaJ2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:400$</h3><p><b>Talla:=19-22</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
         <option id="cant1">19</option>
        <option id="cant1">19.5</option>
        <option id="cant1">20</option>
         <option id="cant1">21</option>
          <option id="cant1">22</option>
      </select>
        <p>Sandalias Minis Nice Lex Color Negro</p>
         <a type="button" class="btn btn-danger" onclick="add('Sandalias Minis Nice Lex Color Negro,Precio:400$',400)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/SandaliaJ3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:329$</h3><p><b>Talla:=17-18</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">17</option>
        <option id="cant1">17.5</option>
        <option id="cant1">18</option>
      </select>
        <p>Sandalias Minis Nice Color Cognac/Marino</p>
         <a type="button" class="btn btn-danger" onclick="add('Sandalias Minis Nice Color Cognac/Marino,Precio:329$',329)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
  </div>
</div>
 </div>
<div class="Niñas">
  <div id="linea">
  <h1 class="NoH11" class="Niñas">Niñas</h1>
    </div>
  <br>
<br>
  <div class="Flats">
     <h1 class="NoH1">Flats</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/FlatsN1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:200$</h3><p><b>Talla:=12-14</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
      </select>
        <p>Flats Tropicana Color Lavanda</p>
         <a type="button" class="btn btn-danger" onclick="add('Zapatos Casuales Chamaco Sas Color Negro,Precio:200$',200)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/FlatsN2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=12-15</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
         <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
        <option id="cant1">14.5</option>
        <option id="cant1">15</option>
      </select>
        <p>Flats Manchitas Color Rosa Rich</p>
         <a type="button" class="btn btn-danger" onclick="add('Flats Tropicana Color Lavanda,Precio:219$',219)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div> 
    <div class="item">
      <img src="ZapatosF/FlatsN3.jpg" alt="" class="item-img">
            <div class="item-text">
        <h3 class="rojo">Precio:309$</h3><p><b>Talla:=12-16</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
          <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
        <option id="cant1">14.5</option>
        <option id="cant1">15</option>
         <option id="cant1">15.5</option>
        <option id="cant1">16</option>
      </select>
        <p>Flats Chiflados Color Romanse</p>
         <a type="button" class="btn btn-danger" onclick="add('Flats Chiflados Color Romanse,Precio:309$',309)">Agregar a Pedidos</a>
          <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
    </div>
    <div class="Sandalias">
   <h1 class="NoH1">Sandalias Juveniles Femeninas</h1>
<div class="container">
    <div class="item">
      <img src="ZapatosF/SandaliaN1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:319$</h3><p><b>Talla:=14-15</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">14</option>
        <option id="cant1">14.5</option>
        <option id="cant1">15</option>
      </select>
        <p>Sandalias Trencitas Color Blanco</p>
        <a type="button" class="btn btn-danger" onclick="add('Sandalias Trencitas Color Blanco,Precio:319$',319)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    <div class="item">
      <img src="ZapatosF/SandaliaN2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:250$</h3><p><b>Talla:=15-16</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">15</option>
        <option id="cant1">15.5</option>
        <option id="cant1">16</option>
      </select>
        <p>Sandalias Kassandra Color Pink</p>
        <a type="button" class="btn btn-danger" onclick="add('Sandalias Kassandra Color Pink,Precio:250$',250)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/SandaliaN3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=12-14</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
      </select>
        <p>Sandalias Jakuna Color Azul</p>
        <a type="button" class="btn btn-danger" onclick="add('Sandalias Jakuna Color Azul,Precio:219$',219)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
  </div>
    <div class="Tenis">
  <h1 class="NoH1">Tenis Juveniles Femeninas </h1>
<div class="container">
     <div class="item">
      <img src="ZapatosF/TenisN1.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:$193</h3><p><b>Talla:=12-15</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
         <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
        <option id="cant1">15</option>
      </select>
        <p>Tenis Deportivos Suns Color Plata/Rosa</p>
        <br>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Suns Color Plata/Rosa,Precio:$193',193)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/TenisN2.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:190$</h3><p><b>Talla:=13-14</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
      </select>
        <p>Tenis Deportivos Suns Color Negro/Fiusha Neon</p>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Suns Color Negro/Fiusha Neon,Precio:190$',190)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
     <div class="item">
      <img src="ZapatosF/TenisN3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3 class="rojo">Precio:219$</h3><p><b>Talla:=12-14</b></p>
          <label for="disabledSelect" class="form-label"  class="NoH1">Talla</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">12</option>
        <option id="cant1">12.5</option>
        <option id="cant1">13</option>
        <option id="cant1">13.5</option>
        <option id="cant1">14</option>
      </select>
        <p>Tenis Deportivos Kroop Color Plata/Rosa</p>
        <br>
        <a  type="button" class="btn btn-danger" onclick="add('Tenis Deportivos Kroop Color Plata/Rosa,Precio:219$',219)">Agregar a Pedidos</a>
         <label for="disabledSelect" class="form-label"  class="NoH1">Cantidad</label>
      <select name="cantidad" type="range" id="disabledSelect" class="form-select">
        <option id="cant1">1</option>
        <option id="cant2">2</option>
        <option id="cant3">3</option>
        <option id="cant4">4</option>
        <option id="cant5">5</option> 
      </select>
      </div>
    </div>
    </div>
      </div>
      </div>
    </div>
     <button id="checkout" class="btn btn-warning" onclick="pay()">Estimado</button>
    <button type="submit" class="btn btn-warning">Realizar Pedido</button>
  </fieldset>
</form>
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
      ZapateríaF © 2021.Designe by Antonio_FJ | <a href="">Informacion</a>|
    </div>
          <div class="infor">
             </center><a href="">Informacion</a> |
         <a href="">Politica y privacidad</a> |
         <a href="">Terminos y Condiciones</a>
          </div>
       </div>
  </footer>
</body>
</html>