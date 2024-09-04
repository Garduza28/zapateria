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
    if(isset($_POST['NOMBRE_ZAP'])){
      $Nombre_Zapat=$_POST['NOMBRE_ZAP'];
    }     
    if(isset($_POST['NOMBRE_MARCAS'])){
      $Nombre_Marcas=$_POST['NOMBRE_MARCAS'];
    }
    if(isset($_POST['NOMBRE_COLOR'])){
      $Nombre_Color=$_POST['NOMBRE_COLOR'];
    }
         if(isset($_POST['EXISTENCIAS'])){
      $Stock=$_POST['EXISTENCIAS'];
    }
     if(isset($_POST['IMAGEN_ZA'])){
      $Imagen_Za=$_POST['IMAGEN_ZA'];
    }
 ?>

<?php 
 include("PHP/conexion.php");
      $resultado = $conn ->query("select * from  colores where NOMBRE_COLOR='$Nombre_Color';") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $Clave_Co= $fila ['CVE_COLOR'];
      }
 ?>

 <?php 
 include("PHP/conexion.php");
      $resultado = $conn ->query("select * from marcas where NOMBRE_MARCAS='$Nombre_Marcas';") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $Clave_Mar=$fila ['CVE_MARCAS'];
      $Clave_Pro=$fila ['CVE_PROVEEDOR'];
      }
 ?>

<?php 
 include("PHP/conexion.php");

   $sql= "update zapatos set CVE_COLOR = '$Clave_Co' where CVE_ZAPATO = '$Clave_Zapato'";
   $sql2= "update zapatos set CVE_MARCAS = '$Clave_Mar' where CVE_ZAPATO = '$Clave_Zapato'";
   $sql3= "update zapatos set CVE_PROVEEDOR = '$Clave_Pro' where CVE_ZAPATO = '$Clave_Zapato'";
   $sql4= "update zapatos set EXISTENCIAS = '$Stock' where CVE_ZAPATO = '$Clave_Zapato'";
   $sql5= "update zapatos set NOMBRE_ZAP = '$Nombre_Zapat' where CVE_ZAPATO = '$Clave_Zapato'";
   $sql6= "update zapatos set IMAGEN_ZA = '$Imagen_Za' where CVE_ZAPATO = '$Clave_Zapato'";

   $resultado =$conn->query($sql);
   $resultado =$conn->query($sql2);
   $resultado =$conn->query($sql3);
   $resultado =$conn->query($sql4);
   $resultado =$conn->query($sql5);
   $resultado =$conn->query($sql6);

 ?>

<?php  
  header("location: Actualizar_ZA.php?CVE=$Clave");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>