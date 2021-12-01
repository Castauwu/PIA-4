<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES - Registro</title>
  <link rel="stylesheet" href="css/crear.css">

</head>
<body style="background-image: url(img/fondo.png);">
<!-- partial:index.partial.html -->
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<div class="container">
  <form method="POST" action="php/regius.php">
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
    <p>*PERFIL</p>
    <input class="input" type="num" name="perfil">

    <input class="button" type="submit" value="REGISTRAR">


  </form>
  <br>
  

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="js/scripts.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>