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



<div class="container">

    <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Buscar prestador</h3>
            </div>
            <div class="panel-body">
              
              <div class="input-group input-group-sm">
                <input id="id_prestador_cedula" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
                <span class="input-group-btn">
                  <button id="c_datos_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
              <input type="text" id="nombre_prestador" class="form-control" placeholder="Nombre del Alumno">
              <label>Apellido</label>
              <input type="text" id="apellido_prestador" class="form-control" placeholder="Apellido del Alumno">
            </div>
          </fieldset>
        </form>
      </div>

      


    </div>

      <br><br>

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
                <li>Cedula : <span id="cedula_prestador"></span></li>
                <li>Telefono :<span id="telefono_prestador"></span></li>
                <li>Email :<span id="email_prestador"></span></li>
                <li>Celular :<span id="celular_prestador"></span></li>
                <li>Direccion :<span id="direccion_prestador"></span></li>
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
                <li>Nro. Expendiente : <span id="nro_exp_prestador"></span></li>
                <li>Escuela :<span id="escuela_prestador"></span></li>
                <li>Mencion :<span id="mencion_prestador"></span></li>
                <li>Semestre :<span id="semestre_prestador"></span></li>
            </ul>


      </div>
    </div>
  </div>
</div>
</div>
</br></br>
						
									<div class="panel panel-default">

											<div class="panel-heading">
											  <h3 class="panel-title">Buscar Asesor</h3>
											</div>
											<div class="panel-body">
											  
											  <div class="input-group input-group-sm">
												<input id="id_cedula_asesor" type="text" class="form-control" placeholder="Introduzca cédula del Asesor"></input>
												<span class="input-group-btn">
												  <button id="consultar_asesor" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
													  <input id="nombre_asesor_res" type="text" class="form-control" placeholder="Nombre del Asesor">
													  <label>Apellido</label>
													  <input type="text" id="apellido_asesor_res" class="form-control" placeholder="Apellido del Asesor">
													</div>
												 
												</form>
												</br>
												<button class="btn btn-default" data-toggle="modal" data-target="#form-asesor">  Inscribir Asesor</button>
										</div>
									</div>
									
									</br></br>
									
									<div id="cont3">       
		  
												
												<div class="panel panel-default">
												<div class="panel-heading">
												   <h3 class="panel-title">Asesor(es) participante(s) en el Proyecto</h3>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
												  <div class="panel-body">
															
															Lista de Asesores que participan el proyecto seleccionado anteriormente!!!!</br>
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
											
									 
<!-- modal ventana emergente) inscribir proyecto ------------------------------------------------------------------------------------------------------------------->
						 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Inscripcion de Proyecto</h4>
        </div>
        <div class="modal-body">
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
									<button type="button" class="btn btn-default"> Inscribir Proyecto </button>
									<button type="button" class="btn btn-default"> Generar Reporte </button>
							</div>
						 </div>
</div>
</div>
						 
 <!-- fin model ------------------------------------------------------------------------------------------------------------------------------------------------>
										
										
<!-- modal ventana emergente) inscribir asesor ------------------------------------------------------------------------------------------------------------------->
						 
<div class="modal fade" id="form-asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button id="inscribir_asesor" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Inscripcion de Asesor</h4>
        </div>
        <div class="modal-body">
			
			<form name="form-inscribir-asesor" id="form-inscribir-asesor" action="#" method="POST"> 
			
			
			 <div class="form-group">
				<label>Nombre</label>
				<input id="nombre_asesor" type="text" class="form-control" placeholder="Introduzca Nombre del Asesor">
				<label>Apellido</label>
				<input type="text" id="apellido_asesor" class="form-control" placeholder="Introduzca Apellido del Asesor">
				<label>Cedula</label>
				<input type="text" id="cedula_asesor" class="form-control" placeholder="Introduzca Cedula del Asesor">
				<label>Direccion</label>
				<input type="text" id="direccion_asesor" class="form-control" placeholder="Introduzca Direccion de habitacion del Asesor">
				<label>Celular</label>
				<input type="text" id="celular_asesor" class="form-control" placeholder="Introduzca Celular del asesor">
				<label>Telefono</label>
				<input type="text" id="telefono_asesor" class="form-control" placeholder="Introduzca Telefono del Asesor">
				<label>Email</label>
				<input type="text" id="email_asesor" class="form-control" placeholder="Introduzca Emal del Asesor">
			</div>  
					  
			<button type="submit" class="btn btn-default"> Inscribir Asesor </button>
			</form>
		</div>
</div>
</div>
</div>
						 
 <!-- fin model ------------------------------------------------------------------------------------------------------------------------------------------------>
										

		
						 
						
					</div> <!-- panel total fin-->
				</div>	
				
			</div>
			
			<div class="panel panel-default">
		<div class="panel-heading">Buscar Proyecto </div>
		<div class="result-search panel-body">
		
			<div class="input-group input-group-sm">
                <input id="nombre_proyecto" type="text" class="form-control" placeholder="Nombre del proyecto"></input>
                <span class="input-group-btn">
                  <button id="buscar_proyecto" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div><!-- /input-group -->
		</br>

			
				
					
				
			
		</div>
		
	</div>
		<button class="btn btn-default" id="asociar_proyecto" type="submit">  Asociar proyecto a prestador</button>	
		</div>	<!-- fin container -->
<!--Consultar / modificar prestador-->

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

  $("#consultar_proyecto").css("display", "none");
  $("#tabla_consulta").css("display", "none");

$("#btn_consultar_proyecto").click(function(){
  $("#consultar_proyecto").fadeToggle(2000);
  $("#tabla_consulta").fadeToggle(2000);

});



    $("#c_datos_prestador").click(function(){


       // alert($("#id_cedula").val());
          
          var cedula=$("#id_prestador_cedula").val();

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
                              
                      

                            $("#nombre_prestador").val(datos_personales.nombre_prestador);


                            $("#apellido_prestador").val(datos_personales.Apellido_prestador);


                            $("#celular_prestador").text(datos_personales.celular_prestador);


                            $("#telefono_prestador").text(datos_personales.telefono_prestador);


                            $("#email_prestador").text(datos_personales.email_prestador);


                            $("#cedula_prestador").text(datos_personales.ci_prestador);


                            $("#direccion_prestador").text(datos_personales.direccion_prestador);


                              //datos academicos


                            $("#nro_exp_prestador").text(datos_academicos.no_exp_prestador);


                            $("#escuela_prestador").text(datos_academicos.escuela_prestador);


                            $("#mencion_prestador").text(datos_academicos.mencion_prestador);


                            $("#semestre_prestador").text(datos_academicos.semestre_prestador);

                         
                        }
                         });
                    
                        }  
    });
	<!--fin de la consulta de los datos de prestador-->
	$("#consultar_asesor").click(function(){
		var cedula=$("#id_cedula_asesor").val();
		if(!cedula){
			toastr.warning("No envie campos vacios")
		}else{
			$.post("consultar_datos_asesor",{id:cedula},function(data){
				var estado =JSON.parse(data)["estado"]; 
				console.log(JSON.parse(data));
				if(estado == -1){
					toastr.error("Asesor no encontrado");
				}else{
					toastr.success("Asesor encontrado");
					var datos_personales =JSON.parse(data)["datos_personales"][0];
					$("#nombre_asesor_res").val(datos_personales.nombre_asesor);
					$("#apellido_asesor_res").val(datos_personales.apellido_asesor);
				}
			});
		}		
	
	});


  
//fin del script de busqueda de asesor



//hay que revisar este puto script

	$("#buscar_proyecto").on("click",function(){
		var nombre=$("#nombre_proyecto").val();
		var cedula=$("#id_cedula_asesor").val();
		var cedula_prestador=$("#id_prestador_cedula").val();
		if(!cedula){
			toastr.warning("Busque el asesor del proyecto");
		}
		if(!cedula_prestador){
			toastr.warning("Busque el prestador que se asignara al proyecto");
		}
		if(!nombre){
			toastr.warning("No envie campos vacios");
		}else{
			$.post("consultar_datos_proyecto",{id:nombre,ci:cedula},function(data){
				var estado =JSON.parse(data); 
				console.log(data);
				if(estado == "-1"){
					toastr.error("Proyecto inactivo o no encontrado");
					
					 $("#asociar_proyecto").prop('disabled', true);
				}else{
						toastr.success("Proyecto encontrado");
						
						$("#asociar_proyecto").prop('disabled', false);
					}
				
			});
		}

	});
	
	
 //fin del script que no funciona
 
//comienzod del script de insertar asesor
$("#form-inscribir-asesor").on("submit",function(e){
	e.preventDefault();
	var nombre=$("#nombre_asesor").val();
	if($(this).valid()){
		alert("valid");
		var nombre = $("#nombre_asesor").val();
		var apellido = $("#apellido_asesor").val();
		var email = $("#email_asesor").val();
		var cedula = $("#cedula_asesor").val();
		var telefono = $("#telefono_asesor").val();
		var direccion = $("#direccion_asesor").val();
		var celular = $("#celular_asesor").val();
		//----------------------------------------
		$.post("insertar_asesor",{
		cedula_ase:cedula,
		nombre_ase:nombre,
		apellido_ase:apellido,
		email_ase:email,
		telefono_ase:telefono,
		direccion_ase:direccion,
		celular_ase:celular,
		},
		function(data){
			console.log(data);
			console.log("datos insertar_asesor");
		});
	}else{  
		alert("non valid");
	}
});
//final de la funcion que busca prestador
$("#asociar_proyecto").on("click",function(){


	var asesor=$("#id_cedula_asesor").val();
	var proyecto=$("#nombre_proyecto").val();
	var prestador=$("#cedula_prestador").text();
	$.post("asociar",{
	cedula_ase:asesor,
	nombre_proy:proyecto,
	cedula_pres:prestador,
	},
	function(data){
		console.log(data);
		console.log("datos asociar");
	});
});
});
</script>
