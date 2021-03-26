<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created by Augusto Salti"
    />
    <title>Alérgenos Dulce de Leche Valencia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Balsamiq+Sans:wght@700&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Dancing+Script&family=Fredericka+the+Great&display=swap" rel="stylesheet">
  </head>
  <body>
    <script type="text/javascript" src="JS/efectos.js"></script>
    <noscript>Necesitas de JavaScript para visualizar la web de manera correcta</noscript>
    <div class="resultados" id="resultado">
      <div class="productos">
        <div class="container">
            <div class="col-md-12">
              <h2 class="fuenteFrench">Nuestros productos que puedes disfrutar</h2>
            </div>                
            <div class="row divProductos">
              <?php

              $a = ' ';

              if(isset($_POST["enviar"]))
              {
              	if(isset($_POST["g"]))
              		$a .= " AND g = '0'";

              	if(isset($_POST["c"]))
              		$a .= " AND c = '0'";
         
             		if(isset($_POST["h"]))
            			$a .= " AND h = '0'";
         
        			  if(isset($_POST["p"]))
            			$a .= " AND p = '0'";

            		if(isset($_POST["s"]))
            			$a .= " AND s = '0'";

            		if(isset($_POST["cc"]))
            			$a .= " AND cc = '0'";

            		if(isset($_POST["l"]))
            			$a .= " AND l = '0'";

            		if(isset($_POST["fc"]))
            			$a .= " AND f = '0'";

            		if(isset($_POST["a"]))
            			$a .= " AND a = '0'";

            		if(isset($_POST["m"]))
            			$a .= " AND m = '0'";

            		if(isset($_POST["gs"]))
            			$a .= " AND gs = '0'";

            		if(isset($_POST["d"]))
            			$a .= " AND d = '0'";

            		if(isset($_POST["mo"]))
            			$a .= " AND mo = '0'";

            		if(isset($_POST["al"]))
            			$a .= " AND al = '0'";


                if (isset($_POST["dulce"]) && isset($_POST["salado"])) {
                  $a .= "";
                } else if(isset($_POST["dulce"]) && !isset($_POST["salado"])){
                  $a .= " AND tipo = 'Dulce'";
                } else if(isset($_POST["salado"]) && !isset($_POST["dulce"])){
                  $a .= " AND tipo = 'Salado'";
                }
				      }

               include'../BDD/connectPDO.php';
               $resultados = $conexion->query("SELECT * FROM articles WHERE mostrar = '1' $a ORDER BY tipo");
               foreach ($resultados as $fila) {
              ?>
              <div class="col-sm-12 col-md-12 col-lg-12 contenedorProducto" style="flex: 200px;">
                <tr>
                  <td><img class="imagenProducto" onerror="this.src='1.jpg'" src="vista.php?id=<?php echo $fila['id']?>"></img></td>
                </tr>
                  
                <tr>
                  <td><p class="nombreProducto"><?php echo strtoupper($fila['nombre']) ?></p></td>
                </tr>
                <tr>
                  <td><p class="descripcionProducto"><?php echo nl2br($fila['descripcion']) ?></p></td>
                </tr>
              </div>

              <?php 
                }
              ?>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>