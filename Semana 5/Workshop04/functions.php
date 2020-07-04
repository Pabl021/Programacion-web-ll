<?php
include_once "conexion.php";
/**
 *  Gets a new mysql connection
 */
function getConnection() {
  $connection = new mysqli("localhost","root","","sesiones");
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

/**
 * Get one specific student from the database
 *
 * @id Id of the student
 */
function authenticate($username, $password){
  $conn = getConnection();
  $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND contraseña = '$password'";
  $result = $conn->query($sql);
  
  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_assoc();
}

