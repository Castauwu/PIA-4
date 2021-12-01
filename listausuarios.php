
<?php
include_once "php/menuadm.php";
require_once "conexion.php";
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
 
    <div class="centrado" style="font-family: 'Montserrat', sans-serif;"><h1>LISTA DE USUARIOS</h1></div>
   <table class="container">
  <thead>
    <tr>
      <th><h1>USUARIO</h1></th>
      <th><h1>QUIZ 1</h1></th>
      <th><h1>QUIZ 2</h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>WENDY BENÍTEZ</td>
      <td>1/7</td>
      <td>9</td>
    </tr>
    <tr>
      <td>MANUELA CORTÉS</td>
      <td>7/7</td>
      <td>63</td>
    </tr>
    <tr>
      <td>JUAN FELIPE CASTAÑEDA</td>
      <td>6/7</td>
      <td>54</td>
    </tr>
    <tr>
      <td>JUAN PEÑATES</td>
      <td>0/7</td>
      <td>0</td>
    </tr>
  </tbody>
</table>
<br>
    


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <div><img class="panda" src="Img/panda 4.png" wwidth="370" height="350" ></div>
      
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>
</body>
</html>