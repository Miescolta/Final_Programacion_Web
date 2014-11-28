<!DOCTYPE html>
<html class="no-js"> 
<head>
  
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  body {
    padding-top: 50px;
    padding-bottom: 20px;
  }
  </style>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

 
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="inicialR" onload="inita()">




  <div class="navbar  navbar-fixed-top" role="navigation" id="HA">
    <ul class="nav nav-group nav-justified" id="headerF">
      <div class="col-xs-3 col-sm-2 col-md-1">
       <img class="navbar-brand" src="img/busq.png">
     </div>
     <div class="col-xs-6 col-sm-6 col-md-6">
       <img id="logoNegro" src="img/logo.png">
     </div>
     <div class="col-xs-3 col-sm-3 col-md-3" id="menuHeader">
      <div class="btn-group">
        <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
          <img id="imgHeader" src="img/usuario.png"></span> 
        </button>
        <ul class="dropdown-menu" role="menu">
         <li class="op"><a href="home.php">Inicio</a></li>
         <li class="op"><a href="perfil.php">Perfil</a></li>
         <li class="op"><a href="ranking.php">Ranking</a></li>
         <li class="op"><a href="cerrar.php">Logout</a></li>
       </ul>
     </div>
   </div>
 </ul>
</div>


<div class="container" id="pIniR"> 

 

  <?php

  require_once('includes/database.php');

  session_start();



  $coctel= $_GET["idCoctel"];

  $_SESSION["coctel"]=$coctel;
  //$coctel =$_SESSION["coctel"];

  $query="SELECT bartender.coctel.idCoctel, bartender.coctel.Nombre, bartender.coctel.idTipo, bartender.coctel.preparacion, bartender.tipo.Nombre AS nombreTipo,
  bartender.coctel.imagen, bartender.coctel.descripcion, bartender.coctel.ingredientes 
  FROM bartender.coctel JOIN 
      bartender.tipo ON bartender.coctel.idTipo =  
      bartender.tipo.idTipo  WHERE coctel.idCoctel= '$coctel'";

  $result= mysqli_query($cxn,$query);
  while($row = mysqli_fetch_array($result)) {


    echo"<div class='row'>";
    echo"<div class='col-xs-12' id='datosCocT'>";
    echo"<h4 class='agregar'> ".$row['Nombre']."</h4>";
    echo"</div>";
    echo"</div>";

    echo"<div class='row'>";

    echo"<div class='col-xs-5' id='imgCoc'>";
    echo"<figure><img id='imagenCoctel' src=".$row['imagen'].">";
    echo"</figure>";
    echo"</div>";   

    echo"<div class='col-xs-6'>";
    echo"<h1 class='indexTituloAN'>".$row['descripcion']."</h1>";
    echo"</div>";

    echo"<div class='col-xs-6' >";
    echo"<h1 class='indexTituloA'>Tipo:</h1>";
    echo"</div>";

    echo"<div class='col-xs-4 col-sm-8' id='datosCocTD'>";
    echo"<p class='info'> ".$row['nombreTipo']." </p>";


    echo"<h4>Vuelve famoso este coctel, sumale una estrella: <a href='sumarCalificacion.php?califica=1'><span class='glyphicon glyphicon-star-empty' height='900' width='900'  ></span></a> </h4>";
 

echo "<div class='fb-like' data-href='https://developers.facebook.com/docs/plugins/' data-layout='standard' data-action='like'></div>";
   

    echo"</div>";

    echo"</div>";


    echo"<div class='row' >";
    echo"<div class='col-xs-12' id='titulosAgregar'>";
    echo"<div class='col-xs-6'>";
    echo"<h1 class='indexTituloI'>Ingredientes:   </h1>";
    echo"</div>";
    echo"</div>   "; 

    echo"<div class='col-xs-12 col-md-4'>";
    echo"<div class='col-xs-12'>";

    echo"<p class='ingre'>".$row['ingredientes']."</p>";


    echo"</div>";

    echo"</div>";
    echo"</div>";

    echo"</div>";

    echo"<div class='row' >";
    echo"<div class='col-xs-11'>";
    echo"<h1 class='indexTituloR'>Modo de preparación</h1>";
    echo"</div>";

    echo"<div class='col-xs-10 col-sm-11 col-md-12' id='receta'>";
    echo"<p id='pp'>".$row['preparacion']." </p>";

    

  }

  ?>


<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<!-- end htmlcommentbox.com -->

<div class="col-xs-11">
 

<form action="agregarComentario.php" method="POST">
<input type="text" name="comentario"><br>
<input type="submit" class="submit" value=" Comentar " />
</form>

<br>
 <h4> COMENTARIOS</h4>

<?php

$idusu= $_SESSION["username"];

$queryC="SELECT bartender.comentarios.comentario, bartender.usuario.Nombre AS usuarioNombre, bartender.comentarios.idUsuario FROM bartender.comentarios JOIN 
      bartender.usuario ON bartender.comentarios.idUsuario =  
      bartender.usuario.idUsuario WHERE comentarios.idCoctel = '$coctel'";


$result= mysqli_query($cxn,$queryC);
while($row = mysqli_fetch_array($result)) {

  echo "<div>";
  
  if($row['idUsuario']==$idusu){
      echo "<h4 ><a href='perfil.php' id='nombri'>".$row['usuarioNombre']."</a></h4>";
    }else{
      echo "<a href='perfilSeguidor.php?idSeguidor=".$row['idUsuario']."'>".$row['usuarioNombre']."</a>";
    }

  echo "<p id='comentari'> ". $row['comentario'] . "</p>";
  echo "</div>";
  




    }


?>


</div>

</div>

</div>

 
</div>

<footer>
  <p>&copy; MMCJK 2014</p>
</footer>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>