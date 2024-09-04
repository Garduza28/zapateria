<?php 
if(isset($_GET['CVE2'])){
      $Clave2=$_GET['CVE2'];
    }  
    ?>  

<?php 
if(isset($_POST['PRECIO'])){
    $PRE= $_POST['PRECIO'];
  }
  if(isset($_POST['CVE_ZAPATO'])){
    $Clave= $_POST['CVE_ZAPATO'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update ZAPATOS set PRECIO = '$PRE' where CVE_ZAPATO = '$Clave'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>
  <?php  
  header("location:Actualizar_ZA.php?CVE=$Clave2");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>