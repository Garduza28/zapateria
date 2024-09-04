<?php 
if(isset($_POST['CVE_MEMBRESIA'])){
    $PRE= $_POST['CVE_MEMBRESIA'];
  }
  if(isset($_POST['CONTRASENA_CLI'])){
    $Clave= $_POST['CONTRASENA_CLI'];
  }
try {

require_once("PHP/conexion.php");
$sql= "update cliente set  CONTRASENA_CLI = '$Clave' where CVE_MEMBRESIA = '$PRE'";

$resultado =$conn->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>

 <?php  
  header("location:USUARIO EJEMPLO.php?CVE=$PRE");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>