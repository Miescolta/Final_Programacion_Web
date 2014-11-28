<?php //se conecta

require_once('includes/database.php');

//inicia, continua session
session_start();
?>

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

<body class="inicialR">
  <div class="navbar navbar-fixed-top" role="navigation" id="InicialHR">
    <ul class="nav nav-group nav-justified" id="headerI">
     <img class="navbar-brand" id="logoBlanco" src="img/logo.png">  
   </ul>
 </div>


 <div class="container" id="pIniRI"> 
  <div class="row" id="llenarDatosR">
    <form class = "formulario" action="AgregarUsuario.php" method="POST">

      <div class="col-xs-11">
        <h1 class="indexTituloRr">Usuario</h1>
      </div>

      <div class="col-xs-11 col-sm-6 col-md-6">
        <input  class="datos" type="text" name="usuario">
      </div>



      <div class="col-xs-11">
        <h1 class="indexTituloRr">Correo electronico</h1>
      </div>

      <div class="col-xs-11 col-sm-6 col-md-6">
        <input  class="datos" type="text" name="correo">
      </div>

      <div class="col-xs-11">
        <h1 class="indexTituloRr">Contraseña </h1>
      </div>

      <div class="col-xs-11 col-sm-6 col-md-6">
        <input class="datos" type="password" name="pass">   
      </div>


     



    </div>

    <div class="col-xs-4" id="BIRR">
      <input class='btn btn-primary btn-sm' id="butM" type="submit" name="Registrar" value="Registrar" >
      </div>

 
    </form>

   

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