<?php
session_start();
$usuario = $_POST['usuario'];
$e_mail = $_POST['e_mail'];
$edad = $_POST['edad'];
$contrasena = $_POST['contrasena'];
$repitacontr = $_POST['contra2'];

try {

	include "conexion.php";

	if ($edad>0 && $e_mail!="" && $usuario!="") {
			if ($contrasena == $repitacontr && $contrasena!=""){
	
	$sql="INSERT INTO registro(id_usuario, usuario, e_mail, edad, contrasena) VALUES (NULL, :usuario, :e_mail, :edad, :contrasena)";
	$id=("id_usuario");
	//ejecutar la consulta
	$consulta = $conexion->prepare($sql);
	$consulta -> execute(array(
	':usuario' => $usuario,
	':e_mail' => $e_mail,
	':edad' => $edad,
	':contrasena' => $contrasena
	));
	
      $sql2="INSERT INTO puntajes (id_puntaje, id_usuario, usuario) VALUES(NULL,:id_usuario,:usuario)";
      $_SESSION['id_puntaje']=$id_puntaje;
      $consulta = $conexion->prepare($sql2);
      $consulta -> execute(array(
        ':id_usuario' => $id,
        ':usuario' => $usuario,
        
        ));
    
		     echo'<script type="text/javascript">
        alert("Gracias por registrarte! - Inicia sesión para continuar");
        window.location.href="../login.php";
        </script>';
}else{
	if ($contrasena != $repitacontr) {
	     echo'<script type="text/javascript">
        alert("Valida tus contraseñas!");
        window.location.href="../register.php";
        </script>';
}
	}
}else{
	if ($edad<1 or $e_mail=="" or $usuario=="") {
		echo'<script type="text/javascript">
        alert("Campos vacíos!");
        window.location.href="../register.php";
        </script>';
	}

}


}
catch(Exception $e){
	echo 'Error conectando a la base de datos: '. $e->getMessage();
}
?>