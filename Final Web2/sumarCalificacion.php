<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();


  $calf= $_GET["califica"];


$idcoc =$_SESSION["coctel"];



//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO bartender.puntaje(`idCoctel`, `puntaje`) VALUES ('$idcoc','$calf')";



mysqli_query($cxn,$query);

//cuando acaba vuelve a la pagina de login
header('Location: coctel.php?idCoctel='.$idcoc);

?>