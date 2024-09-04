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
                
            </div>
        </main>

    </div>

</body>

</html>