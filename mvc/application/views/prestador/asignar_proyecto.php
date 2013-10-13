
		<div class="container "> <!-- inicio container-->
			
					<div class="panel panel-default">

						<div class="panel-heading">
							<h3 class="panel-title">Buscar prestador</h3>
						</div>
						<div class="panel-body">
							
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
								</span>
							</div><!-- /input-group -->


						</div>


					</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Datos del prestador </h3>
										</div>
											<div class="panel-body">
										<p><h5>  Nombre:  <span class="label "></span>________________________</h5></p>
										<p><h5>  Cedula:  <span class="label "></span>________________________</h5></p>
										<p><h5>  Direccion:  <span class="label"></span>________________________</h5></p>
										<p><h5>  Telefono:  <span class="label"></span>________________________</h5></p>
										<p><h5>  Email:  <span class="label"></span>________________________</h5></p>

										<p><h5>  Escula:  <span class="label"></span>________________________</h5></p> 
										<p><h5>  Carrera:  <span class="label"></span>________________________</h5></p>
										<p><h5>  No.Expediente:  <span class="label"></span>________________________</h5></p>
										<p><h5>  Semestre:  <span class="label"></span>________________________</h5></p>
									</div>
								</div>
								

						<div class="panel panel-primary">
							<div class="panel-heading">
							  <h3 class="panel-title">Datos del Proyecto</h3>
							</div>
							<div class="panel-body">
							<form id="inscribir_proyecto" name="inscribir_proyecto" method="post" action="" >
							  <p><tr><label for="proyecto" >Selecione proyecto:</label>
									<select name="proyecto" id="proyecto" class="" >
									<option VALUE="r">Rojo</option></select></tr></p>
									
								<p><tr><label for="periodo" >Periodo Academico: </label>
									<select name="periodo" id="periodo" class=""></select></tr></p>
							  <td>Fecha Inicio de Proyecto <input type="text"  class="panel panel-default"  placeholder="dd/mm/aa"></td>
							  
							  <td>Horas Semanales de servicio: <input for="proyecto" type="text"  class="panel panel-default">
															 
									<table class="table">
												
													<td>Lunes</td><td><input type="text"  class="panel panel-default" placeholder="00:00-24:00"></td>
													<td>Martes</td><td><input type="text"  class="panel panel-default" placeholder="00:00-24:00"></td>
												</tr>
												<tr>
													<td>Miercoles</td><td><input type="text"  class="panel panel-default" placeholder="00:00-24:00"></td>
													<td>Jueves</td><td><input type="text"  class="panel panel-default" placeholder="00:00-24:00"></td>
												</tr>
												<tr>
													<td>Viernes</td><td><input type="text"  class="panel panel-default" placeholder="00:00-24:00"></td>
												
												
											  </table>
							  </form>
									<button type="button" class="btn btn-primary"> Inscribir Proyecto </button>
									<button type="button" class="btn btn-primary"> Generar Reporte </button>
							</div>
						 </div>
						
					</div>
			
		</div>	<!-- fin container -->
