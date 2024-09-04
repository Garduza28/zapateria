<?php
    if(isset($_GET['CVE2'])){
      $Clave2=$_GET['CVE2'];
    }
    if(isset($_GET['CVEP'])){
      $Clave3=$_GET['CVEP'];
    }
?>
<?php 
  include("PHP/conexion.php");
      $resultado = $conn ->query("select * from pedidos where CVE_PEDIDO='$Clave3'") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $MEM=$fila ['CVE_MEMBRESIA'];
      $ZAPP=$fila ['CVE_ZAPATO'];
      $CTALL=$fila ['CVE_TALLAS'];
      $CANT=$fila ['CANTIDAD'];
      $TOTA=$fila ['TOTAL_PROD'];
    }
 ?>
  <?php  
      include("PHP/conexion.php");
      $resultado = $conn ->query("select * from zapatos where CVE_ZAPATO='$ZAPP'") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $STOCK= $fila ['EXISTENCIAS'];
    }
      $NSTOCK= $STOCK - $CANT;    
   ?>
   <?php 
    include("PHP/conexion.php");
   $sql1= "update zapatos set  EXISTENCIAS = '$NSTOCK' where CVE_ZAPATO = '$ZAPP'";
   $resultado =$conn->query($sql1);
    ?>
<?php  
$sql= "insert into `ventas`(`CVE_VENTAS`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`, `TOTAL_PROD`, `STATUS`, `ENTREGA_ST`, `FECHA_AC`)";
$sql.="values (null, '$MEM' ,'$ZAPP','$CTALL', '$CANT', '$TOTA', 'Entregado','$Clave2',NOW()); ";
$resultado =$conn->query($sql);
?>
<?php 
 include("PHP/conexion.php");
$sql2= "delete from `pedidos` where CVE_PEDIDO='$Clave3'";
$resultado =$conn->query($sql2);
 ?>
 <?php  
  header("location:Admin_Ped.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>

