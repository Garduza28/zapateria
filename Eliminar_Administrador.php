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
$sql= "delete from `administradores` where CVE_ADMINISTRADOR='$Clave'";
$sql2= "delete from `usuarios` where  CVE_USUARIOS='$Clave'";
$sql3= "delete from `domicilios` where CVE_DOMICILIO = '$DOM'";

$resultado =$conn->query($sql);
$resultado =$conn->query($sql2);
$resultado =$conn->query($sql3);
 ?>
 <?php  
  header("location:Admin_AD.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>

