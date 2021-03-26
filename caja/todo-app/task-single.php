<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($connection, $_POST['id']);

  $query = "SELECT * from caja WHERE id = {$id}";

  $result = mysqli_query($connection, $query);
  if(!result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['id'],
      'fecha' => $row['fecha'],
      'turno' => $row['turno'],
      'responsable' => $row['responsable'],
      'efectivo' => $row['efectivo'],
      'tarjeta' => $row['tarjeta'],
      'gastos' => $row['gastos'],
      'adelantos' => $row['adelantos'],
      'fondo' => $row['fondo'],
      'venta' => $row['venta'],
      'diferencia' => $row['diferencia'],
      'observaciones' => $row['observaciones'],
      'fondoadejar' => $row['fondoadejar'],
      'sobre' => $row['sobre']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>
