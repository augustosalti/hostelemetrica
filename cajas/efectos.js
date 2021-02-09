
$(document).ready(function(){
    $('.textBox').on('input', function () { 
        this.value = this.value.replace(/[^0-9]/g,'');
    });
    $('.textBoxDecimal').on('input', function () { 
        this.value = this.value.replace(/[^0-9-.]/g,'');
    });
    $('.textBoxDiferencia').on('input', function () { 
        //this.value = this.value.replace(/[^0-9-+-.-]/g,'');
        this.value = this.value.replace(/[^0-9-.]/g,'');
    });

    function valor0(){
        if ($("#100").val() == ''){
            $("#100").val("0")
        }
        if ($("#50").val() == ''){
            $("#50").val("0")
        }
        if ($("#20").val() == ''){
            $("#20").val("0")
        }
        if ($("#10").val() == ''){
            $("#10").val("0")
        }
        if ($("#5").val() == ''){
            $("#5").val("0")
        }
    }

    function valor0Monedas(){
        if ($("#2").val() == ''){
            $("#2").val("0")
        }
        if ($("#1").val() == ''){
            $("#1").val("0")
        }
        if ($("#05").val() == ''){
            $("#05").val("0")
        }
        if ($("#02").val() == ''){
            $("#02").val("0")
        }
        if ($("#01").val() == ''){
            $("#01").val("0")
        }
        if ($("#005").val() == ''){
            $("#005").val("0")
        }
    }

    function valor0Resto(){
        if ($("#tarjetas").val() == ''){
            $("#tarjetas").val("0")
        }
        if ($("#gastos").val() == ''){
            $("#gastos").val("0")
        }
        if ($("#adelantos").val() == ''){
            $("#adelantos").val("0")
        }
        if ($("#fondo").val() == ''){
            $("#fondo").val("0")
        }
        if ($("#ventas").val() == ''){
            $("#ventas").val("0")
        }
        if ($("#diferencia").val() == 'NaN'){
            $("#diferencia").val("0")
        }
    }

    function sumaTotal(){
        var sumaTotal = 0.0;
        sumaTotal = parseFloat($("#billetes").val()) + parseFloat($("#monedas").val()) + parseFloat($("#tarjetas").val()) - parseFloat($("#gastos").val()) - parseFloat($("#adelantos").val());
        $("#total").val(sumaTotal) - parseFloat($("#ventas").val());
    }

    function diferencia(){
        var diferencia = 0.0;
        diferencia = parseFloat($("#billetes").val()) + parseFloat($("#monedas").val()) + parseFloat($("#tarjetas").val()) - parseFloat($("#fondo").val()) - parseFloat($("#ventas").val());
        diferencia = diferencia.toFixed(2);
        $("#diferencia").val(diferencia);
    }
  



    $("#100").keyup(function(){
        valor0();
        var sumaBilletes = 0;
        sumaBilletes = parseInt($("#100").val()) + parseInt($("#50").val()) + parseInt($("#20").val()) + parseInt($("#10").val()) + parseInt($("#5").val());
        $("#billetes").val(sumaBilletes);
        sumaTotal();
        diferencia();//
    });

	$("#50").keyup(function(){
        valor0();
        var sumaBilletes = 0;
        sumaBilletes = parseInt($("#100").val()) + parseInt($("#50").val()) + parseInt($("#20").val()) + parseInt($("#10").val()) + parseInt($("#5").val());
        $("#billetes").val(sumaBilletes);
        sumaTotal();
        diferencia();//
    });

    $("#20").keyup(function(){
        valor0();
        var sumaBilletes = 0;
        sumaBilletes = parseInt($("#100").val()) + parseInt($("#50").val()) + parseInt($("#20").val()) + parseInt($("#10").val()) + parseInt($("#5").val());
        $("#billetes").val(sumaBilletes);
        sumaTotal();
        diferencia();//
    });

    $("#10").keyup(function(){
        valor0();
        var sumaBilletes = 0;
        sumaBilletes = parseInt($("#100").val()) + parseInt($("#50").val()) + parseInt($("#20").val()) + parseInt($("#10").val()) + parseInt($("#5").val());
        $("#billetes").val(sumaBilletes);
        sumaTotal();
        diferencia();//
    });

    $("#5").keyup(function(){
        valor0();
        var sumaBilletes = 0;
        sumaBilletes = parseInt($("#100").val()) + parseInt($("#50").val()) + parseInt($("#20").val()) + parseInt($("#10").val()) + parseInt($("#5").val());
        $("#billetes").val(sumaBilletes);
        sumaTotal();
        diferencia();//
    });




    $("#2").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0.0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });

    $("#1").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });

    $("#05").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });

    $("#02").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });

    $("#01").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });

    $("#005").keyup(function(){
        valor0Monedas();
        var sumaMonedas = 0;
        sumaMonedas = parseFloat($("#2").val()) + parseFloat($("#1").val()) + parseFloat($("#05").val()) + parseFloat($("#02").val()) + parseFloat($("#01").val()) +  parseFloat($("#005").val());
        $("#monedas").val(sumaMonedas);
        sumaTotal();
        diferencia();//
    });


    $("#tarjetas").keyup(function(){
        valor0Resto();
        sumaTotal();
        diferencia();//
    });
    $("#gastos").keyup(function(){
        valor0Resto();
        sumaTotal();
        diferencia();//
    });
    $("#adelantos").keyup(function(){
        valor0Resto();
        sumaTotal();
        diferencia();//
    });


    $("#fondo").keyup(function(){
        valor0Resto();
        diferencia();
    });
    $("#ventas").keyup(function(){
        valor0Resto();
        diferencia();
    });

    $(function comprobarHora(){
      var tiempo = new Date();
      var hora = tiempo.getHours();


      // VALOR TOTAL NUNCA 0

        if ($("#total").val() == 'NaN' || $("#total").val() == '0'){
            valor0Resto();
            sumaTotal();
            diferencia();//
        }

      // RESTRICCION POR HORARIO

      if (parseInt(hora) >= 8 && parseInt(hora) <= 17){
        $("#idTurno option[value='Mañana']").attr("selected", true);
      }else if (parseInt(hora) >= 18 && parseInt(hora) <= 23){
        $("#idTurno option[value='Tarde']").attr("selected", true);
      } else{
            // alert('Horario no autorizado para realizar el cierre contable');
            // $(location).attr('href','http://www.google.com');
        }
    });

});