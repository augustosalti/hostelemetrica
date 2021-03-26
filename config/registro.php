<HTML>
<head>
<meta charset="utf-8">
<title>Home Page</title>
</head>

<p> </p>
 
  
  
<h1 align="center">REGISTRO DE USUARIOS</h1>
<table border="" width="400" cellspacing="2" cellpadding="15" align="center" >
<tbody>
<tr><td align="center">
<form method="post">
   
    
<p><strong>USUARIO:  <input maxlength="10" name="user" type="text" value="" placeholder="" /></strong></p>
<p><strong>CLAVE:       <input maxlength="8" name="pass" type="password" value="" placeholder="" /></strong></p>
<p><button name="submit" type="submit"><strong>REGISTRAR</strong> </button></p>
</form></td>
</tr>
</tbody>
</table>

</HTML>


<?php

include'../BDD/connectMYSQLI.php';

if ($stmt = $connection->prepare("INSERT INTO config (tipos, variante, pass) VALUES (?, ?, ?)"))
{
        $campo = 'usuarios';
        $usuario = $_POST['user'];
	    $password = $_POST['pass'];
	    $options = array("cost"=>4);
	    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
            
        $stmt->bind_param("iss", $campo, $usuario, $hashPassword);
	    $stmt->execute();
  
 if (!$stmt->error){
   
         echo "<table border=1 cellspacing=0 cellpading=0 align=center BORDER BGCOLOR=#141318>
         <p><tr align=center > <td><font color=yellow ><div style=font-size:1.25em color:yellow> USUARIO REGISTRADO CON EXITO </div></td></tr></p>
              </table>"; 
                   }
}

?>