<!DOCTYPE html>
<html class="no-js"> 
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

 <div id="fb-root"></div>


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
      <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown"  >
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


<div class="container" id="menuHomee">

  <div class="row" >
    <div class="col-xs-6" id="tituloHome">
      <button type="submit" class="btn btn-default" > <a href="agregarCoctel.php"><span class="glyphicon glyphicon-plus" >
      </span>Agregar Coctel </a></button>

    </div>

    <div class="col-xs-5" id="tituloHome">

      <form id="myForm" action="home.php" method="post">
        <select class="form-control" id="mySelection" name="mySelection" onChange="$('#myForm').submit();" >
          <option value="0">TIPO DE COCTEL</option>
          <option value="6">Todos</option>
          <option value="1">Picante</option>
          <option value="2">Refrescante</option>
          <option value="3">Amargo</option>
          <option value="4">Dulce</option>
          <option value="5">Acido</option>

        </select>
      </form>

    </div>
  </div>

</div>

<div class="container " id="muro">

  <div class ="row col-sm-12 col-md-12">

    <!---COCTEL-->

    <?php
    

    require_once('includes/database.php');

    session_start();


    $usuario= $_SESSION["username"];




    
    if (isset($_POST["mySelection"])){
      if($_POST['mySelection']==0|| $_POST['mySelection']==1||$_POST['mySelection']==2||$_POST['mySelection']==3||$_POST['mySelection']==4||$_POST['mySelection']==5){

        $tipo=$_POST['mySelection'];
        
        $query= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.coctel.Nombre AS coctelNombre, 
        bartender.coctel.imagen, bartender.coctel.idTipo ,bartender.usuario.idUsuario,bartender.coctel.idCoctel 
        FROM usuariococtel 
        JOIN bartender.usuario ON bartender.usuariococtel.idUsuario =  
        bartender.usuario.idUsuario JOIN bartender.coctel ON bartender.usuariococtel.idCoctel = 
        bartender.coctel.idCoctel JOIN bartender.tipo ON bartender.usuariococtel.idTipo = 
        bartender.tipo.idTipo WHERE bartender.coctel.idTipo ='$tipo' ";

      }
      if($_POST['mySelection']==6){

        $query= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.coctel.Nombre AS coctelNombre, 
        bartender.coctel.imagen, bartender.coctel.idTipo,bartender.usuario.idUsuario ,bartender.coctel.idCoctel
        FROM usuariococtel 
        JOIN bartender.usuario ON bartender.usuariococtel.idUsuario =  
        bartender.usuario.idUsuario JOIN bartender.coctel ON bartender.usuariococtel.idCoctel = 
        bartender.coctel.idCoctel JOIN bartender.tipo ON bartender.usuariococtel.idTipo = 
        bartender.tipo.idTipo
        ";

      }

    }
    else{


      $query= "SELECT bartender.usuario.Nombre AS usuarioNombre, bartender.coctel.Nombre AS coctelNombre, 
      bartender.coctel.imagen, bartender.coctel.idTipo,bartender.usuario.idUsuario ,bartender.coctel.idCoctel
      FROM usuariococtel 
      JOIN bartender.usuario ON bartender.usuariococtel.idUsuario =  
      bartender.usuario.idUsuario JOIN bartender.coctel ON bartender.usuariococtel.idCoctel = 
      bartender.coctel.idCoctel JOIN bartender.tipo ON bartender.usuariococtel.idTipo = 
      bartender.tipo.idTipo";

    }

    $result= mysqli_query($cxn,$query);


      while($row = mysqli_fetch_array($result)) {

       echo "<div class='col-xs-6 col-sm-4 col-md-3'>";
       echo  "<div  id='coctelHome'>";
       echo "<div class='col-xs-2 col-md-1' id='tipoH'>";






       if($row['idTipo']==1){

        echo "<img class='image-responsive' src='img/spiceM.png'  height='40' width='40' id='tipoHome'> "; 

      }else if($row['idTipo']==2){

        echo "<img class='image-responsive' src='img/hoja.png'  height='40' width='40' id='tipoHome'> "; 


      }
      else if($row['idTipo']==3){
        echo "<img class='image-responsive' src='img/cafeM.png'  height='40' width='40' id='tipoHome'> "; 


      }
      else if($row['idTipo']==4){
        echo "<img class='image-responsive' src='img/dulce.png'  height='40' width='40' id='tipoHome'> "; 


      }
      else if($row['idTipo']==5){
        echo "<img class='image-responsive' src='img/limonM.png'  height='40' width='40' id='tipoHome'> "; 


      }


      echo  "</div>";
      echo" <div class='col-xs-10' id='nomCH'> ";

      echo" <h3 class='nombreCoc'>  <a href='coctel.php?idCoctel=".$row['idCoctel']."'> ".$row['coctelNombre']."</a></h3>";
      echo "</div>";
      echo "<a href='coctel.php?idCoctel=".$row['idCoctel']."'><img src=".$row['imagen']."  id='imgSi' ></a>";
      echo"<div class='infoUMuro' >";
      echo "<img class='image-responsive'  src='img/usuario2.png' height='15' width='15' id='autorC'>"; 

      if($row['idUsuario']==$usuario){
        echo "<a href='perfil.php'>".$row['usuarioNombre']."</a>";
      }else{
        echo "<a href='perfilSeguidor.php?idSeguidor=".$row['idUsuario']."'>".$row['usuarioNombre']."</a>";
      }
      echo "<span class='glyphicon glyphicon-star-empty' height='20' width='20'  id='imgZD'></span>";

      $queryS= "SELECT bartender.puntaje.idCoctel, SUM(bartender.puntaje.puntaje) AS sumatoria FROM bartender.puntaje WHERE bartender.puntaje.idCoctel= '$row[idCoctel]'";
      $resultS= mysqli_query($cxn,$queryS);
      while($row = mysqli_fetch_array($resultS)) {

        echo $row['sumatoria'];

      }
    //echo $row['puntaje'];
      echo  "<a href='http://www.facebook.com/sharer.php?u=http://liquor.com' target='_blank'><img src='http://www.simplesharebuttons.com/images/somacro/facebook.png' alt='Facebook' height='20' width='20'/></a>";
      echo  "</div>";
      echo "</div>";

      echo "</div>";



    }

    ?>




  </div>
</div>
<hr>

<footer>
  <p>&copy; MMCJK 2014</p>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>