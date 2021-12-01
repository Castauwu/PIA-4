<?php
include_once "php/menu.php";
require_once "conexion.php";
session_start();
  $e_mail=$_SESSION['e_mail'];
  $id_puntaje=$_SESSION['id_puntaje'];
  

  $consulta= "SELECT * FROM registro where e_mail = '$e_mail'";
  $resultado= $conexion ->query ($consulta);
  $cuenta = $resultado -> fetch();
  $id1 = $cuenta ["usuario"];
  
  $consulta2= "SELECT * FROM puntajes where usuario = '$id1'";
  $resultado2= $conexion ->query ($consulta2);
  $cuenta2 = $resultado2 -> fetch();
  $puntaje = $cuenta2 ["quizbv"];

  $consulta3= "SELECT * FROM puntajes where usuario = '$id1'";
  $resultado3= $conexion ->query ($consulta3);
  $cuenta3 = $resultado3 -> fetch();
  $puntaje2 = $cuenta3 ["quizcotil"];

  $consulta4= "SELECT * FROM puntajes where usuario = '$id1'";
  $resultado4= $conexion ->query ($consulta4);
  $cuenta4 = $resultado4 -> fetch();
  $puntaje3 = $cuenta4 ["quizlly"];

  $consulta5= "SELECT * FROM puntajes where usuario = '$id1'";
  $resultado5= $conexion ->query ($consulta5);
  $cuenta5 = $resultado5 -> fetch();
  $puntaje4 = $cuenta5 ["quizcsxz"];

  $consulta6= "SELECT * FROM puntajes where usuario = '$id1'";
  $resultado6= $conexion ->query ($consulta6);
  $cuenta6 = $resultado6 -> fetch();
  $puntaje5 = $cuenta6 ["quizpaho"];
  //$consulta3= "SELECT * FROM puntajes where id_usuario = '$id1'";
  //$resultado3= $conexion ->query ($consulta3);
  //$cuenta3 = $resultado3 -> fetch();
  //$puntaje1 = $cuenta3 ["sumatoria"]; 

   
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" href="img/panda 5.png" sizes="10x10" type="image/png">
<link rel="stylesheet" href="css/resultados.css">
</head>
<body>


    <div onclick="location.href='fecha.php'"class="mensaje"> <figure>
    <img  src="img/mensaje.png"><div class="capa"><h3 style="font-family: 'Montserrat', sans-serif;">Comenta aquí!</h3></div>
    </figure> 
    </div>
 
    <div class="centrado" style="font-family: 'Montserrat', sans-serif;"><h1>RESULTADOS DE TUS QUIZES</h1></div>
   <table class="container">
  <thead>
    <tr>
      <th><h1>NOMBRE DEL TEST</h1></th>
      <th><h1>RESULTADO</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>USO DE LA B Y V</td>
      <td><?php 
      echo $puntaje;

      ?>/9</td>
    </tr>
    <tr>
      <td>PALABRAS HOMÓNIMAS</td>
      <td><?php 
      echo $puntaje5;

      ?>/9</td>
    </tr>
    <tr>
      <td>USO DE C, X, S, Z</td>
      <td><?php 
      echo $puntaje4;

      ?>/9</td>
    </tr>
    <tr>
      <td>¿CÓMO TILDAR?</td>
      <td><?php 
      echo $puntaje2;

      ?>/9</td>
    </tr>
    <tr>
      <td>USO DE Y Y LL</td>
      <td><?php 
      echo $puntaje3;

      ?>/9</td>
    </tr>
  </tbody>
</table>
    <div><img class="panda" src="Img/panda 4.png" wwidth="370" height="350" ></div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>