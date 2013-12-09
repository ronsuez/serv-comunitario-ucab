
<script>

$(document).ready(function() {


});


</script>

<style>

.tab-content{

  margin-top: 30px;
}
</style>


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

                 <div id="datos_busqueda">

                </div>

            </div>


  </div>


<!-- listado de tabs -->

<div class="header">
  <h1>Gestión de Prestadores</h1>
  <ul class="pestanas nav nav-tabs" id="myTab">
    <li class=""><a href="#inscribir_prestador" data-url="insertar_prestador" >Inscribir</a></li>
    <li class=""><a href="#consultar_pre" data-url="consultar_prestador">Consultar/Modificar</a></li>
    <li class=""><a href="#asignar_pro" data-url="asignar_proyecto">Asignar Proyecto</a></li>
  </ul>
</div>

<div class="pestanas-content  tab-content">
  <div class="tab-pane" id="inscribir_prestador"></div>
<div class="tab-pane" id="consultar_pre"></div>
<div class="tab-pane" id="asignar_pro"></div>

</div>
