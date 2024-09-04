<?php 
  include(".PHP/conexion.php");
   if(isset($_GET['id'])){
      $Clave=$_GET['id'];
      $Clave2=$_GET['CVE'];
  }
     ?>
<?php 
  if(isset($_POST['NUM_TALLAS'])){
      $Clave3=$_POST['NUM_TALLAS'];
    } 
  if(isset($_POST['CANTIDAD'])){
      $Clave4=$_POST['CANTIDAD'];
      } 
?> 
 <?php  
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from ZAPATOS where CVE_ZAPATO='$Clave'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
  $PRE_ZA=$fila ['PRECIO'];
  }
  ?>
  <?php

   $TOT_ZA = $Clave4 * $PRE_ZA;

    ?>
  <?php
  include("PHP/conexion.php");
  $resultado = $conn ->query("select * from TALLAS where NUM_TALLAS='$Clave3'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
  $TALL=$fila ['CVE_TALLAS']; } 
   ?>
<?php  
  include("PHP/conexion.php");
  $sql= "insert into `carrito`(`CVE_CARRITO`,`CVE_MEMBRESIA`,`CVE_ZAPATO`,`CVE_TALLAS`,`CANTIDAD`,`TOTAL_PROD`)";
  $sql.=" values ('','$Clave2','$Clave','$TALL','$Clave4','$TOT_ZA'); ";

  $resultado =$conn->query($sql);
  ?>

  <?php 
  include("PHP/conexion.php");
   $sql="insert into `pedidos`(`CVE_PEDIDO`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`, `TOTAL_PROD`, `SUBTOTAL`, `TOTAL`, `FECHA_COMPRA`, `PLAZO_GARANTIA`, `STATUS`,`NUM_PED`)";
   $sql.=" values ('','$Clave2','$Clave','$TALL','$Clave4','$TOT_ZA','','','','','',''); ";
   $resultado =$conn->query($sql);
   ?>
<?php
  header("location:CARRO YA.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>