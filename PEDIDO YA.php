 <?php 
  include(".PHP/conexion.php");
   if(isset($_GET['CVE'])){
      $Clave2=$_GET['CVE'];
      $TOTPED=$_GET['TOT']; 
      $PAYP=$_GET['PAY']; 
  }
    $GLOBALS['$NUMM'] = something;
    $PEDD=$NUMM=$NUMM+1;
     ?>
  <?php 

  include("PHP/conexion.php");
   $sql= "update pedidos set SUBTOTAL = '$TOTPED' where CVE_MEMBRESIA = '$Clave2'";
   $sql2= "update pedidos set TOTAL = '$TOTPED' where CVE_MEMBRESIA = '$Clave2'";
   $sql3= "update pedidos set FECHA_COMPRA = NOW() where CVE_MEMBRESIA = '$Clave2'";
   $sql4= "update pedidos set PLAZO_GARANTIA = '2022-07-29' where CVE_MEMBRESIA = '$Clave2'";
   $sql5= "update pedidos set STATUS = 'Sucursal' where CVE_MEMBRESIA = '$Clave2'";
   $sql6= "update pedidos set NUM_PED= '$PAYP' where CVE_MEMBRESIA = '$Clave2'";

   $resultado =$conn->query($sql);
   $resultado =$conn->query($sql2);
   $resultado =$conn->query($sql3);
   $resultado =$conn->query($sql4);
   $resultado =$conn->query($sql5);
   $resultado =$conn->query($sql6);
   ?>
   <?php 
   include("PHP/conexion.php");
   $sql= "delete from `carrito` where CVE_MEMBRESIA='$Clave2'";
   $resultado =$conn->query($sql);
   ?>
   <?php
  header("location:Pedido_Realizado.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>