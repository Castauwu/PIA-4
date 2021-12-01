<!DOCTYPE html>
<html lang="en" > 
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<div class="container">
  <div class="oreja"> <div class="blanco"></div></div><div class="orejad"> <div class="blancod"></div></div>
  <div class="pokemon">
    <div class="top">
      <div class="middle"></div>
    </div>
    <div class="square square1"></div>
    <div class="square square2"></div>
    <div class="square square3"></div>
    <div class="eye eye-left">
      <div class="pupil"></div>
    </div><div class="black"></div><div class="blackright"></div>
    <div class="sleep-eye sleep-eye-left"></div>
    <div class="sleep-eye sleep-eye-right"></div>
    <div class="eye eye-right">
      <div class="pupil2"></div>
    </div>
    <div class="nose"></div>
    <div class="mouth">
      <div class="teeth"></div>
      <div class="tongue"></div>
      
    </div>
  </div>
  <p class="last">INICIO DE SESIÓN</p><br>
  <form method="POST" action="php/inicio.php">
  <p>C O R R E O</p>
  <input type="text" class="email input" placeholder="ejemplo@gmail.com" name="e_mail" required>
  <p class='pass-text'>C O N T R A S E Ñ A</p>
  <div class="show"><input class="show" onclick="show()" type="checkbox"><p>V E R</p></div>
  <input type="password" name="contrasena" class="pass input" id="pass" required>
  <input type="submit" class="button" value="I N G R E S A R">
  <br><br>
  <center><a href="register.php">¿No tienes cuenta? Registrate!</a></center>
</form>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="js/scripts.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>