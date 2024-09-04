<?php
$conn= new mysqli('localhost','root','12345678','zapateriafuentes');

if($conn->connect_error){
   echo $error= $conn->connect_error;
}
 ?>