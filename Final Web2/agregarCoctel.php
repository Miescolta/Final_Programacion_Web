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

<body class="inicialR" onload="init()">
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
  <div class="row">
    <div class="col-xs-12">
      <h4 class="agregara"> Agregar Coctel</h4>
    </div>
  </div>



  <form id="contact" class = "formulario" action="subirCoctel.php" method="POST" autocomplete="on">

    <div class="row" >

      <div class="col-xs-5 col-sm-5 col-md-5" id="llenarDatosA">

           <div id="uploads"></div>
          <div class="dropzone" id="dropzone">drop picture</div>
          <?php
            $variablephp = "<script> js/main.js.write(nombre) </script>";
            echo "nombre imagen = $variablephp";
          ?>
        </div>   

     <div class="col-xs-6 col-sm-4 col-md-4">

      <h1 class="indexTituloANa">Nombre</h1>
    </div>


    <div class="col-xs-6 col-sm-6 col-md-6">
      <input  id="contact_nombre" class="datosA" input type="text" class="form-control"  name="nombre" autocomplete="on">

    </div>



    <div class="col-xs-6 col-sm-4 col-md-4">
      <h1 class="indexTituloA">Descripcion:</h1>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
      <input  id="contact_descripcion" class="datosA" type="text" name="descripcion" autocomplete="on">
   
    </div>

  </div>


  <div class="row" >

    <div class="col-xs-12" id="titulosAgregara">
      <div class="col-xs-6">
       <h1 class="indexTituloAa">Ingredientes:</h1>
     </div>
     <div class="col-xs-3">
      <h1 class="indexTituloAaa">Tipo:</h1>
    </div>

  </div>    



  <div class="col-xs-12">
   <div class="col-xs-6">

     

    <div id="ff"><p><textarea id="contact_ingredintes" name="ingredintes" cols="30" rows="4" class="preparacion" ></textarea> 
   

     </p>

   </div>

 </div>

 <div class="col-xs-5">
  <select id="contact_drop" class="form-control" name="tipo">
    <option value="0">Tipo</option>
    <option value="1">Picante</option>
    <option value="2">Refrescante</option>
    <option value="3">Amargo</option>
    <option value="4">Dulce</option>
    <option value="5">Acido</option>
  </select>
</div>
</div>


</div>

<div class="row" >



  <div class="col-xs-11">
    <h1 class="indexTituloR">Modo de preparación</h1>
  </div>

  <div class="col-xs-11">
    <textarea id="contact_receta" name="receta" cols="40" rows="7" class="preparacion" ></textarea> 
    
  </div>


</div>




<div class="row">


<div class="col-xs-4" id="BIR">
  <div id="contact_submit">       
        <button type="submit">Publicar</button>
        <?php
if(isset($_GET["error"])){
   $error= $_GET["error"];

if($error='si'){
  echo "<span>Todos los campos son requerido</span>";
}

}else{
 
}

  
?>
      </div>
  
</div>

</form>

</div>



</div>


</div>


<footer>
  <p>&copy; MMCJK 2014</p>
</footer>


  <script src="js/vendor/jquery-1.11.1.min.js"></script>


<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>


</body>
</html>