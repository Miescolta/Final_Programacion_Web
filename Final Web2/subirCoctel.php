<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();



$idUsuario= $_SESSION["username"];
//variables que reciben 

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$ingredintes= $_POST["ingredintes"];
$tipo = $_POST["tipo"];
$receta= $_POST["receta"];


if(empty($nombre)||empty($descripcion)||empty($ingredintes)||empty($tipo)||empty($receta))   
  {  
    header('Location: agregarCoctel.php?error=si'); 
  }   

  else{
//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO `coctel`(`idCoctel`, `Nombre`, `idTipo`, `preparacion`, `imagen`, `descripcion`, `ingredientes`) VALUES 
('','$nombre','$tipo','$receta','img/ginfizz.jpg','$descripcion','$ingredintes')";

$queryD="INSERT INTO `usuariococtel`(`idUsuario`, `idCoctel`, `fecha`, `idTipo`) 
VALUES ('$idUsuario', '', CURDATE(), '$tipo')";


mysqli_query($cxn,$query);
mysqli_query($cxn,$queryD);
header('Location: home.php');

  }






//cuando acaba vuelve a la pagina de login


?>