<html>
  <head>
    <title>Menu de restaurante</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Menu" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
@font-face {
  font-family: 'AmericanTypewriter';
  src: local('AmericanTypewriter'),
       local('AmericanTypewriter Regular'),
       local('AmericanTypewriter-Regular'),
       url(fonts/AmericanTypewriter.ttc) format('ttc');
}

.AmericanTypewriter {
    font-family: 'AmericanTypewriter';
    letter-spacing: 2px;
}
</style> 
  </head>
  <body>
    <div class="content">
      
      <header>
        <div class="encabezado">
          <h2 class="text-center text-white pt-5 tituloPrincipal">BIENVENIDOS</h1>
          <div class="logo">
            <img class="imgLogo" src="img/logo.png" width="100%">
          </div>
        </div>
        <div class="container redes">
          <div class="row fondo">
            <div class="col-md-6 col-sm-6 text-left fondo"><br><p class="horario AmericanTypewriter fondo">11 AM - 11 PM</p></div>
            <div class="col-md-6 col-sm-12 redes fondo"><a href="https://www.instagram.com"><img class="iconoRedes" src="img/instagram-icon.png"></a><a href="https://www.facebook.com"><img class="iconoRedes" src="img/facebook-icon.png"></a></div>
          </div>
        </div>
      </header>

        <!-- ------------------------------------------------- -->

      <section class="menu AmericanTypewriter" id="content">

        <div>
          <h2 class="tituloMenu"> MENÚ MEDITERRANEO </h2>
        </div>

        <hr class="linea">

        <!-- ------------------------------------------------- -->
        <div class="entradas">
          <div class="container cuadros">
            <div class="titulo">ENTRANTES PARA COMPARTIR</div>
            <?php
              include'../BDD/connectPDO.php';
              $resultados = $conexion->query("SELECT * FROM menu WHERE tipo = 'entrante'");
              foreach ($resultados as $fila) {
            ?> 
            <div class="row">
              <div class="col-md-10 col-sm-12">
                <div class="col-sm-12 nombre"><?php echo strtoupper($fila['nombre']) ?></div>
                <div class="col-sm-12 descripcion"><?php echo ucfirst(strtolower($fila['descripcion'])) ?><p class="parrafoMuerto">         </p><hr class="lineaPrecio"></div>
              </div>
              <div class="col-md-2 col-sm-12">
                <div class="divPrecio">
                  <p class="estilosPrecio"><?php echo strtoupper($fila['precio'])?>€</p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>

            <hr class="linea">


        <!-- ------------------------------------------------- -->

        <div class="principal">
          <div class="container cuadros">
            <div class="titulo">PLATOS PRINCIPALES</div>
            <?php
              include'../BDD/connectPDO.php';
              $resultados = $conexion->query("SELECT * FROM menu WHERE tipo = 'principal'");
              foreach ($resultados as $fila) {
            ?> 
            <div class="row">
              <div class="col-md-10">
                <div class="col-sm-12 nombre"><?php echo strtoupper($fila['nombre']) ?></div>
                <div class="col-sm-12 descripcion"><?php echo ucfirst(strtolower($fila['descripcion'])) ?><p class="parrafoMuerto">         </p><hr class="lineaPrecio"></div>
              </div>
              <div class="col-md-2">
                <div class="divPrecio">
                  <p class="estilosPrecio"><?php echo strtoupper($fila['precio'])?>€</p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>

        <hr class="linea">

        <!-- ------------------------------------------------- -->

        <div class="bebida">
          <div class="container cuadros">
            <div class="titulo">BEBIDAS</div>
            <?php
              include'../BDD/connectPDO.php';
              $resultados = $conexion->query("SELECT * FROM menu WHERE tipo = 'bebida'");
              foreach ($resultados as $fila) {
            ?> 
            <div class="row">
              <div class="col-md-10">
                <div class="col-sm-12 nombre"><?php echo strtoupper($fila['nombre']) ?></div>
                <div class="col-sm-12 descripcion"><?php echo ucfirst(strtolower($fila['descripcion'])) ?><p class="parrafoMuerto">         </p><hr class="lineaPrecio"></div>
              </div>
              <div class="col-md-2">
                <div class="divPrecio">
                  <p class="estilosPrecio"><?php echo strtoupper($fila['precio'])?>€</p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>

        <hr class="linea">

        <!-- ------------------------------------------------- -->

        <div class="postre">
          <div class="container cuadros">
            <div class="titulo">POSTRES</div>
            <?php
              include'../BDD/connectPDO.php';
              $resultados = $conexion->query("SELECT * FROM menu WHERE tipo = 'postre'");
              foreach ($resultados as $fila) {
            ?> 
            <div class="row">
              <div class="col-md-10">
                <div class="col-sm-12 nombre"><?php echo strtoupper($fila['nombre']) ?></div>
                <div class="col-sm-12 descripcion"><?php echo ucfirst(strtolower($fila['descripcion'])) ?><p class="parrafoMuerto">         </p><hr class="lineaPrecio"></div>
              </div>
              <div class="col-md-2">
                <div class="divPrecio">
                  <p class="estilosPrecio"><?php echo strtoupper($fila['precio'])?>€</p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
          </div>
        </div>



      </section>
    
      <footer class="text-center">
        <div class="footer"><p>Copyright © 2020 Todos los Derechos Reservados | Augusto Salti | Joel Gesualdo</p></div>
      </footer>
    </div>

  </body>
</html>