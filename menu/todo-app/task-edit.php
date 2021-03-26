<?php

include('database.php');

if(isset($_POST['id'])) {
  $task_name = $_POST['name']; 
  $task_description = $_POST['description'];
  $task_tipo = $_POST['tipo'];
  $task_precio = $_POST['price'];
  $id = $_POST['id'];

  $task_categoria = $_POST['categoria'];
  $task_mostrar = $_POST['mostrar'];
  $task_costo = $_POST['costo'];
  $task_proveedor = $_POST['proveedor'];
  $task_imagen = $_POST['imgInp'];
  $task_g = $_POST['g'];
  $task_c = $_POST['c'];
  $task_h = $_POST['h'];
  $task_p = $_POST['p'];
  $task_cc = $_POST['cc'];
  $task_s = $_POST['s'];
  $task_l = $_POST['l'];
  $task_f = $_POST['f'];
  $task_a = $_POST['a'];
  $task_m = $_POST['m'];
  $task_gs = $_POST['gs'];
  $task_d = $_POST['d'];
  $task_mo = $_POST['mo'];
  $task_al = $_POST['al'];

  var_dump ($_POST);
  var_dump ($_FILES);


  
  $image = $_FILES['imgInp']['tmp_name'];
  $imagenBinaria = addslashes(file_get_contents($_FILES['imgInp']['tmp_name']));

  if($imagenBinaria == null){
    $query = "UPDATE articles SET al='$task_al',mo ='$task_mo',d ='$task_d',gs='$task_gs',m='$task_m',a='$task_a',f ='$task_f',l = '$task_l',s = '$task_s',cc = '$task_cc',p = '$task_p',h = '$task_h',c = '$task_c',g = '$task_g',mostrar = '$task_mostrar', categoria = '$task_categoria', nombre = '$task_name', descripcion = '$task_description', tipo = '$task_tipo', precio = '$task_precio' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
  } else {
    $query = "UPDATE articles SET al='$task_al',mo ='$task_mo',d ='$task_d',gs='$task_gs',m='$task_m',a='$task_a',f ='$task_f',l = '$task_l',s = '$task_s',cc = '$task_cc',p = '$task_p',h = '$task_h',c = '$task_c',g = '$task_g',mostrar = '$task_mostrar', categoria = '$task_categoria', nombre = '$task_name', descripcion = '$task_description', tipo = '$task_tipo', precio = '$task_precio', img = '$imagenBinaria' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
  }

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Update Successfully";  

}

?>
