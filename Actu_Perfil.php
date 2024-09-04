<?php 
if(isset($_POST['IMAGEN_USU'])){
    $PRE= $_POST['IMAGEN_USU'];
  }
  ?>
<?php 
if(isset($_GET['CVE'])){
    $Clave= $_GET['CVE'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update USUARIOS set IMAGEN_USU = '$PRE' where CVE_USUARIOS = '$Clave'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>
 <?php 
  header("location:USUARIO EJEMPLO.php?CVE=$Clave");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>
