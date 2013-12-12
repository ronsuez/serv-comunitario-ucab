<style type="text/css">

form label.error {
	color: #e33241;
	margin-left: 2px;
	font-weight: lighter; 
}

</style>


<form name="registrar_datos_usuario" id="registrar_datos_usuario" action="registrar_datos_usuario" method="POST"  action="login" class="">

<div class="panel panel-default">
	
	<div class="panel-heading">
		<h3 id="titulo_registro" class="panel-title">Registro de datos de usuario</h3>
	</div>

	<div class="panel-body">
		
		
			<div class="form-group">
				<label for="cedula">C&eacute;dula</label>
				<input type="text" name="cedula" id="ci" class="form-control" placeholder="Introduzca la cedula del nuevo usuario" autofocus>
			</div>


			<div class="form-group">
				<label for="tipo_usuario">Tipo de usuario</label>
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
					<option value="Ingenieria Informatica">Ingenier&iacute;a Inform&aacute;tica</option>
					<option value="Ingenieria Civil">Ingenier&iacute;a Civil</option>
					<option value="Ingenieria Industrial">Ingenier&iacute;a Industrial</option>
					<option value="Comunicacion Social">Comunicaci&oacute;n Social</option>
					<option value="Administracion">Administraci&oacute;n</option>
					<option value="Contaduria">Contadur&iacute;a</option>
					<option value="Relaciones Industriales">Relaciones Industriales</option>
					<option value="Educacion">Educaci&oacute;n</option>
					<option value="Derecho">Derecho</option>
				</select>
			</div>	

</div>

</div>

<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Datos de acceso al sistema</h3>
	  </div>
	  <div class="panel-body">

	  			<div class="form-group">
					<label for="user">Usuario</label>
					<input type="text" name="user" id="user" class="form-control" placeholder="Introduzca la contrasena que tendra el nuevo usuario">
				</div>

	    		<div class="form-group">
					<label for="pass">Contrase&ntilde;a</label>
					<input type="password" name="pass" id="pass" class="form-control" placeholder="Introduzca la contrasena que tendra el nuevo usuario">
				</div>

				<div class="form-group">
					<label for="conf_pass">Confirmar contrase&ntilde;a</label>
					<input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Confirmar clave de acceso">
				</div>

	  </div>
</div>

			<br>

	<button id="boton_usuario" class="btn btn-primary" type="submit">Registrar</button>
		</form>
		
</div><!--fin panel registrar/modificar -->



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

	var ruta = "registrar_datos_usuario";

  if (act_datos_usuario) {
    ruta = "actualizar_datos_usuario";
    $("#conf_pass").attr("disabled",false);
    $("#pass").attr("disabled",false);
  }

	if ($(this).valid()) {
		var datos = $(this).serialize();

		$.post(ruta,datos,

			function(data){

				if(data=="0") {

					toastr.success(mensajes.success.usuario_actualizado);
					resetForm($('#registrar_datos_usuario'));
					act_datos_usuario = 0;
					$("#boton_usuario").html("Registrar");
					$("#titulo_registro").html("Registrar datos de usuarios");
				}
				else {
					toastr.error(mensajes.error.usuario_no_actualizado);

				}
			});

	} 
	else {
		toastr.error(mensajes.error.form_nv);
	}

});

});

</script>