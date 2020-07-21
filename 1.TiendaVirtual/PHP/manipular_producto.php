<?php
  include_once "../conexion/conexion.php";
  include_once "metodos.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>Manipular producto</title>
  </head>

  <body>
    <nav class=" navbar navbar-expand-lg navbar "style="background-color: #f7b178;">
      <a class="navbar-brand" href="#">
        <img src="jpstore.jpeg" width="60" height="60" alt="">
      </a>
      <a class="navbar-brand" href="administrador.php" style="color: black;"><h2> Administrador</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
            Categorias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #f7b178;">
            <a class="dropdown-item" href="crear_categoria.php">Crear categoría</a>
            <a class="dropdown-item" href="manipular_categoria.php">Ver/Editar/Eliminar categoría</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
            Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #f7b178;">
            <a class="dropdown-item" href="crear_producto.php">Crear producto</a>
            <a class="dropdown-item" href="manipular_producto.php">Ver/Editar/Eliminar producto</a>           
          </div>
        </li>
      </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="cerrar_se" href="/logout.php" style="color:black;"><h5>Cerrar Sesión</h5></a>
        </form>
      </div>
    </nav>

    <style type="text/css">
      <?php
        include '../CSS/login.css';
      ?>
    </style> 

    <table class="table table-striped table-dark"> 
      <tr>
        <td scope="col">Nombre</td>
        <td scope="col" >Descripción</td>
        <td scope="col" >Imagen</td>
        <td scope="col" >Código_categoría</td>
        <td scope="col" >Stock</td>
        <td scope="col" >Precio</td>
        <td scope="col" > Editar</td>
        <td scope="col" >Eliminar</td>
      </tr>
        <?php
          $con= new conectar();
          $conexion= $con->conexion();
          $sql = "SELECT * FROM producto";
          $res= mysqli_query($conexion, $sql);
          while($fil= mysqli_fetch_array($res)){
        
        ?>
      <tr>   
        <td> <?php echo $fil['nombre']?></td>
        <td> <?php echo $fil['descripcion']?></td>
        <td><?php echo '<img src = "'.$fil["imagen"].'" width="50" height="50"></img>' ?></td>             
        <td> <?php echo $fil['codigo_categoria']?></td>
        <td> <?php echo $fil['stock']?></td>
        <td> <?php echo $fil['precio']?></td>
        <td > <a href="editar_producto.php?id=<?php echo $fil['id'] ?>">✏️</a></td> 
        <td > <a href="eliminar_producto.php?id=<?php echo $fil['id'] ?>">⛔</a></td>      
      </tr>

        <?php
          }
        ?>
    </table>

  </body>
</html>