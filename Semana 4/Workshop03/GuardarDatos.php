<?php
  include("conexion.php");

  if($_POST) {
    $nom = $_REQUEST['nom'];
    $des = $_REQUEST['des'];

    $sql = "INSERT INTO categoria(nombre,descripcion) VALUES ('$nom','$des')";

    mysqli_query($conex, $sql);
    mysqli_close($conex);
    header('Location: /index.php?status=success&message=¡Categoria creada exitosamente!');
  } else {
      header('Location: /index.php?status=error&message=¡Ha ocurido un error!');
    }
?>