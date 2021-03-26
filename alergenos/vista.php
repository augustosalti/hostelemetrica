<?php
if(!empty($_GET['id'])){
    include'../BDD/connectMYSQLI.php';
    
    //Extraer imagen de la BD mediante GET
    $result = $connection->query("SELECT img FROM articles WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['img']; 
    }else{
        echo 'Imagen no existe...';
    }
}
?>