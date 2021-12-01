<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "php/conexion.php";
$sentencia = $conexion->prepare("DELETE FROM registro WHERE id_usuario = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) echo'<script type="text/javascript">
        alert("Borrado Correctamente!!!");
        window.location.href="listusu.php";
        </script>';

else echo'<script type="text/javascript">
        alert("Algo salio mal!!");
        window.location.href="listusu.php";
        </script>';
?>