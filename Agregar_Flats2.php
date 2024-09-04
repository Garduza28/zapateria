<?php 
  include("PHP/conexion.php");
    if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
        if(isset($_POST['CVE_ZAPATO'])){
      $Clave_Za=$_POST['CVE_ZAPATO'];
    }
?>

<?php 
  $consulta="select * from `zapatos` WHERE CVE_ZAPATO='$Clave_Za'";
  $resultado=mysqli_query($conn,$consulta);
  $filas=mysqli_num_rows($resultado);
  if ($filas) {
    
    header("location: Zapato_Error.php?CVE=$Clave");

  } else {
     if(isset($_POST['NOMBRE_COLOR'])){
      $Nombre_Color=$_POST['NOMBRE_COLOR'];
    }
     if(isset($_POST['NOMBRE_MARCAS'])){
      $Nombre_Marcas=$_POST['NOMBRE_MARCAS'];
    }
     if(isset($_POST['PRECIO'])){
      $Precio_Za=$_POST['PRECIO'];
    }
     if(isset($_POST['EXISTENCIAS'])){
      $Stock=$_POST['EXISTENCIAS'];
    }
      if(isset($_POST['NOMBRE_ZAP'])){
      $Nombre_Zapat=$_POST['NOMBRE_ZAP'];
    }
     if(isset($_POST['IMAGEN_ZA'])){
      $Imagen_Za=$_POST['IMAGEN_ZA'];
    }

 include("PHP/conexion.php");
      $resultado = $conn ->query("select * from  colores where NOMBRE_COLOR='$Nombre_Color';") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $Clave_Co= $fila ['CVE_COLOR'];
      }

 include("PHP/conexion.php");
      $resultado = $conn ->query("select * from marcas where NOMBRE_MARCAS='$Nombre_Marcas';") or die($conn -> error);
      while ($fila = mysqli_fetch_array($resultado)) {
      $Clave_Mar=$fila ['CVE_MARCAS'];
      $Clave_Pro=$fila ['CVE_PROVEEDOR'];
      }

  include("PHP/conexion.php");
  $sql="insert into `zapatos`(`CVE_ZAPATO`,`CVE_COLOR`,`CVE_MARCAS`,`CVE_PROVEEDOR`,`CVE_TALLAS`,`PRECIO`, `EXISTENCIAS`, `NOMBRE_ZAP`, `GENERO_ZAPATO`, `TIPO_ZAPATO`,`IMAGEN_ZA`)";
  $sql.="values ('$Clave_Za','$Clave_Co','$Clave_Mar','$Clave_Pro','/A01T2','$Precio_Za','$Stock','$Nombre_Zapat','Femenino','Flats','$Imagen_Za')";

  $resultado =$conn->query($sql);

  header("location:Zapato_Agregado.php?CVE=$Clave");
  mysqli_free_result($resultado);
  mysqli_close($conn);
}
?>