<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();


//variables que reciben 
$nombre = $_POST["usuario"];
$correo = $_POST["correo"];
$contrasena= $_POST["pass"];


//inserta los datos en la base de datos, query descrito en word
$query= "INSERT INTO bartender.usuario (`idUsuario`, `Nombre`, `Correo`, `Contrasena`) VALUES
 ('', '$nombre', '$correo','$contrasena')";

mysqli_query($cxn,$query);



//cuando acaba vuelve a la pagina de login
header('Location: index.php');

?>