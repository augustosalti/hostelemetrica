<?php

  include('database.php');

  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  
  $query = "SELECT SUM(efectivo) as 'suma_efectivo', SUM(tarjeta) as 'suma_tarjeta', SUM(gastos) as 'suma_gastos', sum(adelantos) as 'suma_adelantos', SUM(fondo) as 'suma_fondo', SUM(sobre) as 'suma_sobre', SUM(diferencia) as 'suma_diferencia', SUM(venta) as 'suma_venta' FROM caja WHERE MONTH(fecha) = '$mes' AND YEAR(fecha) = '$anio'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }



  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'efectivo' => round($row['suma_efectivo'],2),
      'tarjeta' => round($row['suma_tarjeta'],2),
      'gastos' => round($row['suma_gastos'],2),
      'adelantos' => round($row['suma_adelantos'],2),
      'fondo' => round($row['suma_fondo'],2),
      'venta' => round($row['suma_venta'],2),
      'diferencia' => round($row['suma_diferencia'],2),
      'sobre' => round($row['suma_sobre'],2)
    );
  }


  $jsonstring = json_encode($json);

  echo $jsonstring;
    

?>