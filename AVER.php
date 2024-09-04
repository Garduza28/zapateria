<?php 
  include("PHP/conexion.php");
  $sql= "insert into `carrito`(`CVE_CARRITO`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`)";
  $sql.=" values ('','37','/1C020', '/A01T2','4'); ";
  $resultado =$conn->query($sql);
 ?>