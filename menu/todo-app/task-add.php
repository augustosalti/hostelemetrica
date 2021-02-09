<?php

  include('database.php');

  if(isset($_POST['name'])) {
    $task_name = $_POST['name'];
    $task_description = $_POST['description'];
    $task_tipo = $_POST['tipo'];
    $task_mostrar = $_POST['mostrar'];
    $task_categoria = $_POST['categoria'];
    $task_price = $_POST['price'];
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

    $image = $_FILES['imgInp']['tmp_name'];

    $imagenBinaria = addslashes(file_get_contents($_FILES['imgInp']['tmp_name']));



  var_dump ($_POST);
  var_dump ($_FILES);






    $query = "INSERT into articles(nombre, descripcion, tipo, mostrar, categoria, precio, costo, proveedor, g, c, h, p, cc, s, l, f, a, m, gs, d, mo, al, img) VALUES ('$task_name', '$task_description', '$task_tipo', '$task_mostrar', '$task_categoria', '$task_price', '$task_costo', '$task_proveedor', '$task_g', '$task_c', '$task_h', '$task_p', '$task_cc', '$task_s', '$task_l', '$task_f', '$task_a', '$task_m', '$task_gs', '$task_d', '$task_mo', '$task_al', '$imagenBinaria')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query Failed.');
    }

    echo "Task Added Successfully";  

  }

?>
