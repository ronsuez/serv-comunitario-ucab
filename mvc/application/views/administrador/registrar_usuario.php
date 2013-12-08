<style type="text/css">

form label.error {
	color: #e33241;
	margin-left: 2px;
	font-weight: lighter; 
}

</style>

<div class="panel panel-default">
	
	<div class="panel-heading">
		<h3 class="panel-title">Registro de datos de usuarios</h3>
	</div>

	<div class="panel-body">
		
		<form name="registrar_datos_usuario" id="registrar_datos_usuario" action="registrar_datos_usuario" method="POST"  action="login" class="">

			<div class="form-group">
				<label for="cedula">C&eacute;dula</label>
				<input type="text" name="cedula" id="cedula" class="form-control" placeholder="Introduzca la cedula del nuevo usuario" autofocus>
			</div>

			<div class="form-group">
				<label for="pass">Contrase&ntilde;a</label>
				<input type="password" name="pass" id="pass" class="form-control" placeholder="Introduzca la contrasena que tendra el nuevo usuario">
			</div>

			<div class="form-group">
				<label for="conf_pass">Confirmar contrase&ntilde;a</label>
				<input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Confirmar clave de acceso">
			</div>

			<div class="form-group">
				<label for="tipo" id="tipo">Tipo de usuario</label>
				<select id="tipo_usuario" name="tipo_usuario" class="form-control">
					<option value="">-Seleccione-</option>
					<option value="CO">Coordinador</option>
					<option value="DI">Director de escuela</option>
					<option value="PR">Proyecci&oacute;n a la comunidad</option>
				</select>
			</div>

			<div class="form-group">
				<label for="nombre">Nombre(s)</label>
				<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre(s)">
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
					<option value="">-Seleccione-</option>
					<option value="Ingenieria informatica">Ingenier&iacute;a Inform&aacute;tica</option>
					<option value="Ingenieria civil">Ingenier&iacute;a Civil</option>
					<option value="Ingenieria industrial">Ingenier&iacute;a Industrial</option>
					<option value="Comunicacion social">Comunicaci&oacute;n Social</option>
					<option value="Administracion">Administraci&oacute;n</option>
					<option value="Contaduria">Contadur&iacute;a</option>
					<option value="Relaciones industriales">Relaciones Industriales</option>
					<option value="Educacion">Educaci&oacute;n</option>
					<option value="Derecho">Derecho</option>
				</select>
			</div>

			<br>
			<button class="btn btn-primary" type="submit">Aceptar</button>
		</form>

	</div>

</div>



<script type="text/javascript">

$(document).ready(function(){

	$('#carrera').css("display","none");
	$('#escuela').css("display","none");
	$("#tipo_usuario").on("change",function() {
		console.log($(this).val());
		if($(this).val()==="PR") {
			$("#carrera").fadeOut(1000);
			$("#escuela").fadeOut(1000);
		}
		else{
			$("#carrera").fadeIn(1000);
			$("#escuela").fadeIn(1000);
			
		}
	});

	//funcionalidad para la regla alfebetica
	jQuery.validator.addMethod("alpha", function(value, element) {
		return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
	},"Solo caracteres (Aa-Zz).");

	$("#registrar_datos_usuario").validate({

		rules: {
			cedula: {
				required: true,
				number: true,
				maxlength: 8,
				minlength: 6,
			},
			pass: {
				required: true,
			}, 
			conf_pass:{
				required: true,
				equalTo: "#pass"
			},
			nombre: {
				required: true,
				alpha:true
			},
			apellido :{
				required: true,
				alpha:true
			},
			email :{
				required: true,
				email: true
			},
			celular:{
				required: true,
				number: true,
				maxlength:11,
				minlength:11
			},
			telefono:{
				required: true,
				number: true,
				maxlength:11,
				minlength:11
			}
		},

		messages:{
			cedula: {
				required: mensajes.reglas.requerido,
				number: mensajes.reglas.numerico,
				minlength: mensajes.reglas.minimo,
				maxlength: mensajes.reglas.maximo

			},
			pass: {
				required: mensajes.reglas.requerido
			},
			conf_pass:{
				required: mensajes.reglas.requerido,
				equalTo: mensajes.reglas.equalTo
			},
			nombre : {
				required: mensajes.reglas.requerido

			},
			apellido :{
				required: mensajes.reglas.requerido

			},
			email : {
				required: mensajes.reglas.requerido,
				email: mensajes.reglas.email

			},
			celular: {
				required: mensajes.reglas.requerido,
				number: mensajes.reglas.numerico,
				minlength: mensajes.reglas.minimo_tlf,
				maxlength: mensajes.reglas.maximo_tlf

			},
			telefono: {
				required: mensajes.reglas.requerido,
				number: mensajes.reglas.numerico,
				minlength: mensajes.reglas.minimo,
				maxlength: mensajes.reglas.maximo

			}
		}

	});

$("#registrar_datos_usuario").submit(function (e) {

	e.preventDefault();

	if ($(this).valid()) {
		var datos = $(this).serialize();

		$.post("registrar_datos_usuario",datos,

			function(data){

				if(data=="0") {

					toastr.success(mensajes.success.usuario_registrado);
					resetForm($('#registrar_datos_usuario'));

				}
				else {
					toastr.error(mensajes.error.usuario_no_registrado);

				}
			});

	} 
	else {
		toastr.error(mensajes.error.form_nv);
	}

});

});

</script>