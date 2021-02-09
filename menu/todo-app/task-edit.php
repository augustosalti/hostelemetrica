<?php

include('database.php');

if(isset($_POST['id'])) {
  $task_name = $_POST['name']; 
  $task_description = $_POST['description'];
  $task_tipo = $_POST['tipo'];
  $task_precio = $_POST['price'];
  $id = $_POST['id'];
  $query = "UPDATE menu SET nombre = '$task_name', descripcion = '$task_description', tipo = '$task_tipo', precio = '$task_precio' WHERE id = '$id'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Update Successfully";  

}

?>
