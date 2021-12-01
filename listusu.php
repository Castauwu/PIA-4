<?php
include_once "php/menuadm.php";
include_once "php/conexion.php";
$sentencia = $conexion->query("SELECT * FROM registro;");
$registro = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EXPANDIENDO MENTES</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" href="img/panda 5.png" sizes="10x10" type="image/png">
<link rel="stylesheet" href="css/listar.css">
</head>
<body>


    <div onclick="location.href='fecha.php'"class="mensaje"> <figure>
    <img  src="img/mensaje.png"><div class="capa"><h3 style="font-family: 'Montserrat', sans-serif;">Comenta aquí!</h3></div>
    </figure> 
    </div>
 
    <div class="centrado" style="font-family: 'Montserrat', sans-serif;"><h1>LISTA DE USUARIOS</h1></div>
   <table class="container">
  <thead>
    <tr>
      <th><h1>ID</h1></th>
      <th><h1>USUARIO</h1></th>
      <th><h1>E_MAIL</h1></th>
      <th><h1>EDAD</h1></th>
      <th><h1>CONTRASEÑA</h1></th>
      <th><h1>PERFIL</h1><th>
      <th><h1><a href="crearusu.php">CREAR USUARIO</a></h1><th>
      
    </tr>
  </thead>
  

        <tbody>
          
    <?php 
    foreach($registro as $regi){ ?>
      <tr>
        <td><?php echo $regi->id_usuario ?></td>
        <td><?php echo $regi->usuario ?></td>
        <td><?php echo $regi->e_mail ?></td>
        <td><?php echo $regi->edad?></td>
        <td><?php echo $regi->contrasena ?></td>
        <td><?php echo $regi->perfil ?></td>
        <td><a href="edicionusuario.php?id=<?php echo $regi->id_usuario?>">Editar</a></td>
        <td><a href="borrarusu.php?id=<?php echo $regi->id_usuario?>" >Eliminar</a></td>
      </tr>
      <?php } ?>

  </tbody>
</table>
<br>
   
    


<!-- partial -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <div><img class="panda" src="Img/panda 4.png" wwidth="370" height="350" ></div>
   


  <div class="margenbaja"><footer><div class="text"> <h1>Copyright 2021 IEFO</h1></div></footer>



</body>
</html>