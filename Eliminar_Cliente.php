<?php
  if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
      include("PHP/conexion.php");
      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $DOM=$fila ['CVE_DOMICILIO'];
      }
       if(isset($_GET['CVE2'])){
      $Clave2=$_GET['CVE2'];
    }
    }
?>
<?php 
 include("PHP/conexion.php");
$sql= "delete from `ventas` where CVE_MEMBRESIA='$Clave'";
$sql2= "delete from `pedidos` where CVE_MEMBRESIA='$Clave'";
$sql3= "delete from `carrito` where CVE_MEMBRESIA ='$Clave'";
$sql4= "delete from `cliente` where CVE_MEMBRESIA='$Clave'";
$sql5= "delete from `usuarios` where  CVE_USUARIOS='$Clave'";
$sql6= "delete from `domicilios` where CVE_DOMICILIO = '$DOM'";

$resultado =$conn->query($sql);
$resultado =$conn->query($sql2);
$resultado =$conn->query($sql3);
$resultado =$conn->query($sql4);
$resultado =$conn->query($sql5);
$resultado =$conn->query($sql6);
 ?>
 <?php  
  header("location:Admini_USU.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>

