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
      
      <form method="post" class="is-vertically-scrollable" action="php/resulcotil.php" >
          <p id=p1>Una de las palabras de la siguiente oración incluye un error de acentuación, ¿cuál?</p>
          <label><input id="1" type="radio" name="p1" value="0" required/>Sí, fueron al rendir el examen; llegarán tarde<br></label>
          <label><input id="1" type="radio" name="p1" value="1" required />Sí, fueron a rendir el exámen, llegarán tarde.<br></label>           <label><input id="1" type="radio" name="p1" value="0" required />Si fueron a rendir el examen, llegarán tarde.
<br></label><br>

                 <p id=p2>Las palabras ______________ siempre llevan tilde.</p>
          <label><input id="2" type="radio" name="p2" value="1" required/>Esdrújulas<br></label>
          <label><input id="2" type="radio" name="p2" value="1" required/>Sobresdrújulas<br></label>
          <label><input id="2" type="radio" name="p2" value="1" required/>Esdrújulas y sobresdrújulas<br></label><br>
          
          <p id=p3>Una de las siguientes palabras es aguda, cuál:
</p>
          <label><input id="3" type="radio" name="p3" value="0" required/>Tábano<br></label>
          <label><input id="3" type="radio" name="p3" value="1" required/>Comer<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>- Ágil
<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>Permitido<br></label><br>


<p id=p4>Solo una de las siguientes palabras está incorrectamente separada.</p>
          <label><input id="4" type="radio" name="p4" value="0" required/>ci-mien-tos<br></label>
          <label><input id="4" type="radio" name="p4" value="0" required/>co-e-tá-ne-o<br></label>          <label><input id="4" type="radio" name="p4" value="0" required/>es-pio-na-je<br></label>
          <label><input id="4" type="radio" name="p4" value="1" required/>se-le-ccio-na-do<br></label><br>

          <p id=p5>Una de las siguientes palabras es grave, cuál:</p>
          <label><input id="5" type="radio" name="p5" value="0" required/>convenir<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>pragmático<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>también<br></label>
          <label><input id="5" type="radio" name="p5" value="1" required/>navegando<br></label><br>
          
          <p id=p6>¿Cuál de las siguientes palabras es esdrújula?
</p>
 
          <label><input id="6" type="radio" name="p6" value="1" required/>periódico<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>publicación<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>actividad<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>ayer<br></label><br>
         
          <p id=p7>Las palabras __________ son las que llevan la fuerza de voz en la penúltima sílaba.
- </p>
 
          <label><input id="7" type="radio" name="p7" value="0" required/>Agudas<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/>Esdrújulas<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/>Sobresdrújulas<br></label>
          <label><input id="7" type="radio" name="p7" value="1" required/>Graves<br></label><br>

          <p id=p8>Cuando las palabras __________ terminan en n, s o vocal, se deben tildar.</p>
          <label><input id="8" type="radio" name="p8" value="1" required/>Agudas<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Esdrújulas<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Sobresdrújulas<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Graves<br></label><br>

          <p id=p9>Solo una de las palabras está correctamente separada, cuál es.
</p>
 
          <label><input id="9" type="radio" name="p9" value="1" required/>tri-án-gu-lo
<br></label>
          <label><input id="9" type="radio" name="p9" value="0" required/>ca-í-da
<br></label>
          <label><input id="9" type="radio" name="p9" value="0" required/>poe-ta
<br></label>
<label><input id="9" type="radio" name="p9" value="0" required/>via-ja-ría-mos
<br></label><br>

          <p id=p10>Una de las palabras de la siguiente oración incluye un error de acentuación, ¿cuál?
</p>
          
         <label> <input id="10" type="radio" name="p10" value="0" required/>precisión<br></label>
          <label><input id="10" type="radio" name="p10" value="0" required/>cráter<br></label>
          <label><input id="10" type="radio" name="p10" value="0" required/>envió<br></label>
          <label><input id="10" type="radio" name="p10" value="1" required/>agilmente<br></label><br>  <input type="submit"  style="margin-bottom:90px; " class="enviar" name="ratata" value="Enviar">     
      </form>
    </div>
   

 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>