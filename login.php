<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <!-- Jquery -->
        <script src="https://ajax.googlaepis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap para estilo de pagina -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <?php
          include "Conexion.php";
          if(isset($_POST['Login'])){
              if($_POST['user']==''or $_POST['password']=='');
              echo"Los campos deben ser llenadaos";
          }
          else {
              $sentencia = "SELECT * FROM Cliente";
              $resultado = mysqli_query($conexion, $sentencia);
              $verificar = 0;
              while($result = mysqli_fetch_object($resultado)){
                  if($result->Nombre_usuario == $_POST['user']){
                      $verificar = 1;
                  }
              }
              if($verificar == 0){
                  $user = $_POST['user'];
                  $password = $_POST['password'];
                  $conexion->query("INSERT INTO Cliente (Nombre_usuario,Contraseña) VALUES ('$user','$password')");
                  mysqli_query($conexion, $sentencia);
                  echo "Login Exitoso";
              }
          }
        ?>
    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <form action="login.php" class="col-12" method="post">
                        <div style="margin: 15px" class="form-group" id="user-group">
                            <input type="text" name="user" class="from-control" placeholder="User">
                        </div>
                        <div style="margin: 15px" class="form-group" id="password-group">
                            <input type="password" name="password" class="from-control" placeholder="Password">
                        </div>
                        <input value="Login" style="margin: 15px" type="submit" class="btn btn-dark">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>