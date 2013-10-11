
<script>
  $(document).ready(function(){

    $(".collapse").collapse();

  });
</script>

 
    <div class="container theme-showcase">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <center><h3>Busqueda de Prestadores</h3></center>

        <form action="demo_form.asp">
        <h4>Nombre</h4>
        <input type="text" class="form-control" placeholder="Nombre">

        <h4>CI</h4>
        <input type="text" class="form-control" placeholder="Cedula">

        <button type="submit" class="btn btn-default">Submit</button>
        </form> 

      </div>
      <form class="form-inline" role="form">
        <fieldset disabled>
          <div class="form-group">
          <label>Nombre</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Nombre del Alumno">

          <label>Apellido</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Apellido del Alumno">
          </div>
        </fieldset>
      </form>

      <br><br>

          
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
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       


      </div>
    </div>
  </div>
</div>
<br><br>
<center>
<button type="button" class="btn btn-primary">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Consultar Proyecto</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Carta Culminacion</button>
</center>
<br><br>

<ol class="breadcrumb">
  <h5> Nombre del Proyecto Actual</h5>
  <li class="active">Aqui va el Nombre del Proyecto</li>
</ol>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Observacion</th>
        <th>Realizado por</th>
        <th>Horas</th>
        <th>Fecha Modif.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Obser</td>
        <td>Nombre</td>
        <td>N hrs</td>
        <td>Fecha</td>
      </tr>
    </tbody>
</table>

<h4>Subtotal</h4> <label> Num </label>
<h4>Otros Proy</h4> <label> Num</label>
<h4>Total</h4> <label>Num </label>


<center><p>
  <button type="button" class="btn btn-primary btn-lg">Finalizar Prestacion en este Proyecto </button>
  <button type="button" class="btn btn-default btn-lg">Imprimir Notificacion Culminacion</button>
</p></center>

     
    </div> <!-- /container -->

