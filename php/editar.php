<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <link  rel="stylesheet" type= "text/css" href="../css/edicionperfil.css">
   <link rel="icon" href="../img/loguito.png" sizes="10x10" type="image/png">
</head>
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<!-- contenedor de perfil -->
<div class="perfil_usuario">
   <h2 class="titulo">PERFIL DEL USUARIO</h2>
  <form method="post" action="modificar.php" > 

    <?php
     require_once "conexion.php";
  $e_mail=$_SESSION['e_mail'];
  
  

  $consulta= "SELECT * FROM registro where e_mail = '$e_mail'";
  $resultado= $conexion ->query ($consulta);
  $cuenta = $resultado -> fetch();
  echo '
  <p>Usuario:</p>
    <input type="text"  placeholder="Usuario: " name="usuario" value= '.$cuenta["usuario"].' disabled>';
    echo '
    <p>E_mail:</p>
    <input type="text" placeholder="E_mail: " name="e_mail" value='.$cuenta["e_mail"].' disabled>';
    echo '
    <p>Edad:</p>
    <input type="text"  placeholder="Edad: " name="edad" value='.$cuenta["edad"].' disabled>';
    echo '
    <p>Contraseña:</p>
    <input type="Password"  placeholder="Contraseña: " name="contrasena" value='.$cuenta["contrasena"].' disabled>';
    echo'
     <input type="submit" class="buttoneditar" value="Editar">';
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
<div class="margenbaja"><footer><div class="text"> <h4>Copyright 2021 IEFO</h1></div></footer>
</html>