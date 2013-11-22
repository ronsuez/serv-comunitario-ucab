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

<div class="header">
    <h1>Gestión de Proyectos</h1>
    <ul class="pestanas nav nav-tabs" id="myTab">
        <li class="active"><a href="#inscribir" data-url="insertar_proyecto" >Inscribir</a></li>
        <li class=""><a href="#consultar" data-url="consultar_proyecto">Consultar/Modificar</a></li>
   </ul>
</div>

<div class="pestanas-content tab-content">
    <div class="tab-pane active" id="inscribir"></div><!-- /inscribir-proyecto-->

    <div class="tab-pane" id="consultar"></div>

</div>

