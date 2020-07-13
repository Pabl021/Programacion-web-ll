<?php
include_once("../conexion/conexion.php");
include_once("metodos.php");
require('functions.php');


session_start();
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<style type="text/css">
    <?php
    include '../CSS/login.css';
    ?>
</style> 





<nav class=" navbar navbar-expand-lg navbar "style="background-color: #f7b178;">

<a class="navbar-brand" href="" style="color: black;"><h2> <?php echo $user['nombre'] ?></h2></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">


<select id="proC" name="rolCat" onchange="location = this.value">

<option value="cliente.php" selected="selected" >Escoja su categoría</option>  
<?php

$obj= new metodos();
$sql= "SELECT id, nombre FROM categoria";
$datos=$obj->cargarCategorias($sql);

foreach ($datos as $key ) {                   
?>


<option  value="vista_cliente.php?id=<?php echo $key['id'] ?>"><?php echo $key['nombre']?>  </option>       

    <?php
}
    ?>
</select>  


</ul>
<form class="form-inline my-2 my-lg-0">
    
    <a class="dropdown-item" href="listar_productos_comprar.php"><button type="button" class="btn btn-dark " data-toggle="modal" data-target="#myModal">🛒</button></a>
    </form>
<form class="form-inline my-2 my-lg-0">
<a class="cerrar_ses" href="/logout.php" style="color:black;"><h5>Cerrar Sesión</h5></a>
</form>
</div>
</nav>

<?php

$con= new conectar();
 $conexion= $con->conexion();
 $id= $_GET['id'];
$sql = "SELECT * FROM producto WHERE codigo_categoria='$id'";
$res= mysqli_query($conexion, $sql);


while( $record = mysqli_fetch_assoc($res) ) {
 
  
?>

<div class="card contenedor" style="width: 16rem; height: 26rem;" >
  <img  style=" width: 100px; height: 100px;" class=" img card-img-top" src="<?php echo $record['imagen']; ?>" alt="Card image cap">
  <div class="card-body ">
  <div class="title">
<a style="color:green;"><?php echo $record['nombre']; ?></a>
</div>
<div style=" width: 190px; height: 100px;" class="desc"><?php echo $record['descripcion']; ?></div>
<div >Precio: <?php echo $record['precio']; ?></div>
<div >Código: <?php echo $record['id']; ?></div>
<a href="añadir_prod_car.php?id=<?php echo $record['id']; ?> 
&& nom=<?php echo $record['nombre']; ?> 
&& idLog=<?php echo $user['id']; ?>
&& precio=<?php echo $record['precio']; ?>"> <button  type="submit" class="btn btn-primary" >🛒</button></a> </div>

</div>

<?php } ?>



</body>
</html>
