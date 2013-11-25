
<?= $header; ?>

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
	margin-top: 0px;
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

		<div class="col-xs-12 col-md-12">
			<br>
		<div class="logo"><a href="#">Servcom-UCAB</a></div>

		<div id ="help-box" class="col-md-6 col-sm-6 col-lg-6">
			<br>
			<div class="logo"><a href="#">Servcom-UCAB</a></div>

			<h3 class="login-heading">Que bueno tenerte de vuelta :)</h3>
			<div class="login-links">
				<p>
					Necesitas un cuenta?<a href="registro_form">Registrate en dos segundos &rarr;</a><br />
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
							    <input type="text" name="user" id="user" class="form-control" placeholder="Nombre de ususario" required autofocus>
					</div>
					  <div class="form-group">
							    <label for="pass">Contrase&#241;a</label>
							    <input type="password" name="pass" id="pass" class="form-control" placeholder="Clave de acceso" required>
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

<?php
 	 if (isset($_GET["user"]) && $_GET["user"]) {?>
 	 	<script type="text/javascript">
 	 		$("#user").val(<?php echo '"'.$_GET["user"].'"' ?>);
 	 	</script>
 	 <?php }?>


<?= $footer; ?>
