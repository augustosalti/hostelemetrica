<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $task_fecha = $_POST['fecha']; 
  $task_responsable = $_POST['responsable'];
  $task_turno = $_POST['turno'];
  $task_efectivo = $_POST['efectivo'];
  $task_tarjeta = $_POST['tarjeta'];
  $task_gastos = $_POST['gastos'];
  $task_adelantos = $_POST['adelantos'];
  $task_fondo = $_POST['fondo'];
  $task_venta = $_POST['venta'];
  $task_diferencia = $_POST['diferencia'];
  $task_observaciones = $_POST['observaciones'];
  $task_fondoadejar = $_POST['fondoadejar'];
  $task_sobre = $_POST['sobre'];

  echo $id;

  $query = "UPDATE caja SET responsable = '$task_responsable', turno = '$task_turno', efectivo = '$task_efectivo', tarjeta = '$task_tarjeta', gastos = '$task_gastos', adelantos = '$task_adelantos', fondo = '$task_fondo', venta = '$task_venta', diferencia = '$task_diferencia', fondoadejar = '$task_fondoadejar', sobre = '$task_sobre', observaciones = '$task_observaciones' WHERE id = '$id'";

  // , efectivo = '$task_efectivo', tarjeta = '$task_tarjeta', gastos = '$task_gastos', adelantos = '$task_adelantos', fondo = '$task_fondo', venta = '$task_venta', diferencia = '$task_diferencia', fondoadejar = '$task_fondoadejar', sobre = '$task_sobre' WHERE id = '$id'

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Update Successfully";  

}

?>


