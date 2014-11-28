jQuery(document).ready(function($){
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
				window.location.replace("home.php");
			}else{
				console.log("No entre T_T");
				window.location.replace("index.php");
			}
			
		}).error(function(error){
			console.log("Error: "+ error);
		})
	})
});


  function init(){

  	 (function(){
              var dropzone = document.getElementById('dropzone');

              var displayUploads=function(data){
                var uploads=document.getElementById('uploads'),
                anchor,
                x;
                for (x=0;x<data.length; x=x+1) {
                  anchor=document.createElement('a');
                  anchor.href=data[x].file;
                  anchor.innerText=data[x].name;

                   var nombre=data[x].name;

                   $.ajax({
                    type: "POST",
                    url: "includes/agrefarImg.php",
                    data: { img: nombre}
                   }).done(function(result)){

                   })
                    success(function(result)){

                    }


                   

                  uploads.appendChild(anchor);
                }
                alert(nombre);
              }

              var upload=function(files){
                var formData = new FormData(),
                xhr= new XMLHttpRequest(),
                x;
                for (x=0;x<files.length;x=x+1) {
                  formData.append('file[]',files[x]);
                }

                xhr.onload=function(){
                  var data=JSON.parse(this.responseText);
                  console.log(data);
                  displayUploads(data);
                }

                xhr.open('post','upload.php');
                xhr.send(formData);

              }


               dropzone.ondrop=function(e){

                e.preventDefault();
                this.className='dropzone';
                upload(e.dataTransfer.files);

              };

              dropzone.ondragover=function(){

                this.className='dropzone dragover';
                return false;

              };

               dropzone.ondragleave=function(){

                this.className='dropzone';
                return false;

              };


              }()); 
}



  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
