<?php session_start(); ?>
   <?php
   include_once "database.php" ;
   $correo =$_POST["correo"];
   $pw =$_POST["pw"];
   $result="";
   $coco="";
   $validar="SELECT `idUsuario` AS idUsuario FROM bartender.usuario WHERE bartender.usuario.Correo='$correo' AND bartender.usuario.Contrasena='$pw'";
   $usuarioValido = mysqli_query($cxn,$validar);

    if(mysqli_num_rows($usuarioValido) < 1)
    {
        $result["error"]="true";
    }

    else{
      while ($row= mysqli_fetch_array($usuarioValido)) {
        $_SESSION["username"] = $row["idUsuario"];
        $result["error"]="false";
      }
    }

  echo  json_encode($result);
    ?>
