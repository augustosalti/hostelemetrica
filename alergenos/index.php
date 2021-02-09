<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/estilos.css">
    <!-- <link rel="stylesheet" href="CSS/checks.css"> -->
    <!-- <link rel="stylesheet" href="CSS/loader.css"> -->
  </head>
  <body>
    <!-- <script type="text/javascript" src="JS/loader.js"></script> -->
    <script type="text/javascript" src="JS/efectos.js"></script>
    <script type="text/javascript" src="JS/changeState.js"></script>
    <noscript>Necesitas de JavaScript para visualizar la web de manera correcta</noscript>

<!--     <div class="loading show">
        <div class="spin"></div>
    </div> -->

    <div class="divCuestionario" id="cuestionario">
      <div class="container divAlergenos">

          <div class="seleccion1 row col-md-12" id="seleccion1"> 

            <h3 class="col-md-12 fuenteFrench">¿Eres alérgico a alguno de estos ingredientes?</h3>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenG" src="IMG/icons/g.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">GLUTEN</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenH" src="IMG/icons/h.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">HUEVOS</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenP" src="IMG/icons/p.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">PESCADO</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenCC" src="IMG/icons/cc.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">CACAHUETES</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenS" src="IMG/icons/s.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">SOJA</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenL" src="IMG/icons/l.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">LACTEOS</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenFC" src="IMG/icons/fc.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">FRUTOS SECOS</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenA" src="IMG/icons/a.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">APIO</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenM" src="IMG/icons/m.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">MOSTAZA</span></div>
                </div>

                <div class="row col-md-4 col-sm-6 boxImagen">
                  <div class="col-md-12"><img class="iconoImagen" id="imagenGS" src="IMG/icons/gs.png"></div>
                  <div class="col-md-12 nombreAlergeno"><span class="nombreAlergeno">GRANOS DE SÉSAMO</span></div>
                </div>


                <div class="divBoton w-100">
                  <p class="boton fuenteFrench" onclick="siguiente()">SIGUIENTE</p>
                </div>
            </div>

          <div class="seleccion2" id="seleccion2" style="display: none; padding-top: 0px;">
            <h3 class="fuenteFrench">¿Qué te apetece?</h3>
            <div class="col-md-12 row center-block formulario w-50 p-0">
              <div class="col-md-6 col-sm-12 p-0">
                <div class="col-md-12 p-0"><img class="iconoImagen" id="dulceID" src="IMG/icons/dulce.png"></div>
                <div class="nombreAlergeno p-0"><span class="nombreDulce">DULCE</span></div>
              </div>

              <div class="col-md-6 col-sm-12 p-0 divSalado">
                <div class="col-md-12 p-0"><img class="iconoImagen" id="saladoID" src="IMG/icons/salado.png"></div>
                <div class="nombreAlergeno p-0"><span class="nombreSalado">SALADO</span></div>
              </div>
            </div>

            <div class="formulario">
            <form action='listar.php'  method="post" id="formulario">
              <div style="display: none;">
                <input type="checkbox" id="checkboxGlutenID" name="g">
                <input type="checkbox" id="checkboxCrustaseosID" name="c">
                <input type="checkbox" id="checkboxHuevosID" name="h">
                <input type="checkbox" id="checkboxPescadosID" name="p">
                <input type="checkbox" id="checkboxCacahuetesID" name="cc">
                <input type="checkbox" id="checkboxSojaID" name="s">
                <input type="checkbox" id="checkboxLacteosID" name="l">
                <input type="checkbox" id="checkboxFrutosSecosID" name="fc">
                <input type="checkbox" id="checkboxApioID" name="a">
                <input type="checkbox" id="checkboxMostazaID" name="m">
                <input type="checkbox" id="checkboxSesamoID" name="gs">
                <input type="checkbox" id="checkboxAzufreID" name="d">
                <input type="checkbox" id="checkboxMoluscosID" name="mo">
                <input type="checkbox" id="checkboxAltramusesID" name="al">

                <input type="checkbox" id="checkboxDulceID" name="dulce">
                <input type="checkbox" id="checkboxSaladoID" name="salado">
              </div>

                <div class="container">
                  <div class="row mx-auto">
                    <div class="col-md-12 divBoton">
                      <input type="button" class="boton" name="volver" onclick="atras()" value="VOLVER">
                    </div>
                    <div class="col-md-12 divBoton">
                      <button class="boton" name="enviar" type="submit" id="botonForm">SIGUIENTE</button>
                    </div>
                  </div>
                </div>
        </form>
      </div>
      </div>
    </div>
  </body>
</html>
