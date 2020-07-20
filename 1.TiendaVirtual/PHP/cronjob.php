

<?php
$con= new conectar();
$conexion= $con->conexion();
$sql = "SELECT * FROM producto WHERE stock<=3";
$res= mysqli_query($conexion, $sql);


while($fil= mysqli_fetch_assoc($res)){
?>

 <?php echo $fil['id'];?>
 <?php echo $fil['nombre'];?>

<?php
}
?>

<?php
 $con= new conectar();
  $conexion= $con->conexion();
 $sql = "SELECT * FROM producto";
 $res= mysqli_query($conexion, $sql);


 while($fil= mysqli_fetch_array($res)){
     if($fil['stock']<=3){
         $sub="Actualización de stocks";
         $msj= "falta";
         $rec= "josepablobc2000@gmail.com";
         mail($rec, $sub, $msj);
     }else{

     }    
 ?>
     <?php
 }
    ?>
