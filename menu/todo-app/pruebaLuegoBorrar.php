<?php

//Convertimos la información de la imagen en binario para insertarla en la BBDD
	$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	//Nombre del archivo
	$nombreArchivo = $_FILES['imagen']['name'];

	//Extensiones permitidas
	$extensiones = array('jpg', 'jpeg', 'gif', 'png', 'bmp');

	//Obtenemos la extensión (en minúsculas) para poder comparar
	$extension = strtolower(end(explode('.', $nombreArchivo)));
	
	//Verificamos que sea una extensión permitida, si no lo es mostramos un mensaje de error
	if(!in_array($extension, $extensiones)) {
		die( 'Sólo se permiten archivos con las siguientes extensiones: '.implode(', ', $extensiones) );
	} else {
		//Si la extensión es correcta, procedemos a comprobar el tamaño del archivo subido
		//Y definimos el máximo que se puede subir
		//Por defecto el máximo es de 2 MB, pero se puede aumentar desde el .htaccess o en la directiva 'upload_max_filesize' en el php.ini

		$tamañoArchivo = $_FILES['imagen']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoKB = round(intval(strval( $tamañoArchivo / 1024 ))); //Pasamos el tamaño del archivo a KB

		$tamañoMaximoKB = "2048"; //Tamaño máximo expresado en KB
		$tamañoMaximoBytes = $tamañoMaximoKB * 1024; // -> 2097152 Bytes -> 2 MB

		//Comprobamos el tamaño del archivo, y mostramos un mensaje si es mayor al tamaño expresado en Bytes
		if($tamañoArchivo > $tamañoMaximoBytes) {
			die( "El archivo ".$nombreArchivo." es demasiado grande. El tamaño máximo del archivo es de ".$tamañoMaximoKB."Kb." );
		} else {
			//Si el tamaño es correcto, subimos los datos
			$consulta = "INSERT INTO mmv002 (titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagenBinaria')";

			//Hacemos la inserción, y si es correcta, se procede
			if(mysqli_query($conexion, $consulta)) {
				//Reiniciamos los inputs
				echo '<script>
$("#enviarimagenes input,textarea").each(function(index) {
	$(this).val("");
});
</script>';
				//Cerramos la conexión con MySQL
				mysqli_close($conexion);
				//Mostramos un mensaje
				die( "El archivo con el nombre ".$nombreArchivo." fue subido. Su peso es de ".$tamañoArchivoKB." KB." );
			} else {
				//Si hay algún error con la inserción, se muestra un mensaje
				die( "Parece que ha habido un error. Recargue la página e inténtelo nuevamente." );
			};

		};//Fin condicional tamaño archivo

	};//Fin condicional extensiones

};//Fin condicional para saber si todos los campos necesarios están completos
?>