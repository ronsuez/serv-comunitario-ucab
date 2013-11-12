	<script>
$(document).ready(function(){

//configuracion de las ventanas de alerta

toastr.options = {
  "closeButton": true,
  "debug": false,
  "positionClass": "toast-top-right",
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}


  $(".collapse").collapse();


  $('#myModal').modal("hide");


    $("#consultar_prestador").click(function(){


       // alert($("#id_cedula").val());
          
          var cedula=$("#id_cedula").val();

                  if(!cedula){

                          toastr.warning("No envies campos vacios");
                  }else{

                      $.post("consultar_datos_prestador",{id:cedula},function(data){

                            var estado =JSON.parse(data)["estado"]; 

                                   console.log(JSON.parse(data));

                             
                              if(estado === "-1"){

                                  toastr.error("prestador no encontrado");


                              }else{

                                 toastr.success("Prestador encontrado");



                              var datos_personales =JSON.parse(data)["datos_personales"][0];
                            
                              var datos_academicos =JSON.parse(data)["datos_academicos"][0];
                              
                      

                            $("#nombre").val(datos_personales.nombre_prestador);


                            $("#apellido").val(datos_personales.apellido_prestador);


                            $("#celular").text(datos_personales.celular_prestador);


                            $("#telefono").text(datos_personales.telefono_prestador);


                            $("#email").text(datos_personales.email_prestador);


                            $("#cedula").text(datos_personales.ci_prestador);


                            $("#direccion").text(datos_personales.direccion_prestador);


                              //datos academicos


                            $("#nro_exp").text(datos_academicos.no_exp_prestador);


                            $("#escuela").text(datos_academicos.escuela_prestador);


                            $("#mencion").text(datos_academicos.mencion_prestador);


                            $("#semestre").text(datos_academicos.semestre_prestador);

                         
                        }
                         });
                    
                        }  
    });


  
  //fin de consulta prestador-------------------------------------------------------
$("#consultar_coordinador").click(function(){ 


       // alert($("#id_cedula").val());
          
          var cedulac=$("#id_cedula_coord").val();

                  if(!cedulac){

                          toastr.warning("No envies campos vacios");
                  }else{
						

                      
                      	$.post("consultar_datos_coordinador",{id2:cedulac},function(data){

                            var estado =JSON.parse(data)["estado"]; 

                                   console.log(JSON.parse(data));

                             
                              if(estado === "-1"){

                                  toastr.error("Coordinador no encontrado");


                              }else{

                                 toastr.success("Coordinador encontrado");



                              var datos_coordinador =JSON.parse(data)["datos_coordinador"][0];
                            
                             console.log(datos_coordinador);

                              
                      

                            $("#nombre_coord").val(datos_coordinador.nombre_coord);


                            $("#apellido_coord").val(datos_coordinador.apellido_coord);


                            $("#celular_coord").text(datos_coordinador.celular_coord);


                            $("#telefono_coord").text(datos_coordinador.telefono_coord);


                            $("#email_coord").text(datos_coordinador.email_coord);


                            $("#cedula_coord").text(datos_coordinador.ci_coord);


                            $("#escuela_coord").text(datos_coordinador.escuela_coord);


                              

                         
                        }
                         });
                    
                        }  
    });
	});
</script>




<style>


  #cont{

    width:100%;
    height:200px;
   
  }

  #foto{
    margin-top: 20px;

    float:left;
    
    margin-right: 20px;
  }


  #info{
    margin-top: 20px;
  float: right;
  width:70%;
  

  }

  .form-control1 {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
          transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

#form{

  width:75%;
  height:50%;
}

button a {

  text-decoration: none;
  color: #FFF;
}

button a:hover{

  text-decoration: none;
  color: #FFF;

}
</style>

  </head>

  <body>
  
		<div class="container theme-showcase"> <!-- inicio container-->
			<div class="row" >
				<div class="col-sm-12">
					<div class="panel panel-default">  <!-- panel total inicio-->
						<div class="panel-heading">
							<h3 class="panel-title">Inscripcion de Proyectos</h3>
						</div>
						<div class="panel-body">
						
						<div class="panel panel-default">

											<div class="panel-heading">
											  <h3 class="panel-title">Buscar Prestador</h3>
											</div>
											<div class="panel-body">
											  
											  <div class="input-group input-group-sm">
												<input id="id_cedula" type="text" class="form-control" placeholder="Introduzca nombre o cedula del Prestador"></input>
												<span class="input-group-btn">
												  <button id="consultar_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											  </div><!-- /input-group -->


											</div>


									</div>
									 <div id="cont">
									  
									  <div id="foto">
										<img  style="width: 140px; height: 140px;" src="http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg" alt="Avatar" class="img-thumbnail">

									  </div>

									  <div id="info">
										<form class="form-inline" role="form">
										  <fieldset disabled>
											<div class="form-group">
											  <label>Nombre</label>
											  <input type="text" id="nombre" class="form-control" placeholder="Nombre del Alumno">
											  <label>Apellido</label>
											  <input type="text" id="apellido" class="form-control" placeholder="Apellido del Alumno">
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
												Datos Personales
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
        

											<ul>
													<li>Cedula : <span id="cedula"></span></li>
													<li>Telefono :<span id="telefono"></span></li>
													<li>Email :<span id="email"></span></li>
													<li>Celular :<span id="celular"></span></li>
													<li>Direccion :<span id="direccion"></span></li>
											</ul>

										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Datos Academicos
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse in">
										<div class="panel-body">
       
            
											<ul>
													<li>Nro. Expendiente : <span id="nro_exp"></span></li>
													<li>Escuela :<span id="escuela"></span></li>
													<li>Mencion :<span id="mencion"></span></li>
													<li>Semestre :<span id="semestre"></span></li>
											</ul>


										</div>
									</div>
								</div>
							</div>
						</div>
									
									<!-- fin datos -->
									
									<!---------------fin busqueda prestador ---------------------------------------------------------------------------------------------------------->
							</br></br>
						
									<div class="panel panel-default">

											<div class="panel-heading">
											  <h3 class="panel-title">Buscar Coordinado o Asesor</h3>
											</div>
											<div class="panel-body">
											  
											  <div class="input-group input-group-sm">
												<input id="id_cedula_coord" type="text" class="form-control" placeholder="Introduzca nombre o cedula del Coordinado o Asesor"></input>
												<span class="input-group-btn">
												  <button id="consultar_coordinador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											  </div><!-- /input-group -->


											</div>


									</div>
									 <div id="cont2">
									  
									  <div id="foto">
										<img  style="width: 140px; height: 140px;" src="http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg" alt="Avatar" class="img-thumbnail">

									  </div>

									  <div id="info2">
												<form class="form-inline" role="form">
												  
													<div class="form-group">
													  <label>Nombre</label>
													  <input id="nombre_coord" type="text" class="form-control" placeholder="Nombre del Coordinador/Asesor">
													  <label>Apellido</label>
													  <input type="text" id="apellido_coord" class="form-control" placeholder="Apellido del Coordinador/Asesor">
													</div>
												 
												</form>
												</br>
												<button id="consultar_coordinador" type="button" class="btn btn-default"> inscribir Coordinador </button>
										</div>
									</div>
									
									</br></br>
									
									<div id="cont3">       
		  
												
												<div class="panel panel-default">
												<div class="panel-heading">
												   <h3 class="panel-title">Cordinadores/Asesores participante en el proyecto</h3>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
												  <div class="panel-body">
															
															lista de coordinadores y asesores que participan el proyecto selencionado anteriormente!!!!</br>
															-</br>
															-</br>
															-</br>
															-</br>
															-</br>
															-</br>
															

												  </div>
												</div>
											  </div>


											  
											
									</div>
									
									
									 
										</br></br>
									<div class="panel panel-default">
							<div class="panel-heading">
							  <h3 class="panel-title">Inscribir Proyecto</h3>
							</div>
							<div class="panel-body">
							
								<div class="form-group">
                     <label for="parroquia">Seleccione proyecto</label>
                     <select name="parroquia" class="form-control" id="parroquia">
                         <option value="">Seleccione</option>
                         
                       
                    </select>
               </div>
			   
			   <div class="form-group">
                     <label for="parroquia">Periodo Academico</label>
                     <select name="parroquia" class="form-control" id="parroquia">
						<option value="">Seleccione</option>
                         <option value="">2013-21</option>
                         <option value="cachamay">2013-22</option>
                        
                       
                    </select>
					
					
					
               </div>
							
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
									<button type="button" class="btn btn-success"> Inscribir Proyecto </button>
									<button type="button" class="btn btn-success"> Generar Reporte </button>
							</div>
						 </div>			
										

						 </div>
						 
						
					</div> <!-- panel total fin-->
				</div>	
			</div>
		</div>	<!-- fin container -->
  </body>
</html>
