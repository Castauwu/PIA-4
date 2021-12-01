<?php
session_start();
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$repitacontr = $_POST['contrasena2'];
$e_mail = $_SESSION['e_mail'];

try {
	include "conexion.php";

	if ($contrasena == $repitacontr){
		
		
	$sql= "UPDATE registro SET contrasena = :contrasena , usuario=:usuario  WHERE e_mail = '$e_mail'" ;

	$consulta = $conexion->prepare($sql);
	$consulta -> execute(array(
	':usuario' => $usuario,
	':contrasena' => $contrasena
	
	
	));
echo'<script type="text/javascript">
        alert("Tu cambio fue realizado con exito!!");
        window.location.href="../perfil.php";
        </script>';

}
else{
    if ($contrasena != $repitacontr) {
      echo'<script type="text/javascript">
        alert("Contraseñas invalidas!!");
        window.location.href="modificar.php";
        </script>';   
}
    }

}
catch(Exception $e){
	echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>