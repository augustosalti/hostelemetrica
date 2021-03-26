<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM articles WHERE id = '$id'"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Articulo eliminado correctamente";  


  // $query = "SELECT * FROM menu";
  // $result = mysqli_query($connection, $query);

  // if($result == null) {
  // 	$query = "INSERT into menu(tipo, nombre, descripcion, precio) VALUES ('entrante', 'Nombre de prueba', 'Descripcion de prueba', '99')";
  // 	$result = mysqli_query($connection, $query);
  // }


}
?>
