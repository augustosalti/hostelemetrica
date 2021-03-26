<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cierre contable - Caja</title>
    <meta charset="utf-8" />
    <meta name="description" content="Cierre contable - Caja" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/estilosIngreso.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<SCRIPT  language=JavaScript> 
$(document).ready(function(){
$("body").fadeIn(1500);
$('#img').animate({
    opacity: 1,
    marginTop: '-100px'
}, 2000);
});
function go(){
    bandera = 0;
    
if (document.form.password.value=='9999' && document.form.login.value=='Augusto'){ 
        document.form.submit(); 
    } else if
    	(document.form.password.value=='010687' && document.form.login.value=='Daniel'){ 
        document.form.submit(); 
    } else if
    	(document.form.password.value=='140193' && document.form.login.value=='Marco'){ 
        document.form.submit(); 
    } else if
    	(document.form.password.value=='1994' && document.form.login.value=='Kata'){ 
        document.form.submit(); 
    } else if
    	(document.form.password.value=='6080' && document.form.login.value=='Adri'){ 
        document.form.submit(); 
    } else if
    	(document.form.password.value=='administrador' && document.form.login.value=='Nicolas'){ 
        document.form.submit(); 
    }
    else{ 
         alert("Porfavor ingrese, nombre de usuario y contraseña correctos.");
        } 
}
</SCRIPT> 

<div class="imagen">
    <FORM class="mt-5 formClass" name=form method="POST" action="caja.php">

        <div class="container m-auto">
            <div class="imagenLogo">
                <img class="imgBienvenida" id="img" src="img/logo-app.png" alt="Bienvenidos">
            </div>
            <div class="row m-auto">
                <div class="col-12 m-auto text-center mt-5">
                            <select class="ancho inputBox" name="login" value="Usuario">
                            <?php
                                    include'../BDD/connectMYSQLI.php';
                                    $query = "SELECT DISTINCTROW variante FROM config WHERE tipos = 'usuarios'";
                                    $result = mysqli_query($connection, $query);
                                    while($row = mysqli_fetch_array($result)) {
                                        ?><option value="<?php echo ucfirst($row['variante']) ?>"><?php echo ucfirst($row['variante'])?></option>
                                        <?php
                                    }
                                
                                    ?>
                            </select>
                            <i></i>
                </div>
                <div class="col-12 m-auto text-center mt-5"><input class="inputBox ancho" type=password name="password"> </div>
                <!-- <div class="col-12 m-auto text-center mt-5"><input class="m-auto text-center ancho" src="img/botonSubmit.png" onclick=go()></INPUT></div> -->
                <div class="col-12 m-auto text-center mt-5"><img class="botonSubmit ancho m-auto text-center" src="img/botonSubmit.png" onclick=go()></input></div>

            </div>
        </div>
    </FORM> 
    </div>
</body>
</html>