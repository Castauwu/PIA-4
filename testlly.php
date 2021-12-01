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
      
      <form method="post" class="is-vertically-scrollable" action="php/resulyll.php" >
          <p id=p1>Los verbos terminados en "llir". Escoge la palabra correcta</p>
          <label><input id="1" type="radio" name="p1" value="0" required/>Enguyir<br></label>
          <label><input id="1" type="radio" name="p1" value="1" required />Engullir<br></label>
          <label><input id="1" type="radio" name="p1" value="0" required/>Muyir<br></label>
          <label><input id="1" type="radio" name="p1" value="0" required/>Salpuyir<br></label><br>
                 <p id=p2>Selecciona la frase bien escrita</p>
          <label><input id="2" type="radio" name="p2" value="0" required/>Las llemas están bien marcadas<br></label>
          <label><input id="2" type="radio" name="p2" value="0" required/>Debo llamar a mi papa para que recoja la llegua<br></label>
          <label><input id="2" type="radio" name="p2" value="1" required/>Las llamas del incendio casi queman a mi yermo<br></label>
          <label><input id="2" type="radio" name="p2" value="0" required/>La yamada fue muy larga<br></label><br>

          <p id=p3>¿Cuál de las siguientes palabras está bien escrita?</p>
          <label><input id="3" type="radio" name="p3" value="0" required/>Llegua<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>Yama<br></label>
          <label><input id="3" type="radio" name="p3" value="1" required/>Fullero<br></label>
          <label><input id="3" type="radio" name="p3" value="0" required/>Fuyerìa<br></label><br>


          <p id=p4>Las _ves de mi casa se le ca__ron en parque. Escoge las consonantes correctas</p>
          <label><input id="4" type="radio" name="p4" value="0" required/>Ya,la lle,<br></label>
          <label><input id="4" type="radio" name="p4" value="1" required/>Lla,ye<br></label>
          <label><input id="4" type="radio" name="p4" value="0" required/>Poseer<br></label><br>
          
          <p id=p5>Mi abuelo es muy ga___o</p>
 
          <label><input id="5" type="radio" name="p5" value="0" required/>Gayero<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>Gullero<br></label>
          <label><input id="5" type="radio" name="p5" value="0" required/>Guayaro<br></label>
          <label><input id="5" type="radio" name="p5" value="1" required/>Gallero<br></label><br>
         
          <p id=p6>Los sustantivos que terminan en -alle, elle, -ello Excepto</p>
 
          <label><input id="6" type="radio" name="p6" value="0" required/>Valle<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>Murmullo<br></label>
          <label><input id="6" type="radio" name="p6" value="1" required/>Plebeyo<br></label>
          <label><input id="6" type="radio" name="p6" value="0" required/>Fuelle<br></label><br>


          <p id=p7> Las palabras que terminan en -ello, -ella .. excepto
</p>
          <label><input id="7" type="radio" name="p7" value="0" required/>Atropello<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/>Bello<br></label>
          <label><input id="7" type="radio" name="p7" value="1" required/>Leguleyo<br></label>
          <label><input id="7" type="radio" name="p7" value="0" required/>Camello<br></label><br>

          <p id=p8>Palabra que contiene la sílaba -yec-</p>
 
          <label><input id="8" type="radio" name="p8" value="0" required/>Protector<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Prollectar<br></label>
          <label><input id="8" type="radio" name="p8" value="0" required/>Inllecto<br></label>
          <label><input id="8" type="radio" name="p8" value="1" required/>Abyecto<br></label><br>


          <p id=p9>Completa la siguiente frase .Enciende la ceri_a.
</p>
         <label> <input id="9" type="radio" name="p9" value="0" required/>Acaudillar<br></label>
          <label><input id="9" type="radio" name="p9" value="0" required/>Y<br></label>
          <label> <input id="9" type="radio" name="p9" value="0" required/>Lle<br></label>
          <label> <input id="9" type="radio" name="p9" value="1" required/>Ll<br></label>
          <label> <input id="9" type="radio" name="p9" value="0" required/>I<br></label><br>
          
          <input type="submit" class="enviar"  style="margin-bottom:90px; " name="ratata" value="Enviar">

         
      </form>
    </div>
   

 
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>