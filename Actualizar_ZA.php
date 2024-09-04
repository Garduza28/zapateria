<?php 
  include(".PHP/conexion.php");
    if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="estilodashboard.css">
    <link rel="stylesheet" href="css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles5.css" rel="stylesheet" />

     <script src="scripts5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="datatables-simple-demo.js"></script>
    <title>Admin</title>
</head>

<body background="IMG/fondo2.jpg">

    <input type="checkbox" id="nav-toggle">
    
    <!--BARRA LATERAL-->
    <div class="sidebar">

        <!--IMG Y TEXTO-->
        <div class="sidebar-brand">
            <h2><img src="IMG/Logo2.png" width="280px" height="60px" alt=""></h2>
        </div>
        <!--IMG Y TEXTO-->

        <!--OPCIONES BARRA LATERAL-->
        <div class="sidebar-menu">

                <li>
                    <a href="indexdashboard.php?CVE=<?php echo $Clave ?>"><span class="las la-home"></span>
                    <span>Index</span></a>
                </li>
                <li>
                    <a href="Admin_AD.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-tools"></i> </span>
                    <span>Trabajadores</span></a>
                </li>
                <li>
                    <a href="Admini_USU.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-users"></i></span>
                    <span>Clientes</span></a>
                </li>
                <li>
                    <a  href="Admin_Agregar.php?CVE=<?php echo $Clave ?>" ><span><i class="fas fa-history"></i></span>
                    <span>Agregar</span></a>
                </li>
                <li>
                    <a href="Actualizar_ZA.php?CVE=<?php echo $Clave ?>" class="active"><span><i class="fas fa-id-card-alt"></i></span>
                    <span>Actualizaciones</span></a>
                </li>
                <li>
                    <a href="Admin_Ped.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-history"></i></span>
                    <span>Pedidos</span></a>
                </li>
                 <li>
                    <a  href="Historial_Ped.php?CVE=<?php echo $Clave ?>" ><span><i class="fas fa-history"></i></span>
                    <span>Historial De Ventas</span></a>
                </li>
                <li>
                    <a href="PARTE INDEX.php"><span><i class="fas fa-search"></i></span>
                     <span>Cerrar Sesión</span></a>
                </li>

        </div>
        <!--OPCIONES BARRA LATERAL-->
    </div>
    <!--BARRA LATERAL-->
    

    <div class="main-content">
        <!--NAV-->
        <header>
                 <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> <b>Tablero</b>
            </h2>

             <?php 
                      include("PHP/conexion.php");
                      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                      while ($fila = mysqli_fetch_array($resultado)) {
                     ?>
            <div class="user-wrapper">
               <a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>"><img src="IMG/<?php echo $fila ['IMAGEN_USU'];?>" width="40px" height="40px"></a>
                <div>
                   
                  <b><a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>"><?php echo $fila ['NOMBRE']; ?><?php echo ' ', $fila ['APELLIDO_PATERNO']; ?><?php echo ' ', $fila ['APELLIDO_MATERNO']; ?></a></b> <br>
                    <small>Administrador</small>
                <?php } ?>
                </div>
            </div>
        </header>
        <!--NAV-->

        <main background="IMG/fondo2.jpg">

          
                         <style type="text/css">
a {
  color: #0d6efd;
  text-decoration: none;
}
a:hover {
  color: none;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

span{
  padding-left: -50px;
}
h2{
  font-size: 23px;
}
b a{
  font-size: 16px;
  color: #551A8B;
  padding-bottom: 0px;
}
small{
  font-size: 14px;
  padding-top: 0px;
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
  height: 5%;
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



@media screen and (min-width: 960px) {
  
  .container{
    grid-template-columns: repeat(3, 1fr);
  }
  .rojo{
    color: red;
  }
}   
.btn-warning{
  padding: 1px;
  position: relative;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  padding-top: 3px;
  padding-bottom: 3px;
  font-size: 16px;
  position:relative;
  background: red;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
.che{
   padding-top: 3px;
  padding-bottom: 3px;
}
.NoH11{
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 70px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
.btn-warning2{
  text-align: center;
  padding: 6px;
  padding-right: 12px;
  padding-left: 12px;
  background: #8A0829;
  position: relative;
  color: white;
  font-size: 16px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
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
.btn-warning4{
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
   .NoH112{
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 50px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
h3{
  font-size: 20px;
}
a{
  font-size: 15px;
}
    </style>
<div id="linea">
  <h1 class="NoH11">Actualización de Zapatos</h1>
  <br>
</div>
 <br>
      <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <center><h3>Categorias:</h3></center>
                           
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <center>
                                    <tbody>
                                        <tr>
                                           <td>
                                                <center>  
                                                <a href="#Zapatillas"><button type="submit" class="btn btn-warning3">Zapatillas</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="#Sandalias"><button type="submit" class="btn btn-warning3">Sandalias</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="#Tenis"><button type="submit" class="btn btn-warning3">Tenis</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="#Botas"><button type="submit" class="btn btn-warning3">Botas</button></a>
                                               </center>
                                            </td>
                                              <td>
                                                <center>  
                                                <a href="#Casuales"><button type="submit" class="btn btn-warning3">Casuales</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="#Flats"><button type="submit" class="btn btn-warning3">Flats</button></a>
                                               </center>
                                            </td>
                                          </tr>
                                    </tbody>

                                    </center>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                     <div id="linea">
    <h1 class="NoH112"  id="Zapatillas">Zapatillas</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Zapatillas') ") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>

            <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
</div>
     <div id="linea">
    <h1 class="NoH112" id="Sandalias">Sandalias</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Sandalias NIñas') or TIPO_ZAPATO in ('Sandalias Niños') or TIPO_ZAPATO in ('Sandalias Damas')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>
                  <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
</div>
     <div id="linea">
    <h1 class="NoH112" id="Tenis">Tenis</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Tenis Varon') or TIPO_ZAPATO in ('Tenis Niños') or TIPO_ZAPATO in ('Tenis Niñas') or TIPO_ZAPATO in ('Tenis Damas') ") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>
                  <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
</div>
     <div id="linea">
    <h1 class="NoH112" id="Botas">Botas</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Botas Varon') or TIPO_ZAPATO in ('Botas Generales') ") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>
                  <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
</div>
     <div id="linea">
    <h1 class="NoH112" id="Casuales">Casuales</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Casuales Niños') or  TIPO_ZAPATO in ('Casuales Hombre')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>
                  <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
</div>
     <div id="linea">
    <h1 class="NoH112" id="Flats">Flats</h1>
</div>
                    <div class="container">
<?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from zapatos where TIPO_ZAPATO in ('Flats') ") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="item">
      <br>
      <h3 class="rojo">Existencia: #<?php echo $fila ['EXISTENCIAS'];?></h3>

        <form action="Modificar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
        <button type="submit" class="btn btn-warning4">Modificar Zapato</button>
        </form>
        <form action="Precio_Actu.php?CVE2=<?php echo $Clave ?>" method="POST">
       <center>
        <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" width="220px" height="230px"></center>
      <div class="item-text">
        <h3 class="rojo">Precio:<?php echo $fila ['PRECIO'];?>$</h3>
         <h3><label for="apellido"> Clave Zapato: </label></h3>
        <select id="Municipio" class="Municipio" name="CVE_ZAPATO">
      <option value="<?php echo $fila ['CVE_ZAPATO'];?>" selected><?php echo $fila ['CVE_ZAPATO'];?></option>
        </select>
        <h3><label for="apellido"> Nuevo Precio: </label></h3>
        <input type="text" name="PRECIO" placeholder="               $$$$$" required><br>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <h3><?php echo $fila ['NOMBRE_ZAP']; ?></h3>
        </form>
        <form action="Eliminar_Zapato.php?CVE=<?php echo $Clave; ?><?php echo "&"; ?>CVE2=<?php echo $fila ['CVE_ZAPATO'];?>" method="POST">
         <h3 class="rojo">Eliminar Zapato:</h3>
        <button type="submit" class="btn btn-warning2">X</button>
        </form>
    </div>
    </div>
<?php } ?>
                <!--TABLA CLIENTES RECIENTES-->

               <!--TABLA NUEVOS CLIENTES-->
            
                <!--TABLA NUEVOS CLIENTES-->
                
            </div>
        </main>

    </div>

</body>

</html>