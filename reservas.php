<?php
include_once "php/menu.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/reservas.css">
<script src="js/main2.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

<div id="fondo_reserva">
</header><br>
    <h1 id="tittle">C O M E N T A R I O S</h1>
    <h3 id="saludo">Bienvenid@<h3>
        <br>
    <div id="ventana" class="ligthbox hidden">
        <div class="login_content">
            <div id="cerrar" class="close_button">x</div>
            <input type="text" id="input_name" placeholder="Ingrese el comentario"> <br>
            <input type="button" id="button_login" value="Comentar!" onclick="reservar();" >
        </div>
    </div>

    <div id="cuadricula">
        <div id="puesto_1" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(1);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_2" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(2);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_3" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(3);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_4" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(4);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_5" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(5);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div> 
        <div id="puesto_6" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(6);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_7" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(7);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_8" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(8);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
        <div id="puesto_9" class="disponible">
            <h2>Escribe aquí tu comentario</h2>
            <img class="btn_agregar" onClick="crearReserva(9);" src="https://www.nicepng.com/png/full/251-2519428_0-add-icon-white-png.png" alt=""> 
        </div>
    </div>
</div>
</body>
</html>