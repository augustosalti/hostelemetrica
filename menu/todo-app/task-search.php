<?php

// $connection = mysqli_connect(
//   'localhost', 'root', 'root', 'productos'
// );
include('database.php');

$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM menu WHERE nombre LIKE '$search%'";
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'nombre' => $row['nombre'],
      'descripcion' => $row['descripcion'],
      'tipo' => $row['tipo'],
      'precio' => $row['precio'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>