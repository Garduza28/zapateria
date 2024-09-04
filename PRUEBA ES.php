<!DOCTYPE html>
<html lang="en-es">
    <head>
        <meta charset="utf-8">
        <title>SESIÓN ADMI</title>
        <link rel="stylesheet" href="estiloCrearUsuario.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="mar">
            <h1>INICIAR SESIÓN</h1>
            <form action="codigosesionadmi.php" method="POST" >
               
                <center>
                   <br>
                    <div class="col-md-6" >
                        <label for="validationDefault03" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  placeholder="Ingrese su nombre"  name="nombre">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Password</label>
                        <input type="password" class="form-control"  placeholder="Ingrese su password"  name="pass">
                    </div>
                       
                    
                </center>
                
                
                <center>
                    <br> <br>
                    <div class="col-6">
                        <button class="btn btn-outline-danger" type="submit" >Iniciar sesión</button>
                    </div>
                </center>

                
            </form>

                <center>
                    <br> 
                    <div class="col-3">
                        <a href="admi.php"><button class="btn btn-outline-primary" type="submit" >ir a inicio</button></a> 
                    </div>
                </center>

           
            
        </div>
        



       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>

</html>