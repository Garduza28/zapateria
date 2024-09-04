 <?php 
  include(".PHP/conexion.php");
   if(isset($_GET['CVE'])){
      $Clave2=$_GET['CVE'];
      $TOTPED=$_GET['TOT']; 
  }
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		  .btn-warning3{
  color: white;
  text-transform: uppercase;
  font-size: 27px;
  background: #8A0829;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
  border-radius: 5rem;
}
/* una pequeña animación extra */
@keyframes modal{0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}50%{opacity:1}}
/* estilo del contenedor padre */
.modal {
position: absolute;
max-width: 500px;
z-index: 15;
color: #5A5A5A;
padding: 10px;
font: 13px/140% «Open Sans», Helvetica, Arial, sans-serif;
}
/* estilo del fondo */
#modal-back {
position: fixed;
opacity: 0.8;z-index: 14;
background: #000000;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
}
/* estilo de contenedor */
.modal {
top: 50%;
left: 50%;
-webkit-transform:translate(-50%,-50%);
-ms-transform:translate(-50%,-50%);
transform:translate(-50%,-50%);
}
/* estilo de subcontenedor */
#modal-c {
height: 100%;
position: relative;
background: #fff;
-webkit-animation: modal 500ms cubic-bezier(0.215, 0.61, 0.355, 1) 250ms backwards;
animation: modal 500ms cubic-bezier(0.215, 0.61, 0.355, 1) 250ms backwards;
border-radius: 4px;
-webkit-box-shadow: 0 0px 7px rgba(0, 0, 0, 0.5);
box-shadow: 0 0px 7px rgba(0, 0, 0, 0.5);
}
/* estilo de títulos */
.modal h3 {
  font-size: 40px;
padding: 20px 20px  30px 20px;
text-align: center;
}
/* estilo de contenido */
.modal span {
display: block;padding: 0px 19px;
}
/* estilo de botones */
#buttons {
position: absolute;
right: 0;
bottom: 0;
padding-bottom: 25px;
padding-right: 90px;
}
#buttons a{
height: 100%;
padding: 7px 15px;
color: white;
display: inline-block;
text-decoration: none;}
.JA {
  background: url(IMG/FONDOLO.jpg) no-repeat center top;
  background-size: cover;
}
.jala{
  padding-top: 20px;
  padding-bottom: 35px;
}
.tit{
    text-transform: uppercase;
    position:fixed;
    padding-left: 88px;
    font-size: 35px; 
    color: black;
    padding-bottom: 10px;
    text-align: center;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
}



	</style>
</head>
<body class="JA">
<div id="modal"> <!-- padre -->
<div id="modal-back"></div> <!-- fondo -->
<div class="modal">
<div id="modal-c"> <!-- subcontenedor -->
  <br>
<h1 class="tit">Pago Cancelado</h1>
<img class="jala" src="IMG/Error.png" width="470px" height="430px">
  <!-- contenido -->
<div id="buttons"><a class="btn-warning3" id="mclose" href="pagar.php?CVE=<?php echo $Clave2 ?><?php echo'&'?>TOT=<?php echo "$TOTPED"; ?>">Volver A intentar</a></div> <!-- botones -->
</div>
</div> <!-- contenedor -->
</div>
</body>
</html>