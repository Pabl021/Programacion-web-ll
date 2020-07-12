<?php
include_once("../conexion/conexion.php");
include_once("metodos.php");

$con= new conectar();
 $conexion= $con->conexion();
$sql = "SELECT * FROM producto WHERE codigo_categoria=9";
$res= mysqli_query($conexion, $sql);

while( $record = mysqli_fetch_assoc($res) ) {
?>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $record['imagen']; ?>" alt="Card image cap">
  <div class="card-body">
  <div class="title">
<a href="#"><?php echo $record['nombre']; ?></a>
</div>
<div class="desc"><?php echo $record['descripcion']; ?></div>
<div class="desc">Precio: <?php echo $record['precio']; ?></div>
<div class="desc">Código: <?php echo $record['id']; ?></div>
<button type="submit" class="btn btn-primary" >
🛒</button>  </div>
</div>


<?php } ?>

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

</body>
</html>
