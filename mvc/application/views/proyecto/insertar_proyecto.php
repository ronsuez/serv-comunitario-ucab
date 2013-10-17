

<script type="text/javascript">


      // This call can be placed at any point after the
      // <textarea>, or inside a <head><script> in a
      // window.onload event handler.

      // Replace the <textarea id="editor"> with an CKEditor
      // instance, using default configurations.

  // "article-body" is the name of a textarea element.
var editor1 = CKEDITOR.inline( 'text-editor1' );
  
var editor2 = CKEDITOR.inline( 'text-editor2' );
    
var editor3 = CKEDITOR.inline( 'text-editor3' );
  
    
   

</script>

<style>
.text-area{

    width: 100%;
    height: auto;



}
</style>
<div class="container">



     <div class="panel panel-default">
               <div class="panel-heading"> Datos basicos del proyecto </div>
               <div class="panel-body">
                   <div class="form-group">
                       <label for="titulo_proyecto">Título del proyecto</label>
                       <input  type="text" class="form-control" id="titulo_proyecto">
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


                  <div  class="form-group">
                      <label for="descripcion">Diagnostico</label>
                      <div  id="text-editor1" contenteditable="true" name="diagnostico" class="text-area form-control"  placeholder="Diagnóstico de la situación, justificación, impacto.">
                         Diagnóstico de la situación, justificación, impacto. 
                      </div>
                 </div>
                 <div class="form-group">
                      <label for="objetivos">Justificacion</label>
                      <div id="text-editor2" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Objetivos generales, objetivos específicos, metas, producto.
                      </div>
                 </div>

                 <div class="form-group">
                      <label for="estrategias">Impacto</label>
                     
                       <div id="text-editor3" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
                        Producto, plan de trabajom recursos requeridos, cronograma.
                      </div>
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


</div> <!--/container-->