$(document).ready(function(){
	$( "#llenarDatos" ).submit(function(event) {
  		console.log("Funciona");
 			var user=$("#correoLogin").val();
  			var pass=$("#pwLogin").val();
  			event.preventDefault();
 			 $.ajax({
			type: "POST",
			url: "includes/validarUsuario.php",
			data: { correo: user, pw: pass }
		}).done(function(){
			console.log("Solicitud enviada al API");
		}).success(function(result){
			var conca=JSON.parse(result);
			console.log("Resultado: "+conca.error);
			if(conca.error=="false"){
				console.log("Entre!!! :D");
				window.location.replace("home.html");
			}else{
				console.log("No entre T_T");
				window.location.replace("index.php");
			}
			
		}).error(function(error){
			console.log("Error: "+ error);
		})
	})
});
	
