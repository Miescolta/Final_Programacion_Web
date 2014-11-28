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

<body class="inicial">

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1374936996132994&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="navbar navbar-fixed-top" role="navigation" id="InicialHF">
    <div class="col-xs-11 col-sm-11 col-md-12">
    <ul class="nav nav-group nav-justified" id="headerI">
     <img class="navbar-brand" id="logoBlanco" src="img/logoBlanco.png">  
   </ul>
 </div>
 </div>


 <div class="container" id="pIni"> 
   <div class="row" id="mensajeInicial">
    <div class="col-xs-11 ">
      <p class="textoIndex">Bienvenido a tu mayor experiencia en cocteleria para disfrutar
      </p>      
    </div>
  </div>


  <div class="row" id="llenarDatos">

    <form class = "formulario" action="includes/validarUsuario.php" method="POST">

      <div class="col-xs-12 col-sm-12 col-md-12">
        <h1 class="indexTitulo">Usuario</h1>
      </div>

      <div class="col-xs-11 col-sm-5 col-md-4">
        <input  class="datos" id="correoLogin" type="text" name="correo" placeholder="Correo">
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <h1 class="indexTitulo">Contraseña </h1>
      </div>

      <div class="col-xs-11 col-sm-5 col-md-4">
        <input class="datos" id="pwLogin" type="password" name="pw" placeholder="Contraseña">   
      </div>
    </div>



    <div class="col-xs-4 col-sm-1 col-md-1" id="BI">
     <input class="btn btn-primary btn-sm" role="button" id="butM" type="submit" value="Entrar">
    </div>

    <div class="col-xs-4 col-sm-1 col-md-1" id="BID">
      <input class="btn btn-primary btn-sm" role="button" id="butMi" onclick="location.href='registro.php';" value="Registrar">
    </div>



   
    
    </form>

  
  </div>    
</div>     
</div>



 


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
