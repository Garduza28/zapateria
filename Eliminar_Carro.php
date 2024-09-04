<?php
  if(isset($_GET['id'])){
      $Clave=$_GET['id'];
      include("PHP/conexion.php");
    }
  if(isset($_GET['CVE'])){
      $Clave2=$_GET['CVE'];
      include("PHP/conexion.php");
    }
     if(isset($_GET['idz'])){
      $Clave3=$_GET['idz'];
      include("PHP/conexion.php");
    }
     if(isset($_GET['idc'])){
      $Clave4=$_GET['idc'];
      include("PHP/conexion.php");
    }
?>
<?php 
 include("PHP/conexion.php");
$sql= "delete from `carrito` where CVE_CARRITO='$Clave'";
$sql2= "delete from `pedidos` where CVE_ZAPATO='$Clave3' and CANTIDAD='$Clave4'";
$resultado =$conn->query($sql);
$resultado =$conn->query($sql2);
 ?>
 <?php  
  header("location:CARRO YA.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>
