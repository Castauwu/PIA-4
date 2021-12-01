<?php
session_start();
$usuario = $_POST['usuario'];
$e_mail = $_POST['e_mail'];
$edad = $_POST['edad'];
$contrasena = $_POST['contrasena'];
$repitacontr = $_POST['contra2'];
$pperfil = $_POST['perfil'];
try {

	include "conexion.php";

	if ($edad>0 && $e_mail!="" && $usuario!="") {
			if ($contrasena == $repitacontr && $contrasena!=""){
	
	$sql="INSERT INTO registro(id_usuario, usuario, e_mail, edad, contrasena, perfil) VALUES (NULL, :usuario, :e_mail, :edad, :contrasena,:perfil)";
	//ejecutar la consulta
	$consulta = $conexion->prepare($sql);
	$consulta -> execute(array(
	':usuario' => $usuario,
	':e_mail' => $e_mail,
	':edad' => $edad,
	':contrasena' => $contrasena,
	':perfil'=> $pperfil
	));
		     echo'<script type="text/javascript">
        alert("Usuario Registrado");
        window.location.href="../listusu.php";
        </script>';
}else{
	if ($contrasena != $repitacontr) {
	     echo'<script type="text/javascript">
        alert("Valida tus contraseñas!");
        window.location.href="../regius.php";
        </script>';
}
	}
}else{
	if ($edad<1 or $e_mail=="" or $usuario=="") {
		echo'<script type="text/javascript">
        alert("Campos vacíos!");
        window.location.href="../regius.php";
        </script>';
	}

}


}
catch(Exception $e){
	echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>