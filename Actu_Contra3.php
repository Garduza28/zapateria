<?php 
if(isset($_GET['CVE'])){
    $PRE= $_GET['CVE'];
  }
  if(isset($_GET['CVE2'])){
    $Clave= $_GET['CVE2'];
  }
    if(isset($_POST['CONTRASENA_CLI'])){
    $Clave2= $_POST['CONTRASENA_CLI'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update cliente set  CONTRASENA_CLI = '$Clave2' where CVE_MEMBRESIA = '$Clave'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>

 <?php  
  header("location:Admini_USU.php?CVE=$PRE");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>