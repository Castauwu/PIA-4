<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
 <link  rel="stylesheet" type= "text/css" href="../css/edicionperfil.css">
   <link rel="icon" href="../img/panda 5.png" sizes="10x10" type="image/png">
</head>
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<!-- contenedor de perfil -->
<div class="perfil_usuario">
   <h2 >PERFIL DEL USUARIO</h2>
  <form method="post" action="act.php" > 
    <?php
     require_once "conexion.php";
  $e_mail=$_SESSION['e_mail'];
  

  $consulta= "SELECT * FROM registro where e_mail = '$e_mail'";
  $resultado= $conexion ->query ($consulta);
  $cuenta = $resultado -> fetch();
  echo '
  <p>Usuario:</p><img style="height: 15px; width:15px;" src="https://cdn.iconscout.com/icon/free/png-256/edit-2653317-2202989.png">
    <input type="text"  placeholder="Usuario: " name="usuario" value= '.$cuenta["usuario"].'>';
    echo '
    <p>E_mail:</p>
    <input type="text" placeholder="E_mail: " name="e_mail" value='.$cuenta["e_mail"].' disabled>';
    echo '
    <p>Edad</p>
    <input type="text"  placeholder="Edad: " name="edad" value='.$cuenta["edad"].' disabled>';
    echo '
    <p>Contraseña:</p><img style="height: 15px; width:15px;" src="https://cdn.iconscout.com/icon/free/png-256/edit-2653317-2202989.png">
    <input type="Password"  placeholder="Contraseña: " name="contrasena" value='.$cuenta["contrasena"].'>';
    echo '
    <p>Confirmar contraseña:</p>
    <input type="Password"  placeholder="Contraseña: " name="contrasena2" value='.$cuenta["contrasena"].'>';
    echo'
     <input type="submit" class="buttoneditar" value="Confirmar">';
      $_SESSION['usuario']=$cuenta["usuario"];
      $_SESSION['e_mail']=$cuenta["e_mail"];
      $_SESSION['edad']=$cuenta["edad"];
      $_SESSION['contrasena']=$cuenta["contrasena"];
      
     ?>
</form>
<form action="../perfil.php">
  <input type="submit" class="buttoneditar" value="Cancelar">
</form>

</div>
</html>