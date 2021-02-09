<?php

  include('database.php');

  $mes = $_POST['mes'];
  $anio = $_POST['anio'];


  $query = "SELECT * FROM caja WHERE MONTH(fecha) = '$mes' AND YEAR(fecha) = '$anio'";
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

        // FUNCION PARA GENERAR LO HECHO EN 1 DÍA

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
      'dia' => round($dia,2),
      'diferencia' => round($row['diferencia'],2),
      'observaciones' => $row['observaciones'],
      'fondoadejar' => round($row['fondoadejar'],2),
      'sobre' => round($row['sobre'],2)
    );
  }



  $jsonstring = json_encode($json);

  echo $jsonstring;
    

?>
