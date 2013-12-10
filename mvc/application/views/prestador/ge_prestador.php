
<script>

$(document).ready(function() {

    //$("div [href='#asignar_pro']").hide();

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


  <div id="data-re-prestador">
      
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


  </div>



      


    </div>

<!-- listado de tabs -->

<div class="header">
  <h1>Gestión de Prestadores</h1>
  <ul class="pestanas nav nav-tabs" id="myTab">
    <li class=""><a href="#inscribir_prestador" data-url="insertar_prestador" >Inscribir/Modificar</a></li>
    <li class=""><a href="#consultar_pre" data-url="consultar_prestador">Consultar proyecto</a></li>
    <li class=""><a href="#asignar_pro" data-url="asignar_proyecto">Asignar Proyecto</a></li>
  </ul>
</div>

<div class="pestanas-content  tab-content">
  <div class="tab-pane" id="inscribir_prestador"></div>
<div class="tab-pane" id="consultar_pre"></div>
<div class="tab-pane" id="asignar_pro"></div>

</div>
