<?php
include'../../BDD/connectMYSQLI.php';


// $connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
} else{
	
}

mysqli_set_charset($connection, "utf8");

?>

