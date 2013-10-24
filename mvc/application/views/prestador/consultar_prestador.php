


<!--Consultar / modificar prestador-->

<script>
$(document).ready(function(){

  $(".collapse").collapse();


  $('#myModal').modal("hide");


    $("#consultar_prestador").click(function(){


        alert($("#id_cedula").val());
          
          var cedula=$("#id_cedula").val();

          $.post("consultar_datos_prestador",{id:cedula},function(data){

              
 
          });  
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



<div class="container">

    <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Buscar prestador</h3>
            </div>
            <div class="panel-body">
              
              <div class="input-group input-group-sm">
                <input id="id_cedula" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
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
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Nombre del Alumno">
              <label>Apellido</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Apellido del Alumno">
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
        

        sentencia sql

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
       
       sentencia sql


      </div>
    </div>
  </div>
</div>
</div>


<br><br>
<br><br>
<br><br>

<ol class="breadcrumb">
  <h5> Proyecto actuales</h5>
 <select class="form-control">
  <option>Seleccione proyecto</option>
  <option>CompuBus 1 </option>
  <option>CompuBus 2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
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
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
    </tbody>
</table>

<h4>Total</h4>

<br><br>
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Carta Culminacion</button>
</center>

<br><br><br><br>

<center><p>
  <button type="button" class="btn btn-primary btn-lg">Finalizar Prestacion en este Proyecto </button>
  <button type="button" class="btn btn-default btn-lg">Imprimir Notificacion Culminacion</button>
</p></center>

<!-- Modal -->


<!-- Button trigger modal -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Reporte de Horas</h4>
        </div>
        <div class="modal-body">
          
          <label>Registrar</label> 
          <ol class="breadcrumb">
            <select class="form-control">
              <option>Seleccione</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>

          </ol>
          <label>horas</label><br><br>
          <label>Comentarios</label>
          <textarea class="form-control" rows="2"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div> <!-- /container-->


