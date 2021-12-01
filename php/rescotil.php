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
$p10=$_POS["p10"];

$sum=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;

if ($sum ==1){
echo'<script type="text/javascript">
        alert("1!");
        window.location.href="../res.php";
        </script>';
} 
if ($sum ==2 ){
  echo'<script type="text/javascript">
        alert("2!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==3 ){
 echo'<script type="text/javascript">
        alert("3!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==4 ){
 echo'<script type="text/javascript">
        alert("4!");
        window.location.href="../res.php";
        </script>'; 
}
if ($sum ==5 ){
 echo'<script type="text/javascript">
        alert("5!");
        window.location.href="../res.php";
        </script>'; 
}
if ($sum ==6 ){
  echo'<script type="text/javascript">
        alert("6!");
        window.location.href="../res.php";
        </script>';
      }
if ($sum ==7 ){
 echo'<script type="text/javascript">
        alert("7");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==8 ){
  echo'<script type="text/javascript">
        alert("8!");
        window.location.href="../res.php";
        </script>';
}
if ($sum ==9 ){
 echo'<script type="text/javascript">
        alert("9!");
        window.location.href="../res.php";
        </script>'; 
}
if ($sum ==10 ){
 echo'<script type="text/javascript">
        alert("10!");
        window.location.href="../res.php";
        </script>'; 
}

$e_mail=$_SESSION['e_mail'];

$consulta= "SELECT * FROM registro where e_mail ='$e_mail'";
$resultado1= $conexion ->query ($consulta);
 while ($si = $resultado1 -> fetch()){
 
    try {
      $sql="INSERT INTO quizcotil (id_puntaje, id_usuario, sumatoria) VALUES(NULL,:id_usuario,:sum)";
      $consulta = $conexion->prepare($sql);
      $consulta -> execute(array(
        ':id_usuario' => $si["id_usuario"],
        ':sum' =>$sum
        
        ));
    }

    catch(Exception $e){
      echo 'Error conectando a la base de datos: '. $e->getMessage();
    }
  }
 

?>