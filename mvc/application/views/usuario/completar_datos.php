<?php echo $header;
	
	$user = $this->session->userdata('user_name');

	$t = $tipo;

	if ($t == "CO") {
		$tipo_completo = "Coordinador";	
	}
	elseif ($t == "DI") {
		$tipo_completo = "Director de Escuela";
	}
	elseif ($t == "PR") {
		$tipo_completo = "Proyeccion a la Comunidad";
	}

	//var_dump($tipo);

?>



<style type="text/css">

body {
	background-color: #e6e6e6;
	padding-top: 0px;
}

h2, h4{
	text-align: center;
}

h4 {
	color: #BDBDBD;
	margin-top: 0px;
	margin-bottom: 0px;
}

label {
	font-weight: lighter;
	margin-bottom: 0px;
}

form label.error{
	color:#e33241;
	margin-left: 2px;
	font-weight: lighter;
	font-size: 12px; 
}


</style>

<div class="container container-main">
	<div id= "main-content" class="row jumbotron col-xs-6 col-md-6 col-md-offset-3">

		<form name="completar_datos_usuario" id="completar_datos_usuario" action="completar_datos_usuario" method="POST"  action="login" class="form-signin">

			<h2 class="form-signin-heading">Registro de datos de <?php echo $tipo_completo; ?></h2>
			<h4 class="form-signin-heading">Complete el formulario para una experiencia m&aacute;s personalizada</h4>
			<br>
			<div class="form-group">
				<label for="nombre">Nombre(s)</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre(s)" autofocus>
			</div>
			
			<div class="form-group">
				<label for="apellido">Apellido(s)</label>
				<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido(s)">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Correo electronico">
			</div>
			
			<div class="form-group">
				<label for="celular">Celular</label>
				<input type="text" name="celular" id="celular" class="form-control" placeholder="Numero de celular">
			</div>

			<div class="form-group">
				<label for="telefono">Telefono de habitaci&oacute;n</label>
				<input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono de habitaci&oacute;n">
			</div>

			<div class="form-group">
				<label for="carrera" id="carrera">Escuela</label>
				<select id="escuela" name="escuela" class="form-control">
					<option value="">Seleccione</option>
					<option value="ingenieria informatica">Ingenier&iacute;a Inform&aacute;tica</option>
					<option value="ingenieria civil">Ingenier&iacute;a Civil</option>
					<option value="ingenieria industrial">Ingenier&iacute;a Industrial</option>
					<option value="comunicacion social">Comunicaci&oacute;n Social</option>
					<option value="administracion">Administraci&oacute;n</option>
					<option value="contaduria">Contadur&iacute;a</option>
					<option value="relaciones industriales">Relaciones Industriales</option>
					<option value="educacion">Educaci&oacute;n</option>
					<option value="derecho">Derecho</option>
				</select>
			</div>

			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>
		</form>

	</div>
</div>
</div>

<?php echo $footer;?>

<script>

<?php
if ($t == "PR") {
	echo '$("#escuela").hide();';
	echo '$("#carrera").hide()';
};
?>
	


//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
	return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");

$("#completar_datos_usuario").validate({

	rules: {
		nombre:{
			alpha: true
		},
		apellido:{
			alpha: true
		},
		celular:{
			required: true,
		},
		telefono:{
			required: true,
		},
		email:{
			required:true
		}
	},

	messages:{
		nombre:{
			required: mensajes.reglas.requerido
		},
		apellido:{
			required:mensajes.reglas.requerido
		},
		celular:{
			required:mensajes.reglas.requerido
		},
		telefono:{
			required: mensajes.reglas.requerido,
		},
		email:{
			required :mensajes.reglas.requerido
		}
	}

});


</script>