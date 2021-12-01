<?php
include_once "php/menu.php"; 
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/form1.css">
</head>
<body>

  <div>
        <div><img class="panda" src="img/panda 2.png" wwidth="370" height="350" ></div>
        <div><img class="cuadro1" src="img/cuadro1.png" width="120" height="120"></div>
    <div><img class="cuadro2" src="img/cuadro2.png" width="120" height="120"></div>
    <div><img class="cuadro3" src="img/cuadro1.png" width="120" height="120"></div>
    <div><img class="cuadro4" src="img/cuadro2.png" width="120" height="120"></div>
    <div><img class="cuadro5" src="img/cuadro3.png" width="120" height="120"></div>
    <div class="centrado"><h1>PRUEBA TUS CONOCIMIENTOS</h1></div>
       
  


   <div class="form" style="margin-top: 10%">
      
      <form method="post" class="is-vertically-scrollable" action="php/resultado.php" >
          <p id=p1>¿Se escribe baca o vaca?</p>
          <label><input id="1" type="radio" name="p1" value="1" required/>vaca<br></label>
          <label><input id="1" type="radio" name="p1" value="0" required />Baca<br></label><br>
                 <p id=p2>¿Cuál es la palabra incorrecta?</p>
          <label><input id="2" type="radio" name="p2" value="0" required/>Bisturí<br></label>
          <label><input id="2" type="radio" name="p2" value="0" required/>Recibir<br></label>
          <label><input id="2" type="radio" name="p2" value="1" required/>Vipolar<br></label>
          <label><input id="2" type="radio" name="p2" value="0" required/>Vagabundo<br></label><br>
          <p id=p3>Selecciona la palabra correcta</p>
          <label><input id="3" type="radio" name="p3" value="0" required/>Bacaciones<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>Doviar<br></label>
          <label><input id="3" type="radio" name="p3" value="1" required/>Cantaba<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>Avorigen<br></label><br>
          <p id=p4>¿Cómo se escribe?</p>
          <label><input id="4" type="radio" name="p4" value="1" required/>Caritativo<br></label>
          <label><input id="4" type="radio" name="p4" value="0" required/>Caritatibo<br></label><br>
          
          <p id=p5>Dos de las siguientes palabras son correctas, seleccionalas</p>
 
          <label><input id="5" type="radio" name="p5" value="1" required/>Octava<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>Longebo<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>Abogado<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>Decenbiro<br></label><br>
         
          <p id=p7>¿Se escribe Revibir o Revivir?</p>
 
          <label><input id="6" type="radio" name="p6" value="1" required/>Revivir<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>Revibir<br></label><br>

          <p id=p7>¿Se escribe Labio o Lavio?</p>
          <label><input id="7" type="radio" name="p7" value="1" required/>Labio<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/>Lavio<br></label><br>

          <p id=p7>¿Se escribe Avión o Abion?</p>
 
          <label><input id="8" type="radio" name="p8" value="1" required/>Avión<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Abion<br></label><br>
          <p id=p7>Selecciona la frase con buena ortografía</p>
 
         <label> <input id="9" type="radio" name="p9" value="0" required/>Ayer vaile con mi hermana en la fiesta de mi padre<br></label>
          <label><input id="9" type="radio" name="p9" value="1" required/>Estaba muy bueno el bocadillo que dieron en la boda<br></label><br>
          <input type="submit" class="enviar" name="ratata" value="Enviar">

         
      </form>
    </div>
   

 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>