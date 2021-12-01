<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES - Registro</title>
  <link rel="stylesheet" href="css/register1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<div class="container">
  <form method="POST" action="php/registro.php">
    <h2 class="last">REGISTRO</h2>
    <p>*USUARIO</p>
    <input class="input" type="text" name="usuario">
    <p>*E-MAIL</p>
    <input class="input" type="email" name="e_mail">
    <p>*EDAD</p>
    <input class="input" type="text" name="edad">
    <p>*CONTRASEÑA</p>
    <input class="input" type="password" name="contrasena">
    <p>*CONFIRMAR CONTRASEÑA</p>
    <input class="input" type="password" name="contra2">
    <input class="button" type="submit" value="REGISTRAR">
  </form>
  <br>
  <center><a style="letter-spacing: 0px;" href="login.php">¿Tienes cuenta? Inicia sesión!</a></center>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="js/scripts.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>