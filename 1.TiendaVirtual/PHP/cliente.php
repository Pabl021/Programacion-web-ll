<?php 
include_once "../conexion/conexion.php";
include_once "metodos.php";
session_start();
require('functions.php');
require_once "../conexion/conexion.php";
$user = $_SESSION['user'];
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
    <title>✔️Cliente</title>
</head>
<body background="run.jpg">

<style type="text/css">
    <?php
    include '../CSS/login.css';
    ?>
</style> 





  <nav class=" navbar navbar-expand-lg navbar "style="background-color: #f7b178;">

                <a class="navbar-brand" href="#">
    <img src="jpstore.jpeg" width="60" height="60" alt="">
  </a>
  <a class="navbar-brand" href="" style="color: black;"><h2> <?php echo $user['nombre'] ?></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
        
        <select id="proC" name="rolCat">
        <option >Escoja su categoría</option>  
          <?php
          
                $obj= new metodos();
                $sql= "SELECT id, nombre FROM categoria";
                $datos=$obj->cargarCategorias($sql);

                foreach ($datos as $key ) {                   
                ?>
                 
                <option value="<?php echo $key['id']?>"><?php echo $key['nombre']?></option> 
                   

                    <?php
                }
                    ?>
          </select> 
      
     
      

    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="compras" href="vista_cliente.php" style="color:black;"><h3>🛒</h3></a>
    </form>
    <form class="form-inline my-2 my-lg-0">
    <a class="cerrar_ses" href="/logout.php" style="color:black;"><h5>Cerrar Sesión</h5></a>
    </form>
  </div>
</nav>



</body>
</html>


