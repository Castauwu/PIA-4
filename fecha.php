<?php
include_once "php/menu.php";
?>
<!DOCTYPE html> 
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Expandiendo mentes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/fecha1.css">
    <script>
        var btn_consultar;
        var fecha;

        window.onload = init;

        function init(){
            fecha = document.getElementById("fecha");
            btn_consultar = document.getElementById("btn_consultar");
            btn_consultar.addEventListener("click",cargarReservas);
        }

        function cargarReservas(){
            //alert(fecha.value);
            if(fecha.value != -1)
            {
                localStorage.setItem("hora",fecha.value);
                location.href = "reservas.php";
            }
            else
            {
                alert("Error, debe seleccionar la hora");
            }
        }
        

        function entrar(){
            console.log("entre");
        }

        function salir(){
            console.log("sali");
        }

    </script>
</head>
<body>
<!-- partial:index.partial.html -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
    
<div class="row pop-up">
  <div class="box small-6 large-centered">
    <h3>C O M E N T A R I O S</h3>
    <p>Tus comentarios son muy importantes para nosotros, en esta sección podrás plasmar tus ideas u formas en las que podamos mejorar.</p>
    <p>Siempre podemos mejorar y más de tu mano!</p>
    <a href="#"class="button">¡A comentar!</a>
  </div>
</div>
<div id="overlay" class="cover blur-in">
    <header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
  </div>
</header>
<br><br><br><br><br>
    <h1 id="com">- COMENTARIOS -</h1>
    <select id="fecha">
        <option value="-1"> • Seleccione para aportar • </option>
        <option value="1"> Módulo 1 </option>
        <option value="2"> Módulo 2 </option>
        <option value="3"> Módulo 3 </option>
        <option value="4"> Módulo 4 </option>
        <option value="5"> Módulo 5 </option>
        <option value="6"> Módulo 6 </option>
        <option value="7"> Módulo 7 </option>
        <option value="8"> Módulo 8 </option>
    </select>
<input type="button" id="btn_consultar" value="Consultar">
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
<!-- partial -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
                $(function() {
    $('.pop-up').hide();
    $('.pop-up').fadeIn(1000);

      $('.button').click(function (e) { 

      $('.pop-up').fadeOut(700);
      $('#overlay').removeClass('blur-in');
      $('#overlay').addClass('blur-out');
      e.stopPropagation();
        
    });
    });
    </script>
    <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>
</body>
</html>