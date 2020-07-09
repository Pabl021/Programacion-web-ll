<?php 
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
    <title>Document</title>
</head>
<body>
<h1>cliente </h1>
      <h1> Bienvenido <?php echo $user['nombre'] ?> </h1>
      <a href="/logout.php">Logout</a>    
</body>
</html>