<?php 
  include(".PHP/conexion.php");
    if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
    if(isset($_GET['CVE2'])){
    $Clave_Zapato=$_GET['CVE2'];
    }
?>

<?php 
 include("PHP/conexion.php");
$sql= "delete from `ventas` where CVE_ZAPATO='$Clave_Zapato'";
$sql2= "delete from `pedidos` where CVE_ZAPATO='$Clave_Zapato'";
$sql3= "delete from `carrito` where CVE_ZAPATO='$Clave_Zapato'";
$sql4= "delete from `zapatos` where CVE_ZAPATO='$Clave_Zapato'";

$resultado =$conn->query($sql);
$resultado =$conn->query($sql2);
$resultado =$conn->query($sql3);
$resultado =$conn->query($sql4);

 ?>

<?php  
  header("location: Actualizar_ZA.php?CVE=$Clave");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>