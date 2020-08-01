<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>Concentrados Valenciano</title>
</head>
<body>

<style type="text/css">
        <?php
      include 'css.css';
        ?>
    </style> 




<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">
      <img src="imagenes/logo.jpeg" width="60" height="60" alt="">
      </a>

  <a class="navbar-brand" href="#" style="color: #f7b178;"><h4><b>Concentrados Valenciano</b></h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">  
        <select id="proC" name="rolCat" ">
          <option value="" selected="selected" >Escoja su categoría</option>            
        </select>              
      </li>
      <li class="nav-item">
        <a class="nav-link" href="informacion.php">Más...</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class=" mr-sm-2" type="search" placeholder="🔎Buscar producto..." aria-label="Search">
    </form>

    <form action="administrador.php" method="POST" role="form">
    <a title="⚠ Área exclusiva para administradores ⚠"><input class="btn btn-success" type="submit" id="creaCu" href="administrador.php" value="Administrador" > </a>
    </form>
  </div>
</nav>



<div class="flip-card ">
  <div class="flip-card-inner ">
    <div class="flip-card-front ">
    <img src="" width="500" height="500" alt="">
    </div>
    <div class="flip-card-back">   
    </div>
  </div>
</div>


</body>
</html>