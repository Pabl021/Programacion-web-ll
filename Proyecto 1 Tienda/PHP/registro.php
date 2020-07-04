<?php
require_once 'sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="run.jpg">
    
<style type="text/css">
    <?php
    include '../CSS/login.css';
   
    ?>
</style>

<?php
if($_SESSION['wrong_alert']){
    
    echo "<div class='container alert alert-success ' role='alert'>
    <strong> ".$_SESSION['error']." </strong> 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  $_SESSION['wrong_alert']=false;
    $_SESSION['error']=" ";
    
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-5">
                <h1 class="text-center"><b>JP SPORT</b></h1>
                <h3 class="text-center">Tu tienda deportiva de confianza ✔️</h3>
                <h3 class="text-center">📓 Formulario de ingreso 📓</h3>
                <form action="insertarCliente.php" method="POST">
                <input id="inNombre"type="text" class="form-control" name="txtnombre" placeholder="👨‍💼 Nombre" autocomplete="off">
                <input id="inApe"type="text" class="form-control" name="txtapellido" placeholder="👨‍💼 Apellido">
                <input id="inTel"type="tel" maxlength="8" class="form-control" name="txttelefono" placeholder="📞 Teléfono" autocomplete="off">
                <input id="inCor"type="email" class="form-control" name="txtcorreo" placeholder="📧 correo" autocomplete="off">
                <input id="inDir"type="text" class="form-control" name="txtdireccion" placeholder="🌆 dirección" autocomplete="off">
                <input id="inUsu"type="text" class="form-control" name="txtnomUsu" placeholder="👁️ Usuario" autocomplete="off">
                <input id="inCon"type="password" class="form-control" name="txtcontraseña" placeholder="🔐 Contraseña" autocomplete="off">
                <input  type="submit"  id="creaCu"  name="save" class="btn btn-info" value="Registrarme"> 
                </form>
            </div>
            <div class="col-md-4"></div>
    </div>
</div>

</body>
</html>


