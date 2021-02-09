<?php

  include('database.php');
  $query = "SELECT * from articles";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
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


  /*if(!$result = mysqli_query($connection, $sql)) die();*/

/*$menu = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['id'];
    $nombre=$row['nombre'];
    $descripcion=$row['descripcion'];
    $tipo=$row['tipo'];
    $precio=$row['precio'];
    

    $menu[] = array('id'=> $id, 'nombre'=> $nombre, 'descripcion'=> $descripcion, 'tipo'=> $tipo,
                        'precio'=> $precio);

}
    
//desconectamos la base de datos
$close = mysqli_close($connection) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($menu);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
    

?>
