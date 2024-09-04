 <?php 
  include(".PHP/conexion.php");
   if(isset($_GET['CVE'])){
      $Clave2=$_GET['CVE'];
      $TOTPED=$_GET['TOT']; 
  }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pago con Paypal</title>
	<script src="https://www.paypal.com/sdk/js?client-id=AX4X_pMODn0mNNdMmF3CCuu5ZnBLCFFO4EMfm9TfZupYii77j4RPMWG_bvCR6e_gYyPxqdUaS8WSJh6Z&currency=MXN"></script>
	<style type="text/css">
	.ho{
		margin-right: 15%;
		margin-left: 15%;
		  background-color: black;
	}	
	.ho2{
		margin-right: 15%;
		margin-left: 15%;
		 background-color: black;
	}
.N1212{
  text-transform: uppercase;
    position:relative;
    font-size: 90px; 
    color: white;
    border-top: 5px solid  red;
    border-bottom:5px solid red;
    text-align: center;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
}
.No1221{
    position:relative;
    font-size: 70px; 
    color: white;
    border-top: 5px solid  red;
    border-bottom:5px solid  red;
    text-align: center;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
}
.No12213{
    padding-top: 1px;
    margin-right: 22%;
    margin-left: 22%;
    background: linear-gradient(#800000,#dbdbdb);
    border-radius:7rem;
}
.claseu{
    position:fixed;
    padding-top: 395px;
     padding-left: 305px;
}
  .btn-warning{
  color: white;
  text-transform: uppercase;
  font-size: 22px;
  background: #8A0829;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
  border-radius: 5rem;
  padding: 10px;
}
  .btn-warning3{
  color: white;
  text-transform: uppercase;
  font-size: 22px;
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
top: 40%;
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
padding-bottom: 15px;
padding-right: 62px;
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
  padding-top: 0px;
  padding-bottom: 20px;
}
.tit{
    text-transform: uppercase;
    position:relative;
    font-size: 35px; 
    color: black;
    padding-bottom: 0px;
    text-align: center;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
}
	</style>

</head>

<body class="JA">
<br>
    <div  class="No12213">
        <div class="claseu">
  <a href="CARRO YA.php?CVE=<?php echo $Clave2 ?>"><button class="btn-warning">Volver al Carrito</button></a>
  </div>
<div class="ho"><p class="No1221">Monto a Pagar</p></div>
<div class="ho2" ><p class="N1212">$<?php echo($TOTPED) ?>.00 MXN</p></div>

<div id="paypal-button-container" align="center"></div>

        <script>
        paypal.Buttons({
            style:{
                shape:'pill',
                label:'pay',
                size: 'responsive',
                color: 'black'
            },
            createOrder:function(data,actions){


                return actions.order.create({
                    purchase_units:[{
                        amount:{
                            value: '<?php echo($TOTPED) ?>'
                        }
                    }]
                });
            },
            onApprove:function(data,actions){
                actions.order.capture().then(function(detalles){
                    console.log(PAY=detalles.id);
                     window.location.href="PEDIDO YA.php?CVE=<?php echo $Clave2 ?><?php echo'&'?>TOT=<?php echo "$TOTPED"; ?><?php echo'&'?>PAY="+PAY;
                });
            },
            onCancel:function(data){
                console.log(data);
                window.location.href="noseve.php?CVE=<?php echo $Clave2 ?><?php echo'&'?>TOT=<?php echo "$TOTPED"; ?>";
            }
        }).render('#paypal-button-container');
    </script>
    
    </div>
</body>
</html>
