  <?php 
  include(".PHP/conexion.php");
    if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
    if(isset($_GET['CVE2'])){
      $Clave2=$_GET['CVE2'];
    }
     ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
    <style type="text/css">
      

*{
   font-family: Bahnschrift SemiBold,'Staatliches', cursive;
   font-size: 20px;
}
body {
  margin: 0;
  background: url(IMG/FONDOLO.jpg) no-repeat center top;
  background-size: cover;
  font-family: sans-serif;
  height: 100vh;
}

.login-box {
  width: 40%;
  height: 650px;
   background:  #800000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 125px;
  height: 125px;
  border-radius: 50%;
  border-top: 5px solid #15181f;
    border-bottom:5px solid #15181f;
    border-right: 5px solid #15181f;
    border-left: 5px solid #15181f;
  position: absolute;
  top: -70px;
  left: calc(47% - 50px);
  top: calc(3% - 50px);
}

.login-box h1 {
  text-transform: uppercase;
  margin: 0;
  padding: 0 0 5px;
  text-align: center;
  font-size: 22px;
   border-top: 5px solid#15181f;
    border-bottom:5px solid#15181f;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box button {
  width: 100%;
  border: none;
  height: 40px;
  background: #15181f;
  color: #fff;
  border-radius: 20px;
}

.login-box button:hover {
   width: 100%;
  cursor: pointer;
  background: #ffc107;
  color: white;
}

.login-box a {
  text-decoration: none;
  font-size: 20px;
  line-height: 20px;
  color: darkgrey;
}
.Ima2{
  text-align: center;
  font-size: 18px;
  padding-left: 80px;
}
.login-box a:hover {
  color: #fff;
}
.NoH1{
  font-size: 30px;
  padding-top: 1px;
     border-top: 5px solid#15181f;
    border-bottom:5px solid#15181f;
    text-align: center;
}
label{
  color: #FFE4B5;
}
.VOY{
  padding-top: 50px;
  padding-bottom: 50px;
}
  #let{
        font-size: 20px;
         color: #fff;
      }
  #let2{
        background: black;
        color: #15181f;
        font-size: 20px;
      }

    </style>
  </head>
  <body>
  <?php 
  include("PHP/conexion.php");
  $resultado = $conn ->query("select Z.CVE_ZAPATO,NOMBRE_ZAP,EXISTENCIAS,IMAGEN_ZA,CO.NOMBRE_COLOR,MA.NOMBRE_MARCAS
from ZAPATOS AS Z,MARCAS AS MA,COLORES AS CO
where Z.CVE_MARCAS=MA.CVE_MARCAS and Z.CVE_COLOR=CO.CVE_COLOR and Z.CVE_ZAPATO in ('$Clave2')") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?><br><br>
    <div class="login-box">
      <img src="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>"class="avatar" alt="Avatar Image"></center>
      <form action="Modificar_Zap.php?CVE=<?php echo $Clave; ?><?php echo '&'; ?>CVE2=<?php echo $Clave2; ?>" method="POST" required>
        <!-- USERNAME INPUT -->
        <br>
        <label for="username">Modificar Nombre Zapato</label>
        <input type="text" value="<?php echo $fila ['NOMBRE_ZAP'];?>" name="NOMBRE_ZAP" required>
        <!-- PASSWORD INPUT -->
        <label for="text">Nombre Marca</label><br>
 <select name="NOMBRE_MARCAS" type="range" class="form-select">
        <option>Nike</option>
<option>Adidas</option>
<option>Miracol by Mama lola</option>
<option>Puma</option>
<option>Pirma</option>
<option>Suns</option>
<option>Lili Mill</option>
<option>Diogga</option>
<option>Real Jungle</option>
<option>Destroyer</option>
<option>Halogen</option>
<option>Custom Style</option>
<option>Steel Boost</option>
<option>Minis Nice</option>
<option>Qatar</option>
<option>American Fire</option>
<option>Tropicana</option>
<option>Trencitas</option>
<option>Chiflados</option>
<option>National Geographic</option>
<option selected><?php echo $fila ['NOMBRE_MARCAS'];?></option>
      </select>
         <label for="password">Color</label><br>
        <select  name="NOMBRE_COLOR" type="range" class="form-select">
            <option>Carmel</option>
            <option>Negro/Fiusha</option>
            <option>Negros</option>
            <option>Oxford/Morado</option>
            <option>Negro/Amarillo</option>
            <option>Blanco</option>
            <option>Gris</option>
            <option>Morado</option>
            <option>Marino/Rojo</option>
            <option>Cafe</option>
            <option>Negro/Rojo</option>
            <option>Rojo</option>
            <option>Ferrero/Cafe</option>
            <option>Lavanda</option>
            <option>Azul</option>
            <option>Plateado</option>
            <option>Rosa</option>
            <option>Negro/Gris</option>
            <option selected><?php echo $fila ['NOMBRE_COLOR'];?></option>
      </select><br><br>
         <label for="password">Existencia</label>
        <input type="Number" value="<?php echo $fila ['EXISTENCIAS'];?>" name="EXISTENCIAS" required>
        <label for="password">Imagen</label><br>
        <center><input class="Ima2" type="file" value ="ZapatosF/<?php echo $fila ['IMAGEN_ZA'];?>" name="IMAGEN_ZA"></center>
         <button type="submit" class="btn btn-outline-danger">Modificar Zapato</button>
      </form><br>
      <a id="let" href="Actualizar_ZA.php?CVE=<?php echo $Clave; ?>">Ir a Inicio</a>
    </div> 
<?php } ?>
  </body> 
</html>