<?php
session_start();
require_once "conexion.php";

$e_mail = $_POST['e_mail'];
$pwd = $_POST['contrasena'];
$per = '1';  


    if(isset($_POST['contrasena']))  

    {  

    $consulta= "SELECT * FROM registro where e_mail = '$e_mail'";
      $resultado= $conexion ->query ($consulta);
      $cuenta = $resultado -> fetch();
      $cont = $cuenta ["contrasena"];
      $consulta2= "SELECT * FROM registro where e_mail = '$e_mail'";
      $resultado2= $conexion ->query ($consulta);
      $cuenta2 = $resultado2 -> fetch();
      $email = $cuenta2 ["e_mail"];
     try {
        include "conexion.php";


        $sql="SELECT * FROM registro where e_mail =:e_mail and contrasena = :passwd ";
        $consulta1 = $conexion->prepare($sql);
        $consulta1 -> execute(array(
            ':e_mail' => $e_mail,
            ':passwd' => $pwd,
            ));
        $cuenta = $consulta1 ->rowCount();  
        $resultado1 = $consulta1 ->fetch(PDO::FETCH_OBJ);;
        $perfil = $resultado1 -> perfil;

        if($pwd!="" && $pwd>0)
        {
                if ($cuenta > 0 && $perfil ==1 && $pwd == $cont ) {
                        $_SESSION['e_mail']=$e_mail;                               
                         header("location:../perfiladm.php");  
                    }

                    elseif  ($perfil ==0 && $pwd == $cont) {    
                      $_SESSION['e_mail']=$e_mail  ;  
                        header("location:../bachillerato.php");   
                    }
                    
                    elseif ($e_mail==$email &&  $pwd != $cont){
                      echo'<script type="text/javascript">
                        alert("Contraseña Incorrecta! Intenta de nuevo");
                        window.location.href="../login.php";
                        </script>';


                    }  
                    else {
                      echo'<script type="text/javascript">
                        alert("Registrate antes de comenzar!");
                        window.location.href="../register.php";
                        </script>';
                    }
              


                $_SESSION['id']=$resultado['id_usuario'];   
                $_SESSION['e_mail']=$e_mail;
               $_SESSION['perfil']=$per;
                $_SESSION['contrasena']=$pwd;
}else {
         echo'<script type="text/javascript">
        alert("Campos Vacíos!");
        window.location.href="../login.php";
        </script>';

}
  
}catch(Exception $e){
    echo 'Error conectando a la base de datos: '. $e->getMessage();
}

} 

?>