<?php
include_once "php/menuadm.php"; 
?>
<!DOCTYPE html>
<html lang="en" >
<head> 
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/admus.css">

</head>
<body>
<div class="cuadro1"><img src="img/cuadro3.png" width="120" height="120"></div>
<div class="cuadro2"><img src="img/cuadro2.png" width="120" height="120"></div>

<div class="centrado"><p>ADMINISTRACION DE CLASES </p></div>
<div class="p2" style="cursor: pointer;" onclick="location.href='registroclase.php';"><p>CREAR CLASE</p></div>
<div class="p3" style="cursor: pointer;" onclick="location.href='listcls.php';"><p>CLASES CREADAS</p></div>

<div><img class="panda" src="img/panda 5.png" wwidth="500" height="500"></div>
<div onclick="location.href='fecha.php'"class="mensaje"> <figure>
    <img  src="img/mensaje.png"><div class="capa"><h3>Comenta aquí!</h3></div>
    </figure> 
    </div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
<div class="margenbaja"><footer><div class="text"><h1>Copyright 2021 IEFO</h1></div></footer>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>