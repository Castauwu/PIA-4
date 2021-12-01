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
      
      <form method="post" class="is-vertically-scrollable" action="php/resulpaho.php" >
          <p id=p1>Señala la oración correcta.</p>
          <label><input id="1" type="radio" name="p1" value="1" required/> Se cayó en la calle<br></label>
          <label><input id="1" type="radio" name="p1" value="0" required /> Se calló en la calle<br></label><br>

                 <p id=p2>Señala la palabra correcta: Cuando___________el agua, echa los espaguetis.</p>
          <label><input id="2" type="radio" name="p2" value="0" required/>
Hierba<br></label>
          <label><input id="2" type="radio" name="p2" value="1" required/>
Hierva<br></label><br>

          <p id=p3>Señala la palabra correcta: __________ que desayunes no irás a correr en bicicleta.</p>
          <label><input id="3" type="radio" name="p3" value="1" required/> Hasta<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/> Asta<br></label><br>

          <p id=p4>Señala la palabra correcta: Tiene mucho ________ en las piernas.</p>
          <label><input id="4" type="radio" name="p4" value="1" required/> Vello<br></label>
          <label><input id="4" type="radio" name="p4" value="0" required/> Bello<br></label><br>
          
          <p id=p5>Señala la palabra correcta: Nuestro parque tiene _________ artificial.</p>
 
          <label><input id="5" type="radio" name="p5" value="1" required/> Hierba<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/> Hierva<br></label>
         
          <p id=p6>Señala la palabra correcta: Mi papá ____________ que comprar un móvil nuevo.</p>
 
          <label><input id="6" type="radio" name="p6" value="1" required/> Tuvo<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/> Tubo<br></label><br>

          <p id=p7>Señala la palabra correcta: ¡Qué________es tu gatito!</p>
          <label><input id="7" type="radio" name="p7" value="1" required/> Bello<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/> Vello<br></label><br>

          <p id=p8>Señala la palabra correcta: El fontanero cambió el ________del fregadero.</p>
 
          <label><input id="8" type="radio" name="p8" value="1" required/> Tubo<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/> Tuvo<br></label><br>

          <p id=p9>Señala la palabra correcta: El _______ de la bandera es de hierro.</p>
 
         <label> <input id="9" type="radio" name="p9" value="0" required/> Hasta<br></label>
          <label><input id="9" type="radio" name="p9" value="1" required/> Asta<br></label><br>
          <input type="submit" class="enviar" name="ratata" value="Enviar">

         
      </form>
    </div>
   

 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>