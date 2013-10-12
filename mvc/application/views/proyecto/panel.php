

<style>
		#accordion{

			margin-top:30px;
		}
</style>

        <div class="header">
				<h1>Gestión de Proyectos</h1>
				<ul class="nav nav-tabs" id="tabs">
					<li class="active"><a href="#" id="b_crear">Crear</a></li>
	 				<li><a href="#" id="b_consultar_modificar">Consultar/Modificar</a></li>
	  				<li><a href="#" id="b_finalizar">Finalizar</a></li>
				</ul>
			</div>


		<div class="container">
			
			<div class="main-content" id="crear">
                            
			<div class="panel panel-default">
			 <div class="panel-heading"> Datos basicos del proyecto </div>
                                <div class="panel-body">

                                               <div class="form-group">
                                                       <label for="titulo_proyecto">Título del proyecto</label>
                                                       <input type="text" class="form-control" id="titulo_proyecto">
                                               </div>
                                               <div class="form-group">
                                                       <label for="suscribe">Organización o comunidad quien suscribe convenio</label>
                                                       <select class="form-control" id="suscribe">
                                                               <option value="">Seleccione</option>
                                                       </select>
                                               </div>
                                               <div class="form-group">
                                                       <label for="ejecuta">Organización o comunidad donde se ejecuta el proyecto</label>
                                                       <select class="form-control" id="ejecuta">
                                                               <option value="">Seleccione</option>
                                                       </select>
                                               </div>
                               </div>

                       
			</div>
                            
                            <div class="panel panel-default">
                                    <div class="panel-heading"> Descripcion del proyecto </div>
                                <div class="panel-body">

                            
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea class="form-control" id="descripcion" placeholder="Diagnóstico de la situación, justificación, impacto."></textarea>
			  		</div>
			  		<div class="form-group">
						<label for="objetivos">Objetivos</label>
						<textarea class="form-control" id="Objetivos" placeholder="Objetivos generales, objetivos específicos, metas, producto."></textarea>
			  		</div>
			  		<div class="form-group">
						<label for="estrategias">Estrategias</label>
						<textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
			  		</div>
			  	</div>
			  	<br><input type="submit" class="btn btn-default" id="enviar" value="Crear Proyecto"></input><br><br>
			</div>	

                            
                            
                          </div> <!--/tab-crear-->
                    
                    
			<div class="main-content" id="consultar_modificar">
					

							<div class="panel panel-default">
							  <div class="panel-heading">Formulario de busqueda </div>
							  <div class="panel-body">
							    <form class="form-inline" role="form">
													  <div class="form-group">
													    <label class="sr-only" for="exampleInputEmail2">Titulo del proyecto</label>
													    <input type="text" class="form-control" id="proyecto" placeholder="Nombre del proyecto..">
													  </div>
													  <div class="form-group">
													   <select class="form-control">
															  <option>Seleccione</option>
															  <option>Todos</option>
															  <option>Activos</option>
															  <option>Financiados</option>
														
															</select>
												</div>
												
													  <button type="submit" class="btn btn-success">Buscar</button>
													</form>
							  </div>
							</div>

							<div class="panel panel-default">
							  <div class="panel-heading">Descripcion del proyecto</div>
							  <div class="panel-body">

							  
							  <!--Estado/ID proyecto -->
							  			
													    <label for="proyecto">Estado del proyecto</label>
													 		<h5>xxxxxxxx</h5>	
													    <label for="proyecto">Codigo del proyecto</label>
													 		<h5>xxxxxxxx</h5>	
											
							  <!--Descripcion /textarea -->	
							  <h3>General</h3>

							  <textarea class="form-control" rows="3"></textarea>	

							  <!--Acorddion-->	
						<div class="panel-group" id="accordion">
										  <div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										          Descripcion
										        </a>
										      </h4>
										    </div>
										    <div id="collapseOne" class="panel-collapse collapse in">
										      <div class="panel-body">
										     
										      </div>
										    </div>
										  </div>
										  <div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										          Objetivos
										        </a>
										      </h4>
										    </div>
										    <div id="collapseTwo" class="panel-collapse collapse">
										      <div class="panel-body">
										      
										      </div>
										    </div>
										  </div>
										  <div class="panel panel-default">
										    <div class="panel-heading">
										      <h4 class="panel-title">
										        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										          Cnolo se 
										        </a>
										      </h4>
										    </div>
										    <div id="collapseThree" class="panel-collapse collapse">
										      <div class="panel-body">

										      </div>
										    </div>
										  </div>
				</div>
							  </div>
							</div>


							<div class="panel panel-default">
							  <div class="panel-heading"> Listado de Prestadores</div>
							  <div class="panel-body">
							   		blank
							  </div>
							</div>
			
			







			</div>	

			<div class="main-content" id="finalizar">
						<div class="input-group">
			            <input type="text" class="form-control">
			            <div class="input-group-btn">
			              <button type="button" class="btn btn-default" tabindex="-1">Action</button>
			              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
			                <span class="caret"></span>
			              </button>
			              <ul class="dropdown-menu pull-right" role="menu">
			                <li><a href="#">Action</a></li>
			                <li><a href="#">Another action</a></li>
			                <li><a href="#">Something else here</a></li>
			                <li class="divider"></li>
			                <li><a href="#">Separated link</a></li>
			              </ul>
			            </div>
			          </div>
		</div>

		<script type="text/javascript">
			$(document).ready(function(){

					$("#consultar_modificar").hide();
					$("#finalizar").hide();
				$("#tabs a").click(function(){
					$("#tabs>li.active").removeClass("active");
					$(this).parent().addClass("active");
					if ($(this).attr("id")==="b_crear"){
						$("#consultar_modificar").hide();
						$("#finalizar").hide();
						$("#crear").show();
					} else
					if ($(this).attr("id")==="b_consultar_modificar"){
						$("#crear").hide();
						$("#finalizar").hide();
						$("#consultar_modificar").show();
					} else
					if ($(this).attr("id")==="b_finalizar"){
						$("#crear").hide();
						$("#consultar_modificar").hide();
						$("#finalizar").show();
					}
				});

			});
		</script>
