<div class="panel panel-default">
	
	<div class="panel-heading">
		<h3 class="panel-title">Registro de datos de usuarios</h3>
	</div>

	<div class="panel-body">
		
		<form name="completar_datos_usuario" id="completar_datos_usuario" action="completar_datos_usuario" method="POST"  action="login" class="">

			<div class="form-group">
				<label for="tipo" id="tipo">Tipo de usuario</label>
				<select id="tipo_usuario" name="tipo_usuario" class="form-control">
					<option value="">-Seleccione-</option>
					<option value="coordinador">Coordenador</option>
					<option value="director de escuela">Director de escuela</option>
					<option value="proyeccion a la comunidad">Proyeccion a la comunidad</option>
				</select>
			</div>

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