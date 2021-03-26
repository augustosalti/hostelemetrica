<?php
 $login = $_POST['login'];
?>
<html>
  <head>
    <title>Cierre contable - Caja</title>
    <meta charset="utf-8" />
    <meta name="description" content="Cierre contable - Caja" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body>
    <script src="efectos.js"></script>  
    <script src="parallax.js"></script>  

    <h1 class="titulo">Cierre contable - Caja</h1>
    <div class="content">
            <div class="container divFormulario">
            <form class="formulario" method="POST" action="enviar.php">
                <div class="row">
                    <div class="col-md-12 text-center"><input class="campoRef" style="text-align: center;" type="datetime" name="fechaN" readonly value="<?php echo date("d-m-Y");?>"></div>
                    <div class="col-md-12 separado text-center">
                        <input class="campoRef" readonly value="<?php echo $login ?>" type="text" name="responsableN" id="idResponsable">
                    </div>

                    <div class="col-md-12 separado text-center">
                        <select class="campoRef" name="turnoN" id="idTurno">
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                        </select>
                    </div>

                        <div class="col-6 textoReferencia"><input class="campo titular" type="text" value="Billetes" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="campo titular" value="Cantidad" type="text" readonly tabindex="-1"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="100€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" value="0" type="number" id="100"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="50€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" value="0" type="number" id="50"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="20€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" value="0" type="number" id="20"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="10€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" value="0" type="number" id="10"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="5€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" value="0" type="number" id="5"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="TOTAL" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo separado campoInput" name="billetesN" type="text" value="0" id="billetes" readonly tabindex="-1"></div>


                        <div class="col-6 textoReferencia"><input class="campo titular" type="text" value="Monedas" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="campo titular" value="Cantidad" type="text" readonly tabindex="-1"></div>
                        
                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="2€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" type="number" value="0" id="2"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="1€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBox campo campoInput" autocomplete="off" type="number" value="0" id="1"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="0.5€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" id="05"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="0.2€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" id="02"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="0.1€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" id="01"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="0.05€" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" id="005"></div>

                        <div class="col-6 textoReferencia"><input class="campo" type="text" value="TOTAL" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo separado campoInput" autocomplete="off" type="text" step="any" value="0" name="monedasN" id="monedas" readonly></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Tarjeta" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" value="0" step="any" name="tarjetasN" id="tarjetas"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Gastos" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" value="0" step="any" name="gastosN" id="gastos"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Adelanto" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo separado campoInput" autocomplete="off" type="number" step="any" name="adelantosN" value="0" id="adelantos"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Total" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" name="totalN" id="total" readonly tabindex="-1"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Fondo Inicial" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" name="fondoN" id="fondo"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Ventas" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDecimal campo campoInput" autocomplete="off" type="number" step="any" value="0" name="ventasN" id="ventas"></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Dif +/-" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDiferencia campo separado campoInput" autocomplete="off" readonly value="0" name="diferenciaN" type="text" id="diferencia" tabindex="-1"></div>

                        <div class="col-xs-12 col-md-12 text-center"><input class="campo titular xmax" type="text" value="Observaciones" readonly tabindex="-1"></div>
                        <div class="col-xs-12 col-md-12 text-center divTextArea"><textarea class="separado campoInput campoTextArea" autocomplete="off" type="textarea" name="observacionesN" id="observaciones" rows="20" cols="100"></textarea></div>

                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Sobre" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDiferencia campo separado campoInput" autocomplete="off" value="0" type="number" step="any" name="sobreN" id="sobre"></div>
                        
                        <div class="col-6 textoReferencia"><input class="campo titular max" type="text" value="Fondo" readonly tabindex="-1"></div>
                        <div class="col-6 divTextbox"><input class="textBoxDiferencia campo campoInput" autocomplete="off" value="0" type="number" step="any" name="fondoDejarN" id="fondoDejar"></div>

                    <!-- <div class="divBoton "><input class="boton" type="submit" value="enviar" id="enviarBtn"/></div> -->
                    <div class="divBoton "><input type="image" class="botonSubmit ancho m-auto text-center" src="img/botonSubmit.png" id="enviarBtn"></input></div>
                    
                    </form>
                </div>  
                </form>
            </div>
            <div class="sticky"><a href="https://api.whatsapp.com/send?phone=34670214272&text=Consulta%20por%20cierre%20contable:%20" target="_blank"><img src="img/boton-config.png" width="60px"></a></div>
            
      
    </div>
  </body>
</html>