<div class="container theme-showcase"> <!-- inicio container-->
	<div class="row" >
		<div class="col-sm-12">
			<div class="panel panel-default">  <!-- panel total inicio-->
				<div class="panel-heading">
					<h3 class="panel-title">Consulta de localidades</h3>
				</div>
				<div class="panel-body">
					
					<!-- dattos perosnales y academicos-->
						<fieldset disabled>
						<div id="cont1">       
	  
										<div class="panel-group" id="accordion">
										<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Datos del Responsable
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
			

												<div class="form-group">
								                  <label for="">Nombre de la Organización </label>
								                  <input id="nombre_localidad1" name="nombre_localidad" type="text" class="form-control" ></input>
								                </div>
								                 <div class="form-group">
								                  <label for="">Responsable </label>
								                  <input id="representante_localidad1" name="representante_localidad" type="text" class="form-control" ></input>
								                </div>

								                <div class="form-group">
								                  <label for="">Correo Electrónico </label>
								                  <input id="email_representante_localidad1" name="email_representante_localidad" type="email" class="form-control"></input>
								                </div>

									            <div class="form-group">
									              <label for="">Telefono </label>
									              <input  id="telefono_representante_localidad1" name="telefono_representante_localidad" type="text" class="form-control" ></input>
									            </div>

											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													Datos Ubicacion
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse in">
											<div class="panel-body">
		   
												<div class="form-group">
								                     <label for="estado">Estado</label>
								                          <input id="estado" name="estado" type="text" class="form-control" value="Bolivar" readonly></input>
								               </div>
								                <div class="form-group">
								                     <label for="municipio">Municipio</label>
								                      <input id="municipio" name="municipio" type="text" class="form-control" value="Caroni" readonly></input>
								               </div>
								                <div class="form-group">
								                      <label for="parroquia">Parroquia </label>
								                      <input class="form-control" name="parroquia_localidad" id="parroquia_localidad1" ></input>
								                 </div>
											   
											   <div class="form-group">
								                      <label for="direccion">Dirección </label>
								                      <input class="form-control" name="direccion_localidad" id="direccion_localidad1" ></input>
								                 </div>



											</div>
										</div>
									</div>
								</div>
						</div>
				</div>		
			</div>
		</div>	
	</fieldset>
	</div>
</div>	

<script>
$(document).ready(function(){

	$(".collapse").collapse();
  						  
     	$("#nombre_localidad").val();
     	$("#representante_localidad").val(main_datos.localidad.responsable);
     	$("#email_representante_localidad").val(main_datos.localidad.email);
       	$("#telefono_representante_localidad").val(main_datos.localidad.telefono);
                            

 //datos ubicacion
 	$("#parroquia_localidad").val(main_datos.localidad.parroquia);
  	$("#direccion_localidad").val(main_datos.localidad.direccion);
							

     


    });



 



</script>
