<?php  
  if(isset($_POST['CVE_USUARIOS'])){
      $Clave= $_POST['CVE_USUARIOS'];
  }
  if(isset($_POST['NOMBRE_MUNICIPIO'])){
    $NOMM= $_POST['NOMBRE_MUNICIPIO'];
  }
    if(isset($_POST['NOMBRE_COLONIA'])){
    $NOMC= $_POST['NOMBRE_COLONIA'];
  }
  if(isset($_POST['CALLE'])){
    $CALL= $_POST['CALLE'];
  }
  if(isset($_POST['NUM_INT'])){
    $NI= $_POST['NUM_INT'];
  }
   if(isset($_POST['NUM_EXT'])){
    $NE= $_POST['NUM_EXT'];
  }
     if(isset($_POST['CP'])){
    $PC= $_POST['CP'];
  }
  if(isset($_POST['NOMBRE'])){
    $NOM= $_POST['NOMBRE'];
  }
    if(isset($_POST['APELLIDO_PATERNO'])){
    $APPEP= $_POST['APELLIDO_PATERNO'];
  }
  if(isset($_POST['APELLIDO_MATERNO'])){
    $APPEM= $_POST['APELLIDO_MATERNO'];
  }
    if(isset($_POST['NUM_TELEFONO'])){
    $TEL= $_POST['NUM_TELEFONO'];
  }
  if(isset($_POST['CORREO_ELECT'])){
    $CORR= $_POST['CORREO_ELECT'];
  }
try {

include("PHP/conexion.php");
$sql1= "update usuarios set NOMBRE = '$NOM' where CVE_USUARIOS = '$Clave'";
$sql2= "update usuarios set APELLIDO_PATERNO = '$APPEP' where CVE_USUARIOS = '$Clave'";
$sql3= "update usuarios set APELLIDO_MATERNO = '$APPEM' where CVE_USUARIOS = '$Clave'";
$sql4= "update usuarios set NUM_TELEFONO = '$TEL' where CVE_USUARIOS = '$Clave'";
$sql5= "update usuarios set CORREO_ELECT = '$CORR' where CVE_USUARIOS = '$Clave'";


$resultado =$conn->query($sql1);
$resultado =$conn->query($sql2);
$resultado =$conn->query($sql3);
$resultado =$conn->query($sql4);
$resultado =$conn->query($sql5);

} catch(Exception $e){
    $error=$e->getMessage();
  }

?>


<?php 
 include("PHP/conexion.php");
      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $DOM=$fila ['CVE_DOMICILIO'];
      }
$sql6= "update domicilios set NOMBRE_MUNICIPIO = '$NOMM' where CVE_DOMICILIO = '$DOM'";
$sql7= "update domicilios set NOMBRE_COLONIA = '$NOMC' where CVE_DOMICILIO = '$DOM'";
$sql8= "update domicilios set CALLE = '$CALL' where CVE_DOMICILIO = '$DOM'";
$sql9= "update domicilios set NUM_INT = '$NI' where CVE_DOMICILIO = '$DOM'";
$sql10= "update domicilios set NUM_EXT = '$NE' where CVE_DOMICILIO = '$DOM'";
$sql11= "update domicilios set CP = '$PC' where CVE_DOMICILIO = '$DOM'";

$resultado =$conn->query($sql6);
$resultado =$conn->query($sql7);
$resultado =$conn->query($sql8);
$resultado =$conn->query($sql9);
$resultado =$conn->query($sql10);
$resultado =$conn->query($sql11);

 ?>
 <?php  
  header("location:Actu_Info_AD.php?CVE=$Clave");
  mysqli_free_result($resultado);
  mysqli_close($conn);
?>