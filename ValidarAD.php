<style type="text/css">
  .NoH11{
    text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 60px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
}
.bad {
	position:absolute;
	text-align: center;
	width: 100%;
	font-size: 50px;
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: #a22;
	color: #fff;
}
    </style>
<?php 
	$CVEAD=$_POST['CVE_ADMINISTRADOR'];
	$RFCA=$_POST['RFC'];
	$CONAD=$_POST['CONTRASENA_ADM'];
	session_start();
	$_SESSION['CVE_ADMINISTRADOR']=$CVEAD;

	$conn= new mysqli('localhost','root','12345678','zapateriafuentes');

     include("PHP/conexion.php");
      $resultado = $conn ->query("select * from administradores where CVE_ADMINISTRADOR='$CVEAD'") or die($conn -> error);
    while ($fila = mysqli_fetch_array($resultado)) {
     $ROLA=$fila ['ROL'];
     }

	$consulta="SELECT * FROM `administradores` WHERE CVE_ADMINISTRADOR='$CVEAD' and  RFC='$RFCA' and  CONTRASENA_ADM='$CONAD'";

	$resultado=mysqli_query($conn,$consulta);

	$filas=mysqli_num_rows($resultado);

	if ($filas) {

		if ($ROLA == 'Administrador') {

		header("location:indexdashboard.php?CVE=$CVEAD");
		}elseif ($ROLA == 'Empleado') {

			header("location:Admin_Ped_Emp.php?CVE=$CVEAD");
		}
	}else{
		?>
		<?php 
		include ("Login_EM.php") ;
		?>
		<h1 class="bad">ERROR DE VALIDACIÓN CONTÁCTE AL GERENTE</h1>
		<?php 
	}
	mysqli_free_result($resultado);
	mysqli_close($conn);