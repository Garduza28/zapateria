<?php
    if(isset($_GET['CVE2'])){
      $Clave=$_GET['CVE2'];
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
    <title>Admin</title>
</head>
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
            <ul>
                <li>
                    <a href="indexdashboard.php?CVE=<?php echo $Clave ?>" ><span class="las la-home"></span>
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
                    <a href="Admin_Ped.php?CVE=<?php echo $Clave ?>"  class="active"><span><i class="fas fa-history"></i></span>
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
            <div id="linea">
  <h1 class="NoH11">Pedidos Generales</h1>
  <br>
</div>
<br>
                      <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pedidos</h3>
                            
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Clave</td>
                                            <td>Perfil</td>
                                            <td>Nombre</td>
                                             <td>Pedido</td>
                                            <td>Zapato</td>
                                            <td>Talla</td>
                                            <td>Cantidad</td>
                                            <td>Total</td>
                                             <td>Lista</td>
                                            <td>Cancelar</td>
                                            <td>Entregar</td>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php 
                                          include("PHP/conexion.php");
                                          $resultado = $conn ->query("
            select Z.NOMBRE_ZAP,U.CVE_USUARIOS,NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,IMAGEN_USU,P.CVE_ZAPATO,CVE_PEDIDO,CANTIDAD,T.NUM_TALLAS,TOTAL_PROD,STATUS
from PEDIDOS AS P,CLIENTE AS C,ZAPATOS AS Z,USUARIOS AS U ,TALLAS AS T
where Z.CVE_ZAPATO=P.CVE_ZAPATO and P.CVE_MEMBRESIA=C.CVE_MEMBRESIA and C.CVE_MEMBRESIA=U.CVE_USUARIOS and T.CVE_TALLAS=P.CVE_TALLAS and P.STATUS in ('Sucursal')") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                                         <center>
                                        <tr> 
                                            <td><?php echo $fila ['CVE_USUARIOS']; ?></td>
                                            <td><img src="IMG/<?php echo $fila ['IMAGEN_USU'];?> "width="40px" height="40px"class="item-img"></td>
                                            <td><?php echo $fila ['NOMBRE']; ?><?php echo ' ', $fila ['APELLIDO_PATERNO']; ?><?php echo ' ', $fila ['APELLIDO_MATERNO']; ?></td>
                                            <td><?php echo $fila ['CVE_ZAPATO']; ?></td>
                                            <td><?php echo $fila ['NOMBRE_ZAP'];?></td>
                                            <td><?php echo $fila ['NUM_TALLAS'];?></td>
                                            <td>#<?php echo $fila ['CANTIDAD'];?></td>
                                            <td>$<?php echo $fila ['TOTAL_PROD'];?></td>
                                            
                                            <td><center>  
                                                 <a href="Admin_Ped_Secc2.php?CVE2=<?php echo $Clave; ?><?php echo "&"; ?>CVEU=<?php echo $fila ['CVE_USUARIOS'];?>"><button type="submit" class="btn btn-warning4">L</button></a>
                                               </center></td>
                                            <td> <center>  
                                                 <a href="Pedido_Can.php?CVE2=<?php echo $Clave; ?><?php echo "&"; ?>CVEP=<?php echo $fila ['CVE_PEDIDO'];?>"><button type="submit" class="btn btn-warning2">X</button></a>
                                               </center></td>
                                            <td> <br><br><br><center>  
                                                 <a href="Pedido_Ent.php?CVE2=<?php echo $Clave; ?><?php echo "&"; ?>CVEP=<?php echo $fila ['CVE_PEDIDO'];?>"><button type="submit" class="btn btn-warning3">/</button></a>
                                               </center></td>
                                        </tr>
                                    </center>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
        </main>

    </div>

</body>

</html>