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
	$CVEMEM=$_POST['CVE_MEMBRESIA'];
	$CONTR=$_POST['CONTRASENA_CLI'];
	session_start();
	$_SESSION['CVE_MEMBRESIA']=$CVEMEM;

	$conn= new mysqli('localhost','root','12345678','zapateriafuentes');
	$consulta="SELECT * FROM `cliente` WHERE CVE_MEMBRESIA='$CVEMEM' and  CONTRASENA_CLI='$CONTR'";
	$resultado=mysqli_query($conn,$consulta);
	$filas=mysqli_num_rows($resultado);
	
	if ($filas) {
		header("location:Zapateria.php?CVE=$CVEMEM");
	}else{
		?>
		<?php 
		include ("Login_ZA.php") ;
		?>
		<h1 class="bad">ERROR DE VALIDACIÓN</h1>
		<?php 
	}
	mysqli_free_result($resultado);
	mysqli_close($conn);