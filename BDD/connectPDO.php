<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database = "productos";

// $servername = "localhost";
// $username = "nuttech_augusto";
// $password = "2i6,t}qbptTr";
// $database = "nuttech_damamma";

$conexion = new PDO('mysql:host=localhost;dbname=$database', '$username', '$password');
$conexion->exec('SET NAMES utf8');


?>

