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
<style type="text/css">
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
                    <a href="indexdashboard.php?CVE=<?php echo $Clave ?>" class="active"><span class="las la-home"></span>
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
                    <a href="Actualizar_ZA.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-id-card-alt"></i></span>
                    <span>Actualizaciones</span></a>
                </li>
                <li>
                    <a  href="Admin_Ped.php?CVE=<?php echo $Clave ?>" ><span><i class="fas fa-history"></i></span>
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

            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>
                            <?php 
                             include("PHP/conexion.php");
                             $resultado = $conn ->query("select count(CVE_MEMBRESIA) from CLIENTE") or die($conn -> error);
                            while ($fila = mysqli_fetch_array($resultado)) {
                                      echo $fila ['count(CVE_MEMBRESIA)'];
                                      }
                             ?>
                        </h1>
                        <span>Monitoreo De Clientes</span>
                    </div>
                    <div>
                        <span><i class="fas fa-users"></i></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>
                             <?php 
                             include("PHP/conexion.php");
                             $resultado = $conn ->query("select count(CVE_ADMINISTRADOR) from administradores") or die($conn -> error);
                            while ($fila = mysqli_fetch_array($resultado)) {
                                      echo $fila ['count(CVE_ADMINISTRADOR)'];
                                      }
                             ?>
                        </h1>
                        <span>Monitoreo De Trabajadores</span>
                    </div>
                    <div>
                        <span><i class="fas fa-tools"></i></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>
                            <?php 
                             include("PHP/conexion.php");
                             $resultado = $conn ->query("select count(CVE_VENTAS) from Ventas") or die($conn -> error);
                            while ($fila = mysqli_fetch_array($resultado)) {
                                      echo $fila ['count(CVE_VENTAS)'];
                                      }
                             ?>
                        </h1>
                        <span>Monitoreo De Ventas</span>
                    </div>
                    <div>
                        <span><i class="fas fa-id-card-alt"></i></span>
                    </div>
                </div>
                 <div class="card-single">
                    <div>
                       <h1>
                             <?php 
                             include("PHP/conexion.php");
                             $resultado = $conn ->query("select count(CVE_USUARIOS) from USUARIOS") or die($conn -> error);
                            while ($fila = mysqli_fetch_array($resultado)) {
                                      echo $fila ['count(CVE_USUARIOS)'];
                                      }
                             ?>
                        </h1>
                        <span>Monitoreo de Usuarios</span>
                    </div>
                    <div>
                        <span><i class="fas fa-id-card-alt"></i></span>
                    </div>
                </div>


                
            </div>

            <!--TABLA CLIENTES RECIENTES-->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Usuarios</h3>
                        </div>

                        <div class="card-body">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Perfil</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            
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
                                            Select * from usuarios") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                                        <tr>
                                            <td><img src="IMG/<?php echo $fila ['IMAGEN_USU']; ?>"width="40px" height="40px"></td>
                                            <td><?php echo $fila ['CVE_USUARIOS']; ?></td>
                                            <td><?php echo $fila ['NOMBRE']; ?></td>
                                            <td><?php echo $fila ['APELLIDO_PATERNO'];?><?php echo " ";  ?><?php echo $fila ['APELLIDO_MATERNO'];?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!--TABLA CLIENTES RECIENTES-->

               <!--TABLA NUEVOS CLIENTES-->
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3> Pedidos de Clientes</h3>

                           <a href="Admin_Ped.php?CVE=<?php echo $Clave ?>" ><button>Mostrar todo <span class="las la-arrow-right">
                            </span></button></a> 
                        </div>

                        <div class="card-body">
                                <?php 
                                     include("PHP/conexion.php");
                                      $resultado = $conn ->query("select Z.NOMBRE_ZAP,U.NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,IMAGEN_USU,P.CANTIDAD,T.NUM_TALLAS
from PEDIDOS AS P,CLIENTE AS C,ZAPATOS AS Z,USUARIOS AS U ,TALLAS AS T
where Z.CVE_ZAPATO=P.CVE_ZAPATO and P.CVE_MEMBRESIA=C.CVE_MEMBRESIA and C.CVE_MEMBRESIA=U.CVE_USUARIOS and T.CVE_TALLAS=P.CVE_TALLAS and P.STATUS in ('Sucursal')") or die($conn -> error);
                                      while ($fila = mysqli_fetch_array($resultado)) {
                                     ?>
                            <div class="customer">
                                <div class="info">
                                    <img src="IMG/<?php echo $fila ['IMAGEN_USU'];?> "width="40px" height="40px"class="item-img">
                                    <div>
                                        <h4><?php echo $fila ['NOMBRE']; ?><?php echo ' ', $fila ['APELLIDO_PATERNO']; ?><?php echo ' ', $fila ['APELLIDO_MATERNO']; ?></h4>
                                        <small><?php echo $fila ['NOMBRE_ZAP']; ?></small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <center>
                                    <b><span >Cantidad:</span></b> 
                                   <span >#<?php echo $fila ['CANTIDAD']; ?></span>
                                
                                   </center>
                                </div>
                            </div>
                        <?php } ?>
                           
                            </div>                            
                        </div>
                    </div>
                </div>
                <!--TABLA NUEVOS CLIENTES-->
                
            </div>
        </main>

    </div>

</body>

</html>