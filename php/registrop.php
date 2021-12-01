<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["usuario"]) || !isset($_POST["e_mail"]) || !isset($_POST["edad"] || !isset($_POST["contrasena"]) 
	|| isset($_POST["contrasena2"]) || isset($_POST["perfil"])) header("location:../perfiladm.php");

include_once "conexion.php";
$usuario = $_POST["usuario"];
$e_mail = $_POST["e_mail"];
$edad = $_POST["edad"];
$contra = $_POST["contrasena"];
$contra2= $_POST["contra2"];
$perfil = $_POST["perfil"];

/*
	
*/
$sentencia = $conexion->prepare("INSERT INTO registro(usuario, e_mail, edad, contrasena, perfil) VALUES ((NULL, :usuario, :e_mail, :edad, :contrasena);");

$resultado = $sentencia->execute(':usuario' => $usuario,
	':e_mail' => $e_mail,
	':edad' => $edad,
	':contrasena' => $contrasena
	));

if($resultado === TRUE) echo "Insertado correctamente";

else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>
