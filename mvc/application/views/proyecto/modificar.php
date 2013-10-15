
<!--/Consultar/Modificar proyecto-->
<style>
#accordion{
	
	margin-top: 30px;
}

</style>
<div class="container">

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
								Estrategias
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


	<div class="panel panel-default">
		<div class="panel-heading"> Horario de trabajo</div>
		<div class="panel-body">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Domingo</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
      </tr>
    </thead>
  <tbody>
    <tr>
      <td>7:00 - 8:00</td>
    </tr>
    <tr>
      <td>8:00 - 9:00</td>
    </tr>
    <tr>
      <td>9:00 - 10:00</td>
    </tr>
    <tr>
      <td>10:00 - 11:00</td>
    </tr>
    <tr>
      <td>11:00 - 12:00</td>
    </tr>

    </tbody>
</table>
</div>
	</div>



</div>	<!--/container-->

<script type="text/javascript">
/*$(document).ready(function(){

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

});*/
</script>
