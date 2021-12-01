<?php
session_start();

require_once "conexion.php";
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$p6=$_POST["p6"];
$p7=$_POST["p7"];
$p8=$_POST["p8"];
$p9=$_POST["p9"];
$sum=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9;
if ($sum ==1){
echo'<script type="text/javascript">
        alert("Su puntaje es 1!");
        window.location.href="../res.php";
        </script>';
} 
if ($sum ==2 ){
  echo'<script type="text/javascript">
        alert("Su puntaje es 2!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==3 ){
 echo'<script type="text/javascript">
        alert("Su puntaje es 3!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==4 ){
 echo'<script type="text/javascript">
        alert("Su puntaje es 4!");
        window.location.href="../res.php";
        </script>'; 
}
if ($sum ==5 ){
 echo'<script type="text/javascript">
        alert("Su puntaje es 5!");
        window.location.href="../res.php";
        </script>'; 
}
if ($sum ==6 ){
  echo'<script type="text/javascript">
        alert("Su puntaje es 6!");
        window.location.href="../res.php";
        </script>';
      }
if ($sum ==7 ){
 echo'<script type="text/javascript">
        alert("Su puntaje es 7!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==8 ){
  echo'<script type="text/javascript">
        alert("Su puntaje es 8!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==9 ){
 echo'<script type="text/javascript">
        alert("Su puntaje es 9! FELICITACIONES");
        window.location.href="../res.php";
        </script>'; 
}

$e_mail=$_SESSION['e_mail'];
$id_puntaje=$_SESSION['id_puntaje'];

$consulta= "SELECT * FROM registro where e_mail ='$e_mail'";
$resultado1= $conexion ->query ($consulta);
 while ($si = $resultado1 -> fetch()){
 
    try {
      $sql="UPDATE puntajes SET id_usuario = :id_usuario , quizcsxz = :suma WHERE usuario = '$si[usuario]' ";
      $consulta = $conexion->prepare($sql);
      $consulta -> execute(array(
        ':id_usuario' => $si["id_usuario"],
        ':suma' =>$sum,
        
        ));
    }

    catch(Exception $e){
      echo 'Error conectando a la base de datos: '. $e->getMessage();
    }
  }
 

?>