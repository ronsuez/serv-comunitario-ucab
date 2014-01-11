<style>


  

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
     

			
			<!--formulario de busqueda de proyectos-->

		<div class="panel panel-default">
		<div class="panel-heading">Busqueda de proyectos</div>
		<div class="result-search panel-body">
		
			<div class="input-group input-group-sm">
                <input  type="text" class="q_proyecto form-control" placeholder="Introduzca el nombre del proyecto"></input>
                <span class="input-group-btn">
                  <button id="buscar_proyecto" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              </div><!-- /input-group -->
		

			<div class="results proyecto">
				
				<div class="search_results proyecto">
				

				</div>
			</div><br>
			<div id="consultar_proyecto">

    <ol class="breadcrumb">

        <fieldset disabled>
            
          <label>Nombre del proyecto </label>          
             
          <input  id="n_proyecto" type="text"  class="form-control">  

          <label>Fecha de creacion </label> 

          <input id="f_proyecto" type="text"  class="form-control">

          <label>Estado  </label> 

          <input id="e_proyecto" type="text"  class="form-control">

          <label>Codigo </label> 

          <input  id="c_proyecto" type="text"  class="form-control">

        </fieldset>

    </ol>
</div>
		</div>
	</div>
      
	


											
			
<!--formulario de busqueda de proyectos
						<div class="panel panel-default">

											<div class="panel-heading">
											  <h3 class="panel-title">Buscar Asesor</h3>
											</div>
											<div class="panel-body">
											  
											  <div class="input-group input-group-sm">
												<input id="b_asesor" type="text" class="form-control" placeholder="Introduzca cédula del Asesor"></input>
												<span class="input-group-btn">
												  <button id="consultar_asesor" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											  </div> 
												<div class="results asesor">
													<label>Resultados</label>
													<div class="search_results asesor">
													

													</div>
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
		</div>-->
		    <center><h3 id="texto">Horario de trabajo</h3></center>

    <br></br>

    <table class="table" id="tabla_consulta">

      <tr>            

       <td><p class="navbar-text" >Lunes</p></td><td class="lunes"><p class="navbar-text" ><input id="h_lunes" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>

       <td><p class="navbar-text" >Martes</p></td><td class="martes"><p class="navbar-text" ><input id="h_martes" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>

      </tr>

      <tr>

        <td><p class="navbar-text" >Miercoles</p></td><td class="miercoles"><p class="navbar-text" ><input id="h_miercorles" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>

        <td><p class="navbar-text" >Jueves</p></td><td class="jueves"><p class="navbar-text" ><input id="h_jueves" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>

      </tr>

      <tr>

        <td><p class="navbar-text" >Viernes</p></td><td class="viernes" ><p class="navbar-text" ><input id="h_viernes" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>
 		<td><p class="navbar-text" >Sabado</p></td><td class="sabado"><p class="navbar-text" ><input id="h_sabado" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>

      </tr>

       <tr>

        <td><p class="navbar-text" >Domingo</p></td><td class="domingo" ><p class="navbar-text" ><input id="h_domingo" type="text" class="form-control" placeholder="HH:MM - HH:MM"></p></td>
 		

      </tr>

    </table>

    <br>

		<button class="btn btn-default" id="asociar_proyecto" type="submit">  Asociar proyecto a prestador</button>	

</div>	<!-- fin container -->



		<!--modal-inscribir asesor-->

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

<!--Consultar / modificar prestador-->

<script>
$(document).ready(function(){

//configuracion de las ventanas de alerta

//fin del script de busqueda de asesor



//hay que revisar este puto script

	
	
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


	//var asesor=$("#cedula_asesor").val();
	var fecha_proy=$("#f_proyecto").val();
	var prestador=$("#ci_prestador").val();
	var cod_proy=$("#c_proyecto").val();
	var lunes=$("#h_lunes").val();
	var martes=$("#h_martes").val();
	var miercoles=$("#h_miercorles").val();
	var jueves=$("#h_jueves").val();
	var viernes=$("#h_viernes").val();
	var sabado=$("#h_sabado").val();
	var domingo=$("#h_domingo").val();


	$.post("asociar",{
	cedula_pres:prestador,
	fecha_proyecto:fecha_proy,
	codigo_proyecto:cod_proy,
	lu:lunes,
	ma:martes,
	mier:miercoles,
	jue:jueves,
	vier:viernes,
	sa:sabado,
	dom:domingo,
	},
	function(data){
		console.log(data);
		console.log("datos asociar");
	});
});
});
</script>
