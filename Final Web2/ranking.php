<!DOCTYPE html>

<html class="no-js"> <!--<![endif]-->
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

  <div class="row">
    <div class="col-xs-12" id="tituloR">
      <p><div id="tituloRA"><span class="glyphicon glyphicon-star-empty"></span>Ranking</div></p>
    </div>
  </div>

  <div class="row" id="muro">

    <div class="row">

    </div>


    <?php
   
    require_once('includes/database.php');

    session_start();

    $query= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.coctel.Nombre AS coctelNombre,
     bartender.coctel.imagen, bartender.coctel.idTipo,bartender.usuario.idUsuario ,bartender.coctel.idCoctel,
      bartender.usuariococtel.fecha, SUM(bartender.puntaje.puntaje) AS sumatoria FROM usuariococtel JOIN bartender.usuario
       ON bartender.usuariococtel.idUsuario = bartender.usuario.idUsuario JOIN bartender.coctel ON bartender.usuariococtel.idCoctel
        = bartender.coctel.idCoctel JOIN bartender.tipo ON bartender.usuariococtel.idTipo = bartender.tipo.idTipo JOIN bartender.puntaje
      ON bartender.usuariococtel.idCoctel= bartender.puntaje.idCoctel GROUP BY bartender.usuariococtel.idCoctel ORDER BY sumatoria DESC";  



     $result= mysqli_query($cxn,$query);


     while($row = mysqli_fetch_array($result)) {
 
     echo "<div class='col-xs-11 col-sm-5 col-md-3' id='coctel'>";
     echo  "<div class='thumbnail' >";
      echo "<div class='col-xs-2 col-sm-2 col-md-2' id='tipo'>";

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
        echo"</div>";
        echo"<div class='col-xs-10 col-sm-10 col-md-10' id='nomC'> ";
          echo"<h3 class='nombreCocR'> <a href='coctel.php?idCoctel=".$row['idCoctel']."'> ".$row['coctelNombre']."</a></h3>";
        echo"</div>";
        echo"<a href='coctel.php?idCoctel=".$row['idCoctel']."'><img data-src='holder.js/300x300' src=".$row['imagen']."></a>";
        echo"<div class='caption'>";
          echo"<div class='infoUMuro' >";
            echo"<img class='image-responsive'  src='img/usuario2.png' height='25' width='25' id='autorC'> ";
            echo"<a href='perfilSeguidor.php'>".$row['usuarioNombre']."</a>";
            echo"<span class='glyphicon glyphicon-star-empty' height='35' width='35' id='imgZDR'></span>";
        
 
   
            echo $row['sumatoria'];

            echo "</br>";
             echo "</br>";
            echo "      Fecha ";
            echo $row['fecha'];
          echo"</div>";
        echo"</div>";
      echo"</div>";
    echo"</div>";
  }

  
   

    ?>
   

        
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