<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database = "productos";

// $servername = "localhost";
// $username = "nuttech_nicolas";
// $password = "Jk9;VN}^J;xh";
// $database = "nuttech_cajaddl";

$conexion = new PDO('mysql:host=localhost;dbname=productos', 'root', 'root');
$conexion->exec('SET NAMES utf8');


?>

