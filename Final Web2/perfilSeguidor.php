<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
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
<body>


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


<div class="container">

 <div class="row" id="usuarioPe">

  <div class="col-xs-5 col-sm-5 col-md-2">
    <img src="img/usuario2.png" class="usuarioP">
  </div>
  <div class="col-xs-7 col-sm-7 col-md-8" id="nombreP">

    <?php
    

    require_once('includes/database.php');

    session_start();

    $usuario= $_GET["idSeguidor"];
    $miusuario= $_SESSION["username"];

    $queryNombre= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.usuario.idUsuario 
    FROM bartender.usuario WHERE usuario.idUsuario= '$usuario'";
    $resultN= mysqli_query($cxn,$queryNombre);
    while($row = mysqli_fetch_array($resultN)) {
    echo" <p>".$row['usuarioNombre']."</p> ";
    }


    ?>
    <p id="ciudad">Cali, Colombia</p>

<?php
  $query="SELECT bartender.seguidores.idUsuarioSeguido FROM bartender.seguidores WHERE idUsuario='$miusuario'";

 $resultN= mysqli_query($cxn,$query);



 while($row = mysqli_fetch_array($resultN)) {

    echo "hola";

  echo"<div class='col-xs-9' id='seguirB'>";


  if($usuario==$row['idUsuarioSeguido']){

   echo "<p>SIGUIENDO</p>";
}
 
 if($row['idUsuarioSeguido']!=$usuario){

  echo "<a class='btn btn-primary btn-sm' role='button' id='butM' href='agregarSeguidor.php?idSigo=$usuario'><span class='glyphicon glyphicon-plus' id='masB'></span> SEGUIR </a>";
 
  }

 

}


?>

  </div>




</div>

</div>
</div>
<div class="row" >
  <div class="col-xs-12" id="tituloP">
    <p class="titulo">Entradas</p>
  </div>
</div>



<div class="container">

 <div class="row" id="muro">




  <?php

  $query= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.coctel.imagen, bartender.coctel.idCoctel,
  bartender.coctel.idTipo,
  bartender.coctel.Nombre AS coctelNombre FROM usuariococtel JOIN 
  bartender.usuario ON bartender.usuariococtel.idUsuario =  
  bartender.usuario.idUsuario JOIN bartender.coctel ON bartender.usuariococtel.idCoctel = 
  bartender.coctel.idCoctel JOIN bartender.tipo ON bartender.usuariococtel.idTipo = 
  bartender.tipo.idTipo WHERE usuariococtel.idUsuario= '$usuario'";



  $result= mysqli_query($cxn,$query);
  while($row = mysqli_fetch_array($result)) {

  echo "<div class='col-xs-11 col-sm-5 col-md-3' id='coctel'>";
     echo  "<div class='thumbnail' >";
     echo "<div class='col-xs-2 col-md-1' id='tipoH'>";
     if($row['idTipo']==1){

      echo "<img class='image-responsive' src='img/spiceM.png'  height='40' width='40' id='tipoRanking'> "; 

    }else if($row['idTipo']==2){

      echo "<img class='image-responsive' src='img/hoja.png'  height='40' width='40' id='tipoRanking'> "; 


    }
    else if($row['idTipo']==3){
      echo "<img class='image-responsive' src='img/cafeM.png'  height='40' width='40' id='tipoRanking'> "; 


    }
    else if($row['idTipo']==4){
      echo "<img class='image-responsive' src='img/dulce.png'  height='40' width='40' id='tipoRanking'> "; 


    }
    else if($row['idTipo']==5){
      echo "<img class='image-responsive' src='img/limonM.png'  height='40' width='40' id='tipoRanking'> "; 


    }

    echo  "</div>";
    echo" <div class='col-xs-10' id='nomCH'> ";
    echo" <h3 class='nombreCoc'>  <a href='coctel.php?idCoctel=".$row['idCoctel']."'> ".$row['coctelNombre']."</a></h3>";
    echo "</div>";
    echo "<a href='coctel.php?idCoctel=".$row['idCoctel']."'><img src=".$row['imagen']."  id='imgSi' ></a>";
    echo"<div class='infoUMuro' >";
    echo "<img class='image-responsive'  src='img/usuario2.png' height='15' width='15' id='autorC'>"; 
    echo "<a href='perfilSeguidor.html'>".$row['usuarioNombre']."</a>";
    echo "<span class='glyphicon glyphicon-star-empty' height='15' width='15' id='imgZD'></span>";



    $queryS= "SELECT bartender.puntaje.idCoctel, SUM(bartender.puntaje.puntaje) AS sumatoria FROM bartender.puntaje WHERE bartender.puntaje.idCoctel= '$row[idCoctel]'";
    $resultS= mysqli_query($cxn,$queryS);
     while($row = mysqli_fetch_array($resultS)) {

      echo $row['sumatoria'];

     }
    echo "<a href='http://www.facebook.com/sharer.php?u=http://liquor.com' target='_blank'><img src='http://www.simplesharebuttons.com/images/somacro/facebook.png' alt='Facebook' height='20' width='20'/></a>";
    echo  "</div>";
    echo "</div>";
    echo "</div>";
}

?>


</div>


<hr>


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