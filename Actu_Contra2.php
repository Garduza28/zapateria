<?php 
if(isset($_POST['CVE_ADMINISTRADOR'])){
    $PRE= $_POST['CVE_ADMINISTRADOR'];
  }
  if(isset($_POST['CONTRASENA_ADM'])){
    $Clave= $_POST['CONTRASENA_ADM'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update administradores set  CONTRASENA_ADM = '$Clave' where CVE_ADMINISTRADOR = '$PRE'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>

 <?php  
  header("location:USUARIO EJEMPLO2.php?CVE=$PRE");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>