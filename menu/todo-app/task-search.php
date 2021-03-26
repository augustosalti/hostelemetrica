<?php

// $connection = mysqli_connect(
//   'localhost', 'root', 'root', 'productos'
// );
include('database.php');

$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM articles WHERE nombre LIKE '$search%'";
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
      'mostrar' => $row['mostrar'],
      'categoria' => $row['categoria'],
      'precio' => $row['precio'],
      'costo' => $row['costo'],
      'proveedor' => $row['proveedor'],
      'g' => $row['g'],
      'c' => $row['c'],
      'h' => $row['h'],
      'p' => $row['p'],
      'cc' => $row['cc'],
      's' => $row['s'],
      'l' => $row['l'],
      'f' => $row['f'],
      'a' => $row['a'],
      'm' => $row['m'],
      'gs' => $row['gs'],
      'd' => $row['d'],
      'mo' => $row['mo'],
      'al' => $row['al'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>
