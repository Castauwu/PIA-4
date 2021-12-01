<?php

#Salir si alguno de los datos no está presente

  if(!isset($_POST['oculto'])) {
    header("location:../perfiladm.php");  
  }
include_once "conexion.php";
$id_usuario = $_POST['id'];
$usua = $_POST["usuario1"];
$e_mail = $_POST["e_mail"];
$edad = $_POST["edad"];
$cont = $_POST["contrasena"];
$perfil = $_POST["perfil"];

$sentencia = $conexion->prepare("UPDATE registro SET usuario = ?, e_mail = ?, edad = ?, contrasena = ?, perfil= ?  WHERE id_usuario = ?;");
$registro = $sentencia->execute([$usua,$e_mail,$edad,$cont,$perfil,$id_usuario]); # Pasar en el mismo orden de los ?
if($registro === TRUE) echo'<script type="text/javascript">
        alert("Editado Correctamente!!!");
        window.location.href="listusu.php";
        </script>';

else  echo'<script type="text/javascript">
        alert("Algo salio mal!!");
        window.location.href="listusu.php";
        </script>';
?>