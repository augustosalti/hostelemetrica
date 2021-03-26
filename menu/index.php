<html>
  <head>
    <title>Menu de DaMammaBistrò</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Menu" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    <div class="content" id="content">
      
      <header>
      <section class="menu">
        <!-- MENU CHICO --> 
        <div class="sticky topnav" id="myTopnav">
          <a href="#content" class="active">Inicio</a>
          <!-- <a href="#content" class="active"><img class="logotipo" src="img/logotipo.png"></a> -->
          <a href="#idDesayunos" onclick="myFunction()">Desayunos</a>
          <a href="#idCafes" onclick="myFunction()">Cafes</a>
          <a href="#idBolleria" onclick="myFunction()">Bollería</a>
          <a href="#idMenus" onclick="myFunction()">Menús</a>
          <a href="#idBocadillos" onclick="myFunction()">Bocadillos </a>
          <a href="#idTapas" onclick="myFunction()">Tapas</a>
          <a href="#idEnsaladas" onclick="myFunction()">Ensaladas</a>
          <a href="#idBebidas" onclick="myFunction()">Bebidas</a>
          <a href="#idCervezas" onclick="myFunction()">Cervezas</a>
          <a href="#idVinos" onclick="myFunction()">Vinos</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
          }
        </script>
        
        <!-- FIN MENU CHICO --> 
        <div class="encabezado">
          <h2 class="text-center text-white pt-5 tituloPrincipal">BIENVENIDOS</h1>
          <div class="logo">
            <img class="imgLogo" id="idLogo" src="img/logo.png" width="100%">
          </div>
        </div>
        <div class="container redes">
          <div class="row fondo">
            <div class="col-md-6 col-sm-6 text-left fondo"><br><p class="horario AmericanTypewriter fondo">07 AM - 05 PM</p></div>
            <div class="col-md-6 col-sm-12 redes fondo"><a href="https://www.instagram.com/damammabistro/"><img class="iconoRedes" src="img/instagram-icon.png"></a><a href="https://www.facebook.com/DaMammaBistro"><img class="iconoRedes" src="img/facebook-icon.png"></a></div>
          </div>
        </div>
      </header>

        <!-- ------------------------------------------------- -->

      <section class="menu AmericanTypewriter" id="content">

        <div>
          <h2 class="tituloMenu"> NUESTRO MENÚ </h2>
        </div>

        <hr class="linea">
        <!-- ------------------FOR EACH QUE MUESTRA LA BDD--------------- -->
        <?php
          include'../BDD/connectMYSQLI.php';
          $resultados1 = $connection->query("SELECT DISTINCT(categoria) FROM articles");
          foreach ($resultados1 as $fila1) {
        ?> 
        <div class="entradas">
          <div class="container cuadros">
            <div class="titulo" id="id<?php echo ucfirst($fila1['categoria']) ?>"><?php echo strtoupper($fila1['categoria']) ?></div>
            <?php
              $categoria = $fila1['categoria'];
              include'../BDD/connectMYSQLI.php';
              $resultados = $connection->query("SELECT * FROM articles WHERE categoria = '$categoria'");
              foreach ($resultados as $fila) {
            ?> 

            <script>
              function muestra_oculta(id){
              if (document.getElementById){ //se obtiene el id
              var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
              el.style.display = (el.style.display == 'block') ? 'none' : 'block'; //damos un atributo display:none que oculta el div
              }
              }
              window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
              /*muestra_oculta('contenido'); "contenido_a_mostrar" es el nombre que le dimos al DIV */
              }
            </script>
              <div class="row">
                <div class="col-md-10 col-sm-12">
                  <div class="col-sm-12 nombre"><a style='cursor: pointer;' onClick="muestra_oculta('<?php echo strtoupper($fila['nombre']) ?>')"><?php echo strtoupper($fila['nombre']) ?></a></div>
                  <div class="col-sm-12 descripcion"><?php echo ucfirst(strtolower($fila['descripcion'])) ?><p class="parrafoMuerto">         </p><hr class="lineaPrecio"></div>
                  <?php
                    if (($fila['img']) != null){
                  ?>
                  <div class="col-sm-12 imagen" id="<?php echo strtoupper($fila['nombre']) ?>">
                    <img class="imagenId" src="verImg.php?id=<?php echo $fila['id'] ?>" width=300px onError="this.style.display = 'none';"></img>
                  </div>
                  <?php
                  }
                  ?>
                  
                  <!-- ------------------ALERGENOS--------------- -->
                  
                  <div class="col-sm-12 alergenos">
                  <?php
                      if($fila['g'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/g.png" alt="Gluten">
                        <?php
                      }
                      if($fila['c'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/c.png" alt="Crustaseos">
                        <?php
                      }
                      if($fila['h'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/h.png" alt="Huevos">
                        <?php
                      }
                      if($fila['p'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/p.png" alt="Pescado">
                        <?php
                      }
                      if($fila['cc'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/cc.png" alt="Cacahuetes">
                        <?php
                      }
                      if($fila['s'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/s.png" alt="Soja">
                        <?php
                      }
                      if($fila['l'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/l.png" alt="Lácteos">
                        <?php
                      }
                      if($fila['f'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/f.png" alt="Frutos Secos">
                        <?php
                      }
                      if($fila['a'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/a.png" alt="Apio">
                        <?php
                      }
                      if($fila['mo'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/mo.png" alt="Mostaza">
                        <?php
                      }
                      if($fila['gs'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/gs.png" alt="Granos de Sésamo">
                        <?php
                      }
                      if($fila['d'] == 1){
                        ?>
                          <img class="imgAlergeno" src="img/icons/d.png" alt="D">
                        <?php
                      }
                  ?>

                  </div>

                    <!-- ------------------ FIN ALERGENOS--------------- -->

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
        <?php
              }
        ?>

        <hr class="linea">
      </section>
    
      <footer class="text-center">
        <div class="footer"><p>Copyright © 2021 Todos los Derechos Reservados | HOSTELEMETRICA</p></div>
      </footer>
    </div>  

  </body>
</html>