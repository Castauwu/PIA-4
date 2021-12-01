<?php



if(!isset($_GET['id'])) header("location:../perfiladm.php");  
  
$id_usuario = $_GET['id'];
include_once "php/conexion.php";
$sentencia = $conexion->prepare("SELECT * FROM registro WHERE id_usuario = ?;");
$sentencia->execute([$id_usuario]);
$regi = $sentencia->fetch(PDO::FETCH_OBJ);
if($regi === FALSE){
  #No existe
  echo "¡No existe alguna persona con ese ID!";

  exit();
}


#Si la persona existe, se ejecuta esta parte del código
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES - Registro</title>
  <link rel="stylesheet" href="css/edicionusu.css">

</head>
<body style="background-image: url(img/fondo.png);">
<!-- partial:index.partial.html -->
<h1 id="tittle">EXPANDIENDO MENTES</h1>
<div><img class="casita" src="img/casa.png"></div>
<div class="container">

  <form method="POST" action="guardaredicion.php">
    <h2 class="last">USUARIOS</h2>

    

    <p>USUARIO</p>
    <input  value="<?php echo $regi->usuario ?>" class="input" required type="text" name="usuario1"  id="usuario" >

    <p>E-MAIL</p>
    <input value="<?php echo $regi->e_mail ?>"  class="input" required type="email" name="e_mail"  id="e_mail" >
    <p>EDAD</p>
    <input  value="<?php echo $regi->edad?>"  class="input" required type="text" name="edad"  id="edad">
    <p>CONTRASEÑA</p>
    <input  value="<?php echo $regi->contrasena?>" class="input" required type="text" name="contrasena"  id="contrasena" >
     <p>PERFIL</p>
    <input value="<?php echo $regi->perfil ?>"  class="input" required type="num" name="perfil" id="perfil" >

    <input type="hidden" name="oculto">
    <input type="hidden" name="id" value="<?php echo $regi->id_usuario; ?>" id="id" >
    <input class="button" type="submit" value="EDITAR">
    <input class="button1" type="submit" value="ELIMINAR">
    <input class="button2" type="submit" value="CANCELAR">
  </form>
  <br>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="js/scripts.js"></script>
  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>

</body>
</html>