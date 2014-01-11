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




<!--Consultar / modificar prestador-->

<script>
$(document).ready(function(){



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
