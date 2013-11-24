
<script>

$(document).ready(function() {


  $('.pestanas li[class$="active"] a').click();

});


</script>

<style>

.tab-content{

  margin-top: 30px;
}
</style>

<!-- listado de tabs -->

<div class="header">
  <h1>Gestión de Prestadores</h1>
  <ul class="pestanas nav nav-tabs" id="myTab">
    <li class="active"><a href="#inscribir" data-url="insertar_prestador" >Inscribir</a></li>
    <li class=""><a href="#consultar" data-url="consultar_prestador">Consultar/Modificar</a></li>
    <li class=""><a href="#asignar_pro" data-url="asignar_proyecto">Asignar Proyecto</a></li>
    <li class=""><a href="#hola" data-url="hola">Hola Juan</a></li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir"></div>
<div class="tab-pane" id="consultar"></div>
<div class="tab-pane" id="asignar_pro"></div>
<div class="tab-pane" id="hola"></div>

</div>

