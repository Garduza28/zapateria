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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
                <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles5.css" rel="stylesheet" />

     <script src="scripts5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
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
                    <a href="Admin_AD.php?CVE=<?php echo $Clave ?>" class="active"><span><i class="fas fa-tools"></i> </span>
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
    .NoH11{
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
    .NoH112{
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
.btn-warning4{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: blue;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
td{
    text-align: center;
    font-size: 16px;
}
h2{
  font-size: 23px;
}
b a{
  font-size: 16px;
  color: #551A8B;
  padding-bottom: 0px;
}
a{
  text-decoration: none;
}
small{
  font-size: 14px;
  padding-top: 0px;
}
    </style>
<br>
          <div id="linea">
  <h1 class="NoH11">Monitoreo De Trabajadores</h1>
  <br>
</div>
<br>
          
            <!--TABLA CLIENTES RECIENTES-->
                <div class="projects">
                    <br>
                    <div class="card mb-4">
                               <div class="card-header">
                            <h3>Trabajadores</h3>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                       <tr>
                                           <th>Clave</th>
                                            <th>Correo</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Rol</th>
                                            <th>Contraseña</th>
                                            <th>Remover</th>
                                        </tr>
                                    </thead>
                                     <?php 
                                     include("PHP/conexion.php");
                                      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                                      while ($fila = mysqli_fetch_array($resultado)) {
                                      $DOM=$fila ['CVE_DOMICILIO'];
                                      }
                                     ?>
                                    <tbody>
                                      
                                         <?php 
                                          include("PHP/conexion.php");
                                          $resultado = $conn ->query("
                                            select U.NOMBRE,APELLIDO_PATERNO,CORREO_ELECT,APELLIDO_MATERNO,A.ROL,CVE_ADMINISTRADOR
                                            from USUARIOS as U,ADMINISTRADORES as A
                                            where A.CVE_ADMINISTRADOR=U.CVE_USUARIOS") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                                         <center>
                                        <tr>
                                            <td><?php echo $fila ['CVE_ADMINISTRADOR']; ?></td>
                                            <td><?php echo $fila ['CORREO_ELECT']; ?></td>
                                            <td><?php echo $fila ['NOMBRE']; ?></td>
                                            <td><?php echo $fila ['APELLIDO_PATERNO'];?><?php echo " ";  ?><?php echo $fila ['APELLIDO_MATERNO'];?></td>
                                            <td>
                                                <span><?php echo $fila ['ROL']; ?></span>
                                              </td>  
                                              <td>
                                                <center>  
                                                <a href="Cambio_CC4.php?CVE=<?php echo $fila ['CVE_ADMINISTRADOR']; ?><?php echo "&" ?>CVE2=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning4">C</button></a>
                                               </center>
                                            </td>
                                              <td>
                                                <center>  
                                                 <a href="Eliminar_Administrador.php?CVE=<?php echo $fila ['CVE_ADMINISTRADOR']; ?><?php echo "&"; ?>CVE2=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning2">X</button></a>
                                               </center>
                                            </td>
                                        </tr>
                                        </center>
                                    <?php } ?>      
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
            <br>
            <style type="text/css">
#linea5{
  width: 80%;
}
.NoH11{
  font-size: 45px;
}
select{
  font-size: 30px,
}
#linea5{
  font-size: 25px;
  background-color: #fdfaf4;
  border-top: 5px solid grey;
  border-bottom:5px solid grey;
  text-align: center;
  padding-right: 30px;
  padding-left: 30px;
  padding-bottom: 15px;
  padding-top: 15px;
}
.FORM1{
  border-top:3px solid grey;
  border-bottom:3px solid grey;
}
.FORM2{
  padding-top: 10px;
  padding-bottom: 10px;
  border-bottom:4px solid grey;
  border-right:4px solid grey;
  border-left: 4px solid grey;
  border-top:  4px solid grey;
}
.NoH12{
  color: red;
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 35px; 
    border-bottom:5px solid grey;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
.rojo{
  font-size: 24px;
  color: red;
  text-decoration: underline;
}
.btn-warning{
  padding: 1px;
  background: red;
  position: relative;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 22px;
  position:relative;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
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
.btn-danger{
  width: 100%;
  padding-bottom: 5px;
  position: relative;
}
.Municipio{
  font-size: 20px;
}
input{
    font-size: 20px;
}


            </style>

            <div id="linea">
  <h1 class="NoH11">Agregado De Trabajador</h1>
  <br>
</div>
<br>
            <center>
                <section id="linea5">
             <form action="Alta_Admin.php?CVE2=<?php echo $Clave ?>" method="POST">
      <fieldset class="FORM2">
       <b><legend class="NoH12">Datos personales:</legend></b>
       <br>
        <label for="nombree">Nombre (o nombres en caso de tener dos): </label><br>
        <input type="text" name="NOMBRE"placeholder="Tu(s) nombre(s)"  required><br>
        <label for="apellido"> Apellido Paterno: </label><br>
        <input type="text" name="APELLIDO_PATERNO" id="apellido_p" placeholder="Apellido Pat"  required><br><br>
        <label for="apellido"> Apellido Materno: </label><br>
        <input type="text" name="APELLIDO_MATERNO" id="apellido_m" placeholder="Apellido Mat"  required><br>
        <br>
        <label for="apellido"> RFC: </label><br>
        <input type="text" name="RFC" id="apellido_m" placeholder="EDVT900403NH4"  required><br>
        <br>
        <label>Fecha de Nacimiento: </label><br>
        <input type="date" name="FECHA_NAC" id="apellido_m"  required><br><br>
          <label for="Municipio">Rol de Trabajador: </label><br>
        <select id="Municipio" class="Municipio" name="ROL">
                        <option>Administrador</option>
                        <option selected>Empleado</option>
        </select>
        <br><br>
      </fieldset>
        <br>
      <fieldset class="FORM2"> 
       <b> <legend class="NoH12">Domicilio:</legend></b>
      
        <br>
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
        <label for="Colonia">Colonia: </label>
         <label>Colonia: </label>
        <input type="text" name="NOMBRE_COLONIA"  required placeholder="Medellin y Pigua 3ra"><br><br>
        <label>Calle: </label>
        <input type="text" name="CALLE"  required placeholder="Sector la Huerta"><br><br>
    
        <label>Numero Interior: </label>
        <input type="text" name="NUM_INT"  required  placeholder="42"><br><br>
        <label>Numero Exterior: </label>
        <input type="text" name="NUM_EXT"  required placeholder="24"><br><br>
        <b><p>Nota:Si no cuenta con Algún Número Escribir "Na"</p></b><br>
        <label> Codigo Postal: </label>
        <input type="text" name="CP"  required placeholder="86280"><br><br>
      </fieldset>
      <br>
      <fieldset class="FORM2">
        <b><legend class="NoH12">Contacto personal:</legend><br>
        </b>
        <label>Correo Electrónico: </label>
        <input type="email" name="CORREO_ELECT"  required placeholder="Lorem@ipsum.com"><br><br>
        <label>Número de teléfono (10 dígitos): </label>
        <input type="varchar" name="NUM_TELEFONO"  required placeholder="Ejem: 99 31 07 47 65">
        <br><br>
      </fieldset>
      <br>
      <fieldset class="FORM2">
       <b><legend class="NoH12">Contraseña Administrador:</legend></b> 
        <br>
        <br>
         <label>Contraseña: </label>
        <input type="password" name="CONTRASENA_ADM"  required><br><br>
        <br>
      </fieldset>
      <br>
      <button type="submit" class="btn btn-warning">Enviar</button>
    </form>
</section>
    </center>

        </main>

    </div>

</body>

</html>