<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();


$idcoc =$_SESSION["coctel"];
$idus= $_SESSION["username"];
//variables que reciben 

$comentario = $_POST["comentario"];


//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO bartender.comentarios(`idCoctel`, `idUsuario`, `comentario`) VALUES ('$idcoc','$idus','$comentario')";

mysqli_query($cxn,$query);

//cuando acaba vuelve a la pagina de login
header('Location: coctel.php?idCoctel='.$idcoc);

?>