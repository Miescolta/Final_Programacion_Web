<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bartender</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body class="inicial">
    <div class="navbar navbar-fixed-top" role="navigation" id="InicialHF">
          <ul class="nav nav-group nav-justified" id="headerI">
           <img class="navbar-brand" id="logoBlanco" src="img/logoBlanco.png">  
         </ul>
        </div>
      <div class="container" id="pIni"> 
           <div class="row" id="mensajeInicial">
            <div class="col-xs-11">
            <p class="textoIndex">Bienvenido a tu mayor experiencia en cocteleria para disfrutar
          </p>      
           </div>
            </div>
          
        
          <div class="row" id="llenarDatos" >
        <form class = "formulario" action="includes/validarUsuario.php" method="POST">                      
        <div class="col-xs-11">
           <h1 class="indexTitulo">Usuario</h1>
             </div>
                  <div class="col-xs-11">
                    <input  id="correoLogin" class="col-xs-11" type="text" name="correo" placeholder="Correo">
                     </div>
                
                      <div class="col-xs-11">
                      <h1 class="indexTitulo">Contraseña </h1>
                      </div>
                
                    <div class="col-xs-11">
                    <input id="pwLogin" class="col-xs-11"  type="password" name="pw" placeholder="Contraseña">   
                    </div>
           </div>
            
                  <div class="cont_submit col-xs-4" id="BI">
                  <input class="btn btn-primary btn-sm" role="button" id="butM" type="submit" value="Entrar">
                  </div>

                  <div class="col-xs-4" id="BID">
                  <p><a class="btn btn-primary btn-sm" role="button" id="butM" href="registro.html">  Registrar </a></p>
                  </div>
             <div class="row">
            </form>





           <div class="col-xs-12">
        <a class="btn btn-default btn-sm" role="button" id="facebook" href="home.html" >  Registrar con facebook</a>
         </div>
      </div> 
     </div>    
    </div>
        <script src="js/vendor/jquery-2.1.1.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
