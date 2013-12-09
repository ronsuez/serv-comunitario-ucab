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
    <h3 class="panel-title">Buscar usuario</h3>
  </div>
  <div class="panel-body">

    <div class="input-group input-group-sm">

      <input id="id_usuario" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del usuario"></input>
      <span class="input-group-btn">
        <button id="c_datos_usuario" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>

    </div><!-- /input-group -->

    <div id="datos_busqueda">

    </div>

  </div>


</div>

<div class="header">
  <h1>Gestión de Usuarios</h1>
  <ul class="pestanas nav nav-tabs" id="tab_usuarios">
    <li class=""><a href="#registrar_usuario" data-url="registrar_usuario" >Registrar</a></li>
    <li class=""><a href="#modificar_usuario" data-url="admin_coo">Modificar/Deshabilitar</a></li>
  </ul>
</div>

<div class="pestanas-content tab-content">
  <div class="tab-pane" id="registrar_usuario"></div><!-- /inscribir-proyecto-->

  <div class="tab-pane" id="modificar_usuario"></div>

</div>

