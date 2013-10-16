
<script>

$(document).ready(function() {

    $('#myTab li a').click(function (e) {
        e.preventDefault();

        var url = $(this).attr("data-url");
        var href = this.hash;
        var pane = $(this);

            // ajax load from data-url
            $(href).load(url,function(result){      
                 pane.tab('show');
            });
       });

      //carga via ajax el listado de localidades 
        $.get("listar_loc", function (data) {

              // update the section with the {categorie's list}

              $("#ejecuta,#suscribe").html(data);
            });

    });

</script>

<style>

.tab-content{

    margin-top: 30px;
}
</style>

<div class="header">
    <h1>Gestión de Proyectos</h1>
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#inscribir" data-url="insertar_proyecto" >Inscribir</a></li>
        <li class=""><a href="#consultar" data-url="consultar_proyecto">Consultar/Modificar</a></li>
   </ul>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="inscribir">

        <div class="container"> 
          
          <!--/form-inscribir-->


          <form name="form">
     <div class="panel panel-default">
               <div class="panel-heading"> Datos basicos del proyecto </div>
               <div class="panel-body">
                   <div class="form-group">
                       <label for="titulo_proyecto">Título del proyecto</label>
                       <input type="text" class="form-control" id="titulo_proyecto">
                  </div>
                  <div class="form-group">
                       <label for="suscribe">Organización o comunidad quien suscribe convenio</label>
                       <select class="form-control" id="suscribe">
                           <option value="">Seleccione</option>
                      </select>
                 </div>
                 <div class="form-group">
                     <label for="ejecuta">Organización o comunidad donde se ejecuta el proyecto</label>
                     <select class="form-control" id="ejecuta">
                         <option value="">Seleccione</option>
                    </select>
               </div>

          </div>

      </div>


</br>
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Carta Culminacion</button>
</center>

</br>

          <div class="panel panel-default">
              <div class="panel-heading"> Descripcion del proyecto </div>
              <div class="panel-body">


                  <div class="form-group">
                      <label for="descripcion">Diagnostico</label>
                      <textarea class="form-control" id="descripcion" placeholder="Diagnóstico de la situación, justificación, impacto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="objetivos">Justificacion</label>
                      <textarea class="form-control" id="Objetivos" placeholder="Objetivos generales, objetivos específicos, metas, producto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="estrategias">Impacto</label>
                      <textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
                 </div>
            </div>

       </div>  

           <div class="panel panel-default">
              <div class="panel-heading"> Objetivos</div>
              <div class="panel-body">


                  <div class="form-group">
                      <label for="descripcion">Objetivos generales</label>
                      <textarea class="form-control" id="descripcion" placeholder="Diagnóstico de la situación, justificación, impacto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="objetivos">Objetivos especificos</label>
                      <textarea class="form-control" id="Objetivos" placeholder="Objetivos generales, objetivos específicos, metas, producto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="estrategias">Metas</label>
                      <textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
                 </div>
            
                 <div class="form-group">
                      <label for="estrategias">Producto</label>
                      <textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
                 </div>
            

            </div>

       </div>  


 <div class="panel panel-default">
              <div class="panel-heading"> Estrategias</div>
              <div class="panel-body">


                  <div class="form-group">
                      <label for="descripcion">Producto</label>
                      <textarea class="form-control" id="descripcion" placeholder="Diagnóstico de la situación, justificación, impacto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="objetivos">Plan de trabajo</label>
                      <textarea class="form-control" id="Objetivos" placeholder="Objetivos generales, objetivos específicos, metas, producto."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="estrategias">Recursos requeridos</label>
                      <textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
                 </div>
                 <div class="form-group">
                      <label for="estrategias">Cronograma</label>
                      <textarea class="form-control" id="descripcion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma."></textarea>
                 </div>
           


            </div>

       </div> 
  <br><input type="submit" class="btn btn-default" id="enviar" value="Crear Proyecto"></input><br><br> 


     </form> <!--/form-inscribir-->

</div><!-- /container -->

</div><!-- /inscribir-proyecto-->

<div class="tab-pane" id="consultar"></div>

</div>

