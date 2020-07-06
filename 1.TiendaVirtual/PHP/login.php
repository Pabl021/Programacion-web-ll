<?php
  require('functions.php');
  require_once "conexion.php";


  if($_POST) {
    $username = $_REQUEST['usuario'];
    $password = $_REQUEST['contra'];
    var_dump($username);
    $user = authenticate($username, $password);
    
    if($user) {
     
      session_start();
      $_SESSION['user'] = $user;
      header('Location:admin.php');
    } else {
      header('Location:index.php?status=login');
    }
  }
  
?>