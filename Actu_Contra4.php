<?php 
if(isset($_GET['CVE'])){
    $PRE= $_GET['CVE'];
  }
  if(isset($_GET['CVE2'])){
    $Clave= $_GET['CVE2'];
  }
    if(isset($_POST['CONTRASENA_ADM'])){
    $Clave2= $_POST['CONTRASENA_ADM'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update administradores set  CONTRASENA_ADM = '$Clave2' where CVE_ADMINISTRADOR = '$Clave'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>

 <?php  
  header("location:Admin_AD.php?CVE=$PRE");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>