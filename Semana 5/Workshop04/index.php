<?php
  session_start();
  if ($_SESSION && $_SESSION['user']){
    //user already logged in
    header('Location: /admin.php');
  }
  ?>
<?php
  
  $message = "";
  if(!empty($_REQUEST['status'])) {
    switch($_REQUEST['status']) {
      case 'login':
        $message = 'User does not exists';
      break;
      
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div >
    <div >
            <div >
            <div class="msg">
      <?php echo $message; ?>
    </div>
                <h3 ><b>✔️ LOGIN WORKSHOP04 ✔️</b></h3>
                <form action="login.php" method="POST" role="form">
                <input id="inNombre"type="text" class="form-control" name="usuario" placeholder="Usuario" autocomplete="off"><br><br>
                <input id="inPass"type="password" class="form-control" name="contra" placeholder="Contraseña"><br><br>
                <input type="submit" href="" value="Iniciar sesión">          
                <h3 >¿No tienes una cuenta?</h3>
                
                </form>

                <form action="crear_cuenta.php" method="POST" role="form">
                <input type="submit" href="crear_cuenta.php" value="Crear cuenta"> 
                </form>
                
            </div>
            
    </div>
</div>
</body>
</html>