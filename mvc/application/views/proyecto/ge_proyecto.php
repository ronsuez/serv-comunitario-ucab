<script>

$(document).ready(function() {



    //validacion de permisologias
      if(escuela_usuario === "Proyeccion a la comunidad"){

            $(".pestanas [href='#inscribir_proyecto']").remove();

            $(".pestanas [href='#asesor']").remove();

            //$(".pestanas [href='#consultar_proyecto']").click();
            
      }





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
        <li class=""><a href="#inscribir_proyecto" data-url="insertar_proyecto" >Crear/Modificar</a></li>
        <li class=""><a href="#consultar_proyecto" data-url="consultar_proyecto">Consultar</a></li>
        <li class=""><a href="#asesor" data-url="asesor">Asesores</a></li>
   </ul>
</div>

<div class="pestanas-content tab-content">
    <div class="tab-pane" id="inscribir_proyecto"></div>

    <div class="tab-pane" id="consultar_proyecto"></div>

    <div class="tab-pane" id="asesor"></div>
</div>

