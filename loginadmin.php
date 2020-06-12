<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN-ADMIN</title>
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
         session_start();
         include "conexion.php";
 
         
         if (!empty($_POST['Auser']) && !empty($_POST['Apassword'])){
             $sql = "SELECT * FROM addmin WHERE user_name=:Nombre_usuario AND password=:Apassword";
             $stmt = $conn->prepare($sql);
             $stmt = bindParam(':Auser',$_POST['Auser']);
             $stmt = bindParam(':Apassword',$_POST['Apassword']);
             $stmt->execute();
             $results = $stmt->fetch(PDO::FETCH_ASSOC);
 
             $message ='';
 
             if($results != null){
                 $message = 'succesfully';
                 $_SESSION['Auser'] = $results['Auser'];
                 header('location: indexadmin.php');
             }else{
                 $message = "Error al ingresar";
             }
         }
        ?>
    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <form action="loginadmin.php" class="col-12" method="post">
                        <div style="margin: 15px" class="form-group" id="user-group">
                            <input type="text" name="Auser" class="from-control" placeholder="User">
                        </div>
                        <div style="margin: 15px" class="form-group" id="password-group">
                            <input type="password" name="Apassword" class="from-control" placeholder="Password">
                        </div>
                        <input value="Login" style="margin: 15px" type="submit" class="btn btn-dark">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>