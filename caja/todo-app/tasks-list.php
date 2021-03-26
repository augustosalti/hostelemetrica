<?php

  include('database.php');
  $query = "SELECT * from caja WHERE MONTH(fecha) = MONTH(CURDATE()) ";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  $bandera = 0;
  $dia = 0;
  $diaprovisorio = 0;
  $turno = '';
  while($row = mysqli_fetch_array($result)) {


    if($bandera == 0 && $row['turno'] == 'Mañana' ){
      $diaprovisorio = round($row['venta'],2);
      $bandera = 1;
      $dia = 0;
      $turno = $row['turno'];
    }else
    if($bandera == 1 && $turno != $row['turno']){
      $dia = $diaprovisorio + round($row['venta'],2);
      $bandera = 0;
      $turno = '';
    } else{
      $dia = 0;
    }


    $json[] = array(
      'id' => $row['id'],
      'fecha' => $row['fecha'],
      'turno' => $row['turno'],
      'responsable' => $row['responsable'],
      'efectivo' => round($row['efectivo'],2),
      'tarjeta' => round($row['tarjeta'],2),
      'gastos' => round($row['gastos'],2),
      'adelantos' => round($row['adelantos'],2),
      'fondo' => round($row['fondo'],2),
      'venta' => round($row['venta'],2),
      'dia' => $dia,
      'diferencia' => round($row['diferencia'],2),
      'observaciones' => $row['observaciones'],
      'fondoadejar' => round($row['fondoadejar'],2),
      'sobre' => round($row['sobre'],2)
    );
  }


  $jsonstring = json_encode($json);

  echo $jsonstring;
    

?>
