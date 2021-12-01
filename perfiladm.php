<?php
include_once "php/menuadm.php"; 
?>
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/pad.css">
</head>
<body>
    <?php
    session_start();
     require_once "conexion.php";
  $e_mail=$_SESSION['e_mail'];
  

  $consulta= "SELECT * FROM registro where e_mail = '$e_mail'";
  $resultado= $conexion ->query ($consulta);
  $cuenta = $resultado -> fetch();
  echo '<div class="centrado"><h1>Bienvenid@ '.$cuenta["usuario"].'!</h1></div>';
  $_SESSION['usuario'] = $cuenta["usuario"];
  ?>
    <div><img class="panda" src="img/panda 4.png" wwidth="280" height="320" ></div>
    <div><img class="perfilofi" src="img/perfil.png" width="380" height="400"></div>
    <div onclick="location.href='fecha.php'"class="mensaje"> <figure>
    <img  src="img/mensaje.png"><div class="capa"><h3>Comenta aquí!</h3></div>
    </figure> 
    </div>
<div><img class="cuadro6" src="img/cuadro3.png" width="120" height="120"></div>
    
    <div><img class="cuadro4"src="img/cuadro1.png" width="120" height="120"></div>
    
    <div><img class="cuadro5"src="img/cuadro1.png" width="120" height="120"></div>

    <div><img class="cuadro3" src="img/cuadro3.png" width="120" height="120"></div>

    <div class="p1" onclick="salir()"><p>CERRAR SESIÓN</div>

     <div class="p3" onclick="location.href='admus.php';"><p>ADMINISTRACION</p> <p>USUARIOS</p> </div>
     <div class="p4" onclick="location.href='php/editar.php';"><p>EDITAR</p> <p>PERFIL</p> </div>
<script>
  function salir(){
  var confirmar =window.confirm("¿Seguro de que quieres cerrar sesión? ")
  if (confirmar == true){
  location.href = "index.html";
  }
}
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>
</body>
</html>