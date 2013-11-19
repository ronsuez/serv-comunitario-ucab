<?php echo  $header; 
	
	 if( $this->session->userdata('isLoggedIn') ) {
        		
        
       		redirect('/dashboard'); //redirige al dashboard
 	 }

?>
<style>


#login-box{
	border-radius: 3px;
	border: 1px solid #D6D6D6;
	padding: 30px;
	background-color: white; 
}

#login-box label{

	font-size: 14px;
}

body {
	background-color: #e6e6e6;
}

h2, h4 {
	text-align: center;
}

#error-message{

	font-size: 14px;
	font-style: italic;
	color: red;

}

#help-box{

	font-size: 12px;
}


</style>

<script type="text/javascript">


</script>
<div class="container container-main">
	<div id= "main-content" class="row jumbotron">
	<!-- 	<div class="col-xs-12 col-md-1">
		</div> -->
		<div id ="help-box" class="col-md-7 col-sm-7 col-lg-7">
			<br>
			<div class="logo"><a href="https://schooltraq.com/">Servcom-UCAB</a></div>
			<h3 class="login-heading">Que bueno tenerte de vuelta :)</h3>
			<div class="login-links">
				<p>
					Necesitas un cuenta?<a href="#">Registrate en dos segundos &rarr;</a><br />
					<span class="forgot-pass">Olvidaste tu clave? <a href="#">Presiona aqui &rarr;</a></span>
				</p>
			</div>
		</div>
		<div id="login-box" class="col-sm-5 col-md-5 col-lg-5">

			<form id="login" method="POST"  action="login" class="form-signin">
				<h2 class="form-signin-heading">Inicia Sesi&#243;n</h2>
				<h4 class="form-signin-heading">Para acceder a los servicios del sistema</h4>
					  <div class="form-group">
							    <label for="user">Usuario</label>
							    <input type="text" name="user" id="user" class="form-control" placeholder="C&#233;dula" required autofocus>
					</div>
					  <div class="form-group">
							    <label for="pass">Clave de acceso</label>
							    <input type="password" name="pass" id="pass" class="form-control" placeholder="Contrase&#241;a" required>
					</div>
					

			<span id="error-message">
				<?php if($this->input->get("login")=="-1"){
						 echo "Ups. Parece que hubo un problema con tus datos.";
						}else{
							echo "";
						}

				?>

			</span>
				
					<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesi&#243;n</button>
			</form>
			
		</div>
	</div>
</div>

<?= $footer; ?>
