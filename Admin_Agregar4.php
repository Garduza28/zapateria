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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
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
            <ul>
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
                    <a  href="Admin_Agregar.php?CVE=<?php echo $Clave ?>"  class="active"><span><i class="fas fa-history"></i></span>
                    <span>Agregar</span></a>
                </li>
                <li>
                    <a href="Actualizar_ZA.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-id-card-alt"></i></span>
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
            </ul>
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
                </label> Tablero
            </h2>

             <?php 
                      include("PHP/conexion.php");
                      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                      while ($fila = mysqli_fetch_array($resultado)) {
                     ?>
            <div class="user-wrapper">
               <a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>"><img src="IMG/<?php echo $fila ['IMAGEN_USU'];?>" width="40px" height="40px"></a>
                <div>
                   
                   <a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>">  <h4><?php echo $fila ['NOMBRE']; ?><?php echo ' ', $fila ['APELLIDO_PATERNO']; ?><?php echo ' ', $fila ['APELLIDO_MATERNO']; ?></h4></a>
                    <small>Administrador</small>
                <?php } ?>
                </div>
            </div>
        </header>
        <!--NAV-->

        <main background="IMG/fondo2.jpg">
<style type="text/css">
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
td{
    text-align: center;
    font-size: 16px;
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

thead{
  text-align: right;
}
    </style>
          <div id="linea">
  <h1 class="NoH11">Agregar Zapatos</h1>
  <br>
</div>
<br>
            <!--TABLA CLIENTES RECIENTES-->
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <center><h3>Categorias:</h3></center>
                           
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                          <td>
                                           Zapatillas
                                          </td>
                                          <td>
                                            Sandalias
                                          </td>
                                          <td>
                                            Tenis
                                          </td>
                                          <td>
                                             Botas
                                          </td>
                                          <td>
                                            Casuales
                                          </td>
                                          <td>Flats</td>
                                        </tr>
                                    </thead>
                                    <center>
                                    <tbody>
                                        <tr>
                                           <td>
                                                <center>  
                                                <a href="Admin_Agregar2.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="Admin_Agregar3.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="Admin_Agregar4.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="Admin_Agregar5.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
                                               </center>
                                            </td>
                                              <td>
                                                <center>  
                                                <a href="Admin_Agregar6.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
                                               </center>
                                            </td>
                                             <td>
                                                <center>  
                                                <a href="Admin_Agregar7.php?CVE=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">Agregar</button></a>
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

                <!--TABLA CLIENTES RECIENTES-->

               <!--TABLA NUEVOS CLIENTES-->
            
                <!--TABLA NUEVOS CLIENTES-->
                <br>
            </div>
   <div id="linea">
  <h1 class="NoH11">Tenis</h1>
</div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br> <br><br><br> <br><br><br> <br>

 <style type="text/css">
       <style type="text/css">
      

*{
   font-family: Bahnschrift SemiBold,'Staatliches', cursive;
   font-size: 20px;
}
.login-box {
  width: 70%;
  height: 1000px;
  background:#15181f;
  color: #fff;
  top: 50%;
  font-size: 18px;
  left: 50%;
    text-align: center;
  position: relative;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding-right: 30px;
  padding-left: 30px;
  padding-top: 70px;
}
.Ima{
  text-align: center;
  font-size: 18px;
  padding-left: 25px;
}
.login-box .avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border-top: 5px solid red;
    border-bottom:5px solid red;
    border-right: 5px solid red;
    border-left: 5px solid red;
  position: absolute;
  top: -90px;
  left: calc(47% - 50px);
}

.login-box h1 {
  text-transform: uppercase;
  margin: 0;
  padding: 0 0 5px;
  text-align: center;
  font-size: 22px;
   border-top: 5px solid red;
    border-bottom:5px solid red;
}

.login-box label {
  margin: 0;
  padding: 0;
  text-align: center;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 70%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box button {
  width: 100%;
  border: none;
  height: 40px;
  background: #b80f22;
  color: #fff;
  border-radius: 20px;
}

.login-box button:hover {
   width: 100%;
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

select{
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  height: 40px;
  padding-left: 100px;
  padding-right: 70px;
  font-size: 16px; 
}
.select2{
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  height: 40px;
  padding-left: 130px;
  padding-right: 70px;
  font-size: 16px; 
}
 .btnn{
  font-size: 20px;
 }
.login-box a {
  text-decoration: none;
  font-size: 20px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

      #let{
        font-size: 20px;
      }
      #let2{
        background: red;
        color: black;
        font-size: 20px;
      }

    </style>
  </head>
  <body>
    <div class="login-box">
      <img src="ZapatosF/TenisH22.jpg" class="avatar" alt="Avatar Image">
      <h1 class="NoH1">Agregar Tenis</h1>
      <form action="Agregar_Tenis2.php?CVE=<?php echo $Clave; ?>" method="POST">
        <!-- USERNAME INPUT -->
        <br>
        <label for="username">Clave Zapato</label>
        <input type="text" placeholder="Ingrese Nueva CLave" name="CVE_ZAPATO" required>
        <label for="username">Color</label>
        <select  name="NOMBRE_COLOR" type="range" class="form-select">
            <option>Carmel</option>
            <option>Negro/Fiusha</option>
            <option>Negros</option>
            <option>Oxford/Morado</option>
           <option>Negro/Amarillo</option>
            <option selected>Blanco</option>
            <option>Gris</option>
            <option>Morado</option>
            <option>Marino/Rojo</option>
            <option>Cafe</option>
            <option>Negro/Rojo</option>
            <option>Rojo</option>
            <option>Ferrero/Cafe</option>
            <option>Lavanda</option>
            <option>Azul</option>
            <option>Plateado</option>
            <option>Rosa</option>
            <option>Negro/Gris</option>
      </select>
        <label for="username">Marca</label>
        <select name="NOMBRE_MARCAS" type="range" class="form-select">
        <option>Nike</option>
<option>Adidas</option>
<option>Miracol by Mama lola</option>
<option>Puma</option>
<option>Pirma</option>
<option>Suns</option>
<option>Lili Mill</option>
<option>Diogga</option>
<option selected>Real Jungle</option>
<option>Destroyer</option>
<option>Halogen</option>
<option>Custom Style</option>
<option>Steel Boost</option>
<option>Minis Nice</option>
<option>Qatar</option>
<option>American Fire</option>
<option>Tropicana</option>
<option>Trencitas</option>
<option>Chiflados</option>
<option>National Geographic</option>
      </select>
        <label for="username">Precio</label>
        <input type="text" placeholder="Ingrese Cantidad" name="PRECIO" required>
        <!-- PASSWORD INPUT -->
        <label for="password">Existencia</label>
        <input type="text" placeholder="Ingrese Existencia" name="EXISTENCIAS" required>
        <label for="password">Género Especifico</label>
       <select name="GENERO_ZAPATO" type="range" class="form-select">
<option selected>Masculino</option>
<option>Femenino</option>
      </select>
         <label for="password">Categoria Especifica</label>
       <select name="TIPO_ZAPATO" type="range" class="form-select">
<option selected>Tenis Varon</option>
<option>Tenis Damas</option>
<option>Tenis Niñas</option>
<option>Tenis Niños</option>
      </select>
        <label for="password">Nombre Tenis</label>
        <input type="text" placeholder="Ingresa Nombre del Zapato" name="NOMBRE_ZAP" required>
         <label for="password">Imagen Tenis</label>
         <br>
         <center><input class="Ima" type="file" name="IMAGEN_ZA"></center>

         <button class="btnn" type="submit" class="btn btn-outline-danger">Agregar</button>
      </form>
    </div>
        </main>
    </div>
</body>

</html>