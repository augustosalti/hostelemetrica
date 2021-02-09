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
    <h1 class="titulo">Cierre contable - Caja</h1>
    <div class="content">
            <div class="container divFormulario">
            <form class="formulario" method="POST" action="enviar.php">
                <div class="row">
                    <div class="col-md-12 separado"><input style="text-align: center;" type="datetime" name="fechaN" readonly value="<?php echo date("d-m-Y");?>"></div>
                    <div class="col-md-12 separado">
                        <!-- <select name="responsableN" id="idResponsable">
                            <option>Anto</option>
                            <option>Kata</option>
                            <option>Alba</option>
                            <option>Adriana</option>
                        </select> -->
                        <input readonly value="<?php echo $login ?>" type="text" name="responsableN" id="idResponsable">
                    </div>

                    <div class="col-md-12 separado">
                        <select name="turnoN" id="idTurno">
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                        </select>
                    </div>

                    <div class="col-6 textoReferencia">100</div>
                    <div class="col-6 divTextbox"><input class="textBox" value="0" type="text" id="100"></div>

                    <div class="col-6 textoReferencia">50</div>
                    <div class="col-6 divTextbox"><input class="textBox" value="0" type="text" id="50"></div>

                    <div class="col-6 textoReferencia">20</div>
                    <div class="col-6 divTextbox"><input class="textBox" value="0" type="text" id="20"></div>

                    <div class="col-6 textoReferencia">10</div>
                    <div class="col-6 divTextbox"><input class="textBox" value="0" type="text" id="10"></div>

                    <div class="col-6 textoReferencia">5</div>
                    <div class="col-6 divTextbox"><input class="textBox" value="0" type="text" id="5"></div>

                    <div class="col-6 textoReferencia">TOTAL BILLETES</div>
                    <div class="col-6 divTextbox"><input class="textBox separado" name="billetesN" type="text" value="0" id="billetes" readonly></div>

                    <div class="col-6 textoReferencia">2</div>
                    <div class="col-6 divTextbox"><input class="textBox" type="text" value="0" id="2"></div>

                    <div class="col-6 textoReferencia">1</div>
                    <div class="col-6 divTextbox"><input class="textBox" type="text" value="0" id="1"></div>

                    <div class="col-6 textoReferencia">0,5</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" id="05"></div>

                    <div class="col-6 textoReferencia">0,2</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" id="02"></div>

                    <div class="col-6 textoReferencia">0,1</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" id="01"></div>

                    <div class="col-6 textoReferencia">0,05</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" id="005"></div>

                    <div class="col-6 textoReferencia">TOTAL MONEDAS</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal separado" type="text" value="0" name="monedasN" id="monedas" readonly></div>

                    <div class="col-6 textoReferencia">TARJETAS</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" name="tarjetasN" id="tarjetas"></div>

                    <div class="col-6 textoReferencia">GASTOS</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" name="gastosN" id="gastos"></div>

                    <div class="col-6 textoReferencia">ADELANTOS</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal separado" type="text" name="adelantosN" value="0" id="adelantos"></div>

                    <div class="col-6 textoReferencia">TOTAL</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" name="totalN" id="total" readonly></div>

                    <div class="col-6 textoReferencia">FONDO</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" name="fondoN" id="fondo"></div>

                    <div class="col-6 textoReferencia">VENTAS</div>
                    <div class="col-6 divTextbox"><input class="textBoxDecimal" type="text" value="0" name="ventasN" id="ventas"></div>

                    <div class="col-6 textoReferencia">DIFERENCIA +/-</div>
                    <div class="col-6 divTextbox"><input class="textBoxDiferencia separado" readonly value="0" name="diferenciaN" type="text" id="diferencia"></div>

                    <div class="col-xs-12 col-md-6 textoAreaReferencia">OBSERVACIONES</div>
                    <div class="col-xs-12 col-md-6 divTextArea"><textarea class="textArea separado" type="textarea" name="observacionesN" id="observaciones" rows="10" cols="50"></textarea></div>

                    <div class="col-6 textoReferencia">FONDO A DEJAR</div>
                    <div class="col-6 divTextbox"><input class="textBoxDiferencia" value="0" type="text" name="fondoDejarN" id="fondoDejar"></div>

                    <div class="col-6 textoReferencia">SOBRE</div>
                    <div class="col-6 divTextbox"><input class="textBoxDiferencia separado" value="0" type="text" name="sobreN" id="sobre"></div>

                    <div class="divBoton "><input class="boton" type="submit" value="enviar" id="enviarBtn"/></div>
                    </form>
                </div>  
                </form>
            </div>
        
      
    </div>
  </body>
</html>