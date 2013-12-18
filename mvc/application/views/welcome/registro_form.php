<?php echo $header;?>

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

		<form name="registro_user" id="registro_user" action="registro_user" method="POST"  action="login" class="form-signin">

			<h2 class="form-signin-heading">Registro de Usuario</h2>
			<h4 class="form-signin-heading">Complete el formulario para registrarse</h4>
			<br>
			<div class="form-group">
				<label for="cedula">Cédula</label>
				<input type="text" name="cedula" id="cedula" class="form-control" placeholder="Numero de c&#233;dula" required autofocus>
			</div>
			
			<div class="form-group">
				<label for="user">Nombre de usuario</label>
				<input type="text" name="user" id="user" class="form-control" placeholder="Nombre o nickname" required>
			</div>
			
			<div class="form-group">
				<label for="pass">Contrase&ntilde;a</label>
				<input type="password" name="pass" id="pass" class="form-control" placeholder="Clave de acceso" required>
			</div>

			<div class="form-group">
				<label for="conf_pass">Confirmar contrase&ntilde;a</label>
				<input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Confirmar clave de acceso" required>
			</div>

			<div class="form-group">
				<label for="tipo">Tipo de usuario</label>
				<select name="tipo" class="form-control">
					<option value="">-Seleccione una opción-</option>
					<option value="CO">Coordinador(a) de servicio</option>
					<option value="DI">Director(a) de escuela</option>
					<option value="PR">Proyecci&oacute;n a la comunidad</option>
				</select>
			</div>

			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
		</form>

	</div>
</div>
</div>

<?php echo $footer;?>

<script>

$("#registro_user").validate({

  rules: {
    cedula:{
      required: true,
      number: true
    },
    user:{
      required: true
    },
    pass:{
      required: true,
    },
    conf_pass:{
      required: true,
      equalTo: "#pass"
    },
    tipo:{
      required:true
    }
  },

  messages:{
    cedula: {
      required: mensajes.reglas.requerido
    },
    user:{
      required:mensajes.reglas.requerido
    },
    pass: {
      required:mensajes.reglas.requerido
    },
    conf_pass:{
      required: mensajes.reglas.requerido,
      equalTo: mensajes.reglas.equalTo
    },
    tipo:{
      required :mensajes.reglas.requerido
    }
  }

});


</script>

<?php
//Usuario existente.
   if ( isset($_GET["error"]) && ($_GET["error"] == 1) ){
   echo '<script type="text/javascript">'.
      'alert("Esta cédula o nombre de usuario ya existe")'.
    '</script>';
       }?>
