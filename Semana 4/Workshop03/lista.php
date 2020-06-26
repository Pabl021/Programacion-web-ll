<?php
  $message = "";
  if(!empty($_REQUEST['status'])) {
    $message = $_REQUEST['message'];
  }
?>
<?php
include("conexion.php");
  
  $sql = 'SELECT * FROM categoria';
  $connection = new mysqli("localhost","root","","crud");
  $result = $connection->query($sql);
  $categoria= $result->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado de categorias</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body >

  <div class="container">
    <?php require ('tabla.php') ?>
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Listado de categorias</h1>
      <table class="table ">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>  
          </tr>
        </thead>
        <tbody>
          <?php
              foreach($categoria as $user) {             
                echo "<tr><td>".$user[0]."</td><td>".$user[1]."</td><td>"."</td><td>".$user[2]."</td><td>
                <a href=\"editar.php?id=".$user[0]."\" >✏️</a> | 
                <a href=\"eliminar.php?id=".$user[0]."\">🗑️</a></td></tr>";     
              }
              
          ?>
        </tbody>
      </table>
      <?php

    $connection->close();
  ?>
  </div>


</body>
</html>