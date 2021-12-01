<?php
include_once "php/menu.php"; 
?>
<!DOCTYPE html>
<html lang="en" >
<head> 
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/bienvenido3.css">
</head>
<body>
<!-- partial:index.partial.html -->

<div>
        <div><img class="panda" src="img/panda 2.png" wwidth="370" height="350" ></div>
        <div><img  onclick="mostrar()" class="cuadro1" src="img/cuadro1.png" width="120" height="120"></div>
    <div onclick="mostrar()"><img class="cuadro2" src="img/cuadro2.png" width="120" height="120" ></div>
    <div  onclick="mostrar()"><img class="cuadro3" src="img/cuadro1.png" width="120" height="120"></div>
    <div onclick="location.href='vyb.php'"><img class="cuadro4" src="Img/cuadro2.png" width="120" height="120"></div>
    <div  onclick="mostrar()"><img class="cuadro5" src="img/cuadro3.png" width="120" height="120"></div>
        <div class="centrado"><h1>BIENVENIDO AL MODULO BACHILLERATO</h1></div>
    <div class="p1"  style="cursor: pointer;" onclick="location.href='vyb.php'"><h1 >USO DE LA B Y V</h1></div>

    <div class="p2"><h1  style="cursor: pointer;" onclick="location.href='cotil.php'">COMO TILDAR </h1></div>

    <div class="p3"><h1  style="cursor: pointer;" onclick="location.href='paho.php'">PALABRAS HOMÓNIMAS </h1></div>


    <div class="p4"><h1  style="cursor: pointer;" onclick="location.href='lly.php'">USO DE  Y y LL</h1></div>
    <div class="p5"><h1  style="cursor: pointer;" onclick="location.href='csxz.php'">USO DE C X S Z</h1></div>                      
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>


</body>
</html>