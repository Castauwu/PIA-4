<?php

try {
$conexion = new PDO('mysql:host=localhost;dbname=expandiendomentes',"root","");
} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>