<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORKSHOP03</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>

<body class="mx-0">
  <div class="container-fluid">
    <?php require ('tabla.php') ?>
    <div class="msg">
        <?php echo $message; ?>
    </div>
  </div>


  <form action="GuardarDatos.php" method="POST" role="form">
    <div class="container">
    <h2>CREAR CATEGORIAS</h2>
      <input type="text" name="nom" id="nom" require placeholder="Nombre de la categoría"><br><br>
    </div>
    <div class="container">
      <input type="text" name="des" id="des" require placeholder="Digite su descrpción"><br><br>
    </div>
    <div class="container">
      <button type="submit">Guardar Categoría</button>
    </div>
  </form>
    

</body>
</html>