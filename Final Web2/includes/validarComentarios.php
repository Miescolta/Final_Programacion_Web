<?php

$q = $_GET['q'];

require_once('database.php');

session_start();

$usuario= $_SESSION["username"];
$coctel =$_SESSION["coctel"];

echo $usuario;


$insql="INSERT INTO bartender.comentarios(`idCoctel`, `idUsuario`, `comentario`) VALUES ('$coctel',$usuario','$q')";

$result = mysqli_query($cxn,$insql);

$sql="SELECT bartender.comentarios.comentario FROM bartender.comentarios WHERE comentarios.idCoctel ='".$coctel."'";

$result = mysqli_query($cxn,$sql);

while($row = mysqli_fetch_array($result)) {
 
  echo "<p>". $row['comentario'] . "</p>";
 
}
 mysqli_close($cxn);

?>