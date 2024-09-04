<?php 
  include("PHP/conexion.php");

            if(isset($_POST['NOMBRE'])){
              $NOM= $_POST['NOMBRE'];
            }
            if(isset($_POST['APELLIDO_PATERNO'])){
              $APPEP= $_POST['APELLIDO_PATERNO'];
            }
            if(isset($_POST['APELLIDO_MATERNO'])){
              $APPEM= $_POST['APELLIDO_MATERNO'];
            }
            if(isset($_POST['CORREO_ELECT'])){
              $CORR= $_POST['CORREO_ELECT'];
            }
 ?>
  <?php

  $consulta="select * from `usuarios` where CORREO_ELECT='$CORR'";
  $resultado=mysqli_query($conn,$consulta);
  $filas=mysqli_num_rows($resultado);

  if ($filas) {
    
    header("location: Error_Corr.php");

  } else {
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
          try {
          require_once("PHP/conexion.php");
          $sql= "insert into `Domicilios` (`CVE_DOMICILIO`, `NOMBRE_MUNICIPIO`, `NOMBRE_COLONIA`,`CALLE`,`NUM_INT`,`NUM_EXT`,`CP`) ";
          $sql.="values (null, '{$NOMM}' ,'{$NOMC}', '$CALL', '$NI', '$NE', '$PC'); ";

          $resultado =$conn->query($sql);

          $DOM= $conn->insert_id;

          } catch(Exception $e){
              $error=$e->getMessage();
            }

             if(isset($_POST['CVE_DOMICILIO'])){
              $DOM= $_POST['CVE_DOMICILIO'];
            }
              if(isset($_POST['NUM_TELEFONO'])){
              $TEL= $_POST['NUM_TELEFONO'];
            }
             if(isset($_POST['FECHA_NAC'])){
              $NAC= $_POST['FECHA_NAC'];
            }
          try {

          require_once("PHP/conexion.php");
          $sql= "insert into `usuarios` (`CVE_USUARIOS`, `CVE_DOMICILIO`, `NOMBRE`,`APELLIDO_PATERNO`,`APELLIDO_MATERNO`,`NUM_TELEFONO`,`CORREO_ELECT`,`FECHA_NAC`,`IMAGEN_USU`) ";
          $sql.="values (null, '$DOM' ,'{$NOM}', '$APPEP', '$APPEM', '$TEL', '$CORR', '$NAC','AVATARLO.png'); ";

          $resultado =$conn->query($sql);

          } catch(Exception $e){
              $error=$e->getMessage();
            }

            $CLI= $conn->insert_id;

             if(isset($_POST['CVE_MEMBRESIA'])){
              $CLI= $_POST['CVE_MEMBRESIA'];
            }
            if(isset($_POST['CONTRASENA_CLI'])){
              $CONC= $_POST['CONTRASENA_CLI'];
            }
          try {

          require_once("PHP/conexion.php");
          $sql= "insert into `cliente` (`CVE_MEMBRESIA`, `VIGENCIA`, `CONTRASENA_CLI`) ";
          $sql.="values ('$CLI', '2023/12/31' ,'$CONC'); ";

          $resultado =$conn->query($sql);

          } catch(Exception $e){
              $error=$e->getMessage();
            }
            header("location: Usuario_UA.php");
            mysqli_free_result($resultado);
            mysqli_close($conn);
          }
?>