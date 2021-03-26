<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
$responsable = $_POST['responsableN'];
$fecha = $_POST['fechaN'];
$turno = $_POST['turnoN'];
$billetes = $_POST['billetesN'];
$monedas = $_POST['monedasN'];
$tarjetas = $_POST['tarjetasN'];
$gastos = $_POST['gastosN'];
$adelantos = $_POST['adelantosN'];
$fondo = $_POST['fondoN'];
$ventas = $_POST['ventasN'];
$diferencia = $_POST['diferenciaN'];
$observaciones = $_POST['observacionesN'];
$fondoDejar = $_POST['fondoDejarN'];
$sobre = $_POST['sobreN'];

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "productos";

// // $servername = "localhost";
// // $username = "nuttech_nicolas";
// // $password = "Jk9;VN}^J;xh";
// // $database = "nuttech_cajaddl";

// $connection = new mysqli($servername, $username, $password, $database);
include'../BDD/connectMYSQLI.php';

if ($connection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}else{
    echo "";
}

mysqli_set_charset($conexion, "utf8");

$efectivo = $billetes + $monedas;

$fecha = strtotime($fecha);
$fecha = date('Y-m-d',$fecha);

header("refresh:5;url=https://www.google.com/");

$query = "INSERT into caja(turno, fecha, responsable, efectivo, tarjeta, gastos, adelantos, fondo, venta, diferencia, observaciones, fondoadejar, sobre) VALUES ('$turno', '$fecha', '$responsable', '$efectivo', '$tarjetas', '$gastos', '$adelantos', '$fondo', '$ventas', '$diferencia', '$observaciones', '$fondoDejar', '$sobre')";
$result = mysqli_query($connection, $query);

?>

<html>
  <head>
    <title>Cierre contable - Caja</title>
    <meta charset="utf-8" />
    <meta name="description" content="Cierre contable - Caja" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
  	<div class="divExitoso">
  		<h3 class="mensajeExitoso">Cierre realizado con éxito</h3>
  	</div>
  </body>
  </html>

 <?php
 	$total = $efectivo + $tarjetas;
	$mensaje = 'Cierre de caja realizado por ' . $responsable  . ' turno ' . $turno . ' efectivo: ' . $efectivo . ', tarjeta: ' . $tarjetas . ', TOTAL: ' . $total . ', ' . $observaciones;
	// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
	$mensaje = wordwrap($mensaje, 70, "\r\n");

	// Enviarlo
	mail('damammabistrovalencia@gmail.com', 'Cierre de caja '. $fecha , $mensaje);

  ?>
