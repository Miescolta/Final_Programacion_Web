<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();



$idUsuario= $_SESSION["username"];
//variables que reciben 
$idUsuarioSeguido=$_GET["idSigo"];


echo $idUsuario;
echo $idUsuarioSeguido;



//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO bartender.seguidores (`idUsuario`,`idUsuarioSeguido`) VALUES ('$idUsuario','$idUsuarioSeguido')";

mysqli_query($cxn,$query);

//cuando acaba vuelve a la pagina de login
header('Location: perfilSeguidor.php?idSeguidor='.$idUsuarioSeguido);

?>