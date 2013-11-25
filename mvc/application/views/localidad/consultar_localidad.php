<div class="container theme-showcase"> <!-- inicio container-->
	<div class="row" >
		<div class="col-sm-12">
			<div class="panel panel-default">  <!-- panel total inicio-->
				<div class="panel-heading">
					<h3 class="panel-title">Consulta de localidades</h3>
				</div>
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-heading">
						  <h3 class="panel-title">Buscar Localidad</h3>
						</div>
						<div class="panel-body">								  
							<div class="input-group input-group-sm">
								<input id="nombre_loc" type="text" class="form-control" placeholder="Introduzca nombre de la localidad a consultar"></input>
								<span class="input-group-btn">
									<button id="btn_datos_localidad" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</span>
							</div><!-- /input-group -->
						</div>
					</div>
					<div id="cont">
						<div id="info">
							<form class="form-inline" role="form">
								<fieldset disabled>
									<div class="form-group">
										<label>Nombre</label>
										<input type="text" id="nombre_localidad1" class="form-control" placeholder="Nombre de la localidad">
										
									</div>
								</fieldset>
							</form>
						 </div>
					</div>
				
					</br></br>
					<!-- dattos perosnales y academicos-->
										
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
			

												<ul>
														<li>Responsable : <span id="representante_localidad"></span></li>
														<li>Telefono :<span id="telefono_representante_localidad"></span></li>
														<li>Email :<span id="email_representante_localidad"></span></li>
														
												</ul>

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
		   
				
												<ul>
														
														<li>Parroquia :<span id="parroquia_localidad"></span></li>
														
												</ul>


											</div>
										</div>
									</div>
								</div>
						</div>
				</div>		
			</div>
		</div>	
	</div>
</div>	

<script>
$(document).ready(function(){

    $("#btn_datos_localidad").click(function(){


       // alert($("#id_cedula").val());
          
          var nombre=$("#nombre_loc").val();

                  if(!nombre){

                          toastr.warning(mensajes.error.campo_vacio);
                  }else{

                      $.post("consultar_datos_localidad",{id:nombre},function(data){

                            var estado =JSON.parse(data)["estado"]; 

                                   console.log(JSON.parse(data));

                             
                              if(estado === "-1"){
									//cambiar a mensajes.error.localidad_nf
                                  toastr.error(mensajes.error.prestador_nf);


                              }else{

                                 toastr.success(mensajes.success.prestador_f);



                              var datos_representante =JSON.parse(data)["datos_representante"][0];
							  var datos_ubicacion =JSON.parse(data)["datos_ubicacion"][0];
							  
                            $("#nombre_localidad1").val(datos_representante.nombre_localidad);
                            $("#representante_localidad").text(datos_representante.representante_localidad);
                            $("#telefono_representante_localidad").text(datos_representante.telefono_representante_localidad);
                            $("#email_representante_localidad").text(datos_representante.email_representante_localidad);

                              //datos ubicacion

                            $("#parroquia_localidad").text(datos_ubicacion.parroquia_localidad);

                        }
                         });
                    
                        }  
    });


  });

 
</script>
