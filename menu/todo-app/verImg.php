<?php
if(!empty($_GET['id'])){



    include'../../BDD/connectMYSQLI.php';


$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
} else{
    
}

mysqli_set_charset($connection, "utf8");


    //Extraer imagen de la BD mediante GET
    $result = $connection->query("SELECT img FROM articles WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['img']; 
    }else{
        echo "No se pudo cargar la imagen";
    }
}
?>