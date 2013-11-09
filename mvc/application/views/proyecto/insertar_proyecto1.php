

<script type="text/javascript">

$(document).ready(function() {
          // This call can be placed at any point after the
          // <textarea>, or inside a <head><script> in a
          // window.onload event handler.

          // Replace the <textarea id="editor"> with an CKEditor
          // instance, using default configurations.


    //Inicializdor para los editores de texto enriquecido para cada text-area


    var editor1 = CKEDITOR.inline( 'text-diagnostico' );

    var editor2 = CKEDITOR.inline( 'text-justificacion' );

    var editor3 = CKEDITOR.inline( 'text-impacto' );


    var editor4 = CKEDITOR.inline( 'text-objetivos-g' );

    var editor5 = CKEDITOR.inline( 'text-objetivos-e' );

    var editor6 = CKEDITOR.inline( 'text-metas' );
    var editor7 = CKEDITOR.inline( 'text-producto' );

      // "Text-area para la descripcion del proyecto.
      
      var editor8 = CKEDITOR.inline( 'text-plan-trabajo' );
      
      var editor9 = CKEDITOR.inline( 'text-recursos' );

      var editor10 = CKEDITOR.inline( 'text-cronograma' );
      

    //Inicializdor y handler para el validador del form insertar-proyecto

    $("#addform-proyecto").validate({

        rules:{
          titulo_proyecto:"required"
      },
      messages: {
          titulo_proyecto: {
            required: 'El campo es requerido'
        },
        suscribe: {
            required: 'El campo es requerido'
        },
        ejecuta: {
            required: 'El campo es requerido'
        }
    }
});

     //carga via ajax el listado de localidades 
     $.get("listar_loc", function (data) {

                  // update the section with the {categorie's list}

                  $("#ejecuta,#suscribe").html(data);
              });


     $("#addform-proyecto").bind("submit",function (e){


      e.preventDefault();


      if ($(this).valid()){

        var dinamic_text = "[";

        $('div [class~=text-area]').each(function (){

            if($(this).attr("id") === "text-cronograma"){

              dinamic_text = dinamic_text +'{"name":"'+$(this).attr("id")+'","value":"'+$(this).html()+'"}]';

          }else{

            dinamic_text = dinamic_text +'{"name":"'+$(this).attr("id")+'","value":"'+$(this).html()+'"},';

        }


    });

        var titulo = JSON.stringify($(this).serializeArray());



        $.post("registrar_proyecto",{texto:dinamic_text,datos:titulo},function (data){
           $("#inscribir").html(data);
       });

    }

});

     $("#ayuda_diagnostico").popover();
     $("#ayuda_justificacion").popover();
     $("#ayuda_impacto").popover();
     $("#ayuda_objetivos-g").popover();
     $("#ayuda_objetivos-e").popover();
     $("#ayuda_metas").popover();
     $("#ayuda_producto").popover();
     $("#ayuda_plan-trabajo").popover();
     $("#ayuda_recursos").popover();
     $("#ayuda_cronograma").popover();

 });

</script>

<style>
.text-area{

    width: 100%;
    height: auto;



}
</style>
<div class="container">

    <!-- Custom rules and messages via data- attributes -->
    <form class="cmxform" id="addform-proyecto" method="post" action="">

     <div class="panel panel-default">
       <div class="panel-heading">Datos basicos del proyecto </div>
       <div class="panel-body">
           <div class="form-group">
               <label for="titulo_proyecto">Título del proyecto</label>
               <input  name="titulo_proyecto" type="text" class="form-control" id="titulo_proyecto" data-rule-required="true">
           </div>

           <div class="form-group">
               <label for="suscribe">Organización o comunidad quien suscribe convenio</label>
               <select class="form-control"  name="suscribe" id="suscribe">
                   <option value="">Seleccione</option>
               </select>
           </div>
           <div class="form-group">
             <label for="ejecuta">Organización o comunidad donde se ejecuta el proyecto</label>
             <select class="form-control" name="ejecuta" id="ejecuta">
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
          <label for="text-descripcion">Diagnostico</label>
          <button id="ayuda_diagnostico" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Caracterización de la situación que enmarca al problema, es decir las condiciones en las cuales se encuentra  la localidad u organización en la que se ejecutará el proyecto." data-original-title="" title="">
            Ayuda
        </button>
        <div   id="text-diagnostico"  contenteditable="true" name="diagnostico" class="text-area form-control">
        </div>
    </div>
    <div class="form-group">
      <label for="text-justificacion">Justificacion</label>
      <button id="ayuda_justificacion" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Motivaciones que llevan a desarrollar el proyecto (por qué y para qué). Valor o importancia de éste." data-original-title="" title="">
        Ayuda
    </button>
    <div id="text-justificacion" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">  
    </div>
</div>

<div class="form-group">
  <label for="text-impacto">Impacto</label>
  <button id="ayuda_impacto" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Estimación de cantidad de personas que se beneficiarán directa e indirectamente  con el proyecto. Descripción de ventajas y oportunidades que acarreará para la comunidad." data-original-title="" title="">
    Ayuda
</button>
<div id="text-impacto" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">     
</div>
</div>
</div>

</div>  

<div class="panel panel-default">
  <div class="panel-heading"> Objetivos</div>
  <div class="panel-body">


      <div class="form-group">
          <label for="text-objetivos-g">Objetivos generales</label>
          <button id="ayuda_objetivos-g" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Propósito global que se persigue." data-original-title="" title="">
            Ayuda
        </button>
        <div id="text-objetivos-g" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">


        </div>

    </div>

    <div class="form-group">
      <label for="text-objetivos-e">Objetivos especificos</label>
      <button id="ayuda_objetivos-e" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Propósitos específicos del proyecto a través de los cuales se alcanzará el objetivo general." data-original-title="" title="">
        Ayuda
    </button>
    <div id="text-objetivos-e" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
    </div>

</div>

<div class="form-group">

  <label for="text-metas">Metas</label>
  <button id="ayuda_metas" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Cuantificación física de  los  objetivos específicos del proyecto." data-original-title="" title="">
    Ayuda
</button>
<div id="text-metas" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
</div>

</div>

<div class="form-group">
  <label for="text-producto">Producto</label>
  <button id="ayuda_producto" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Elementos a ser entregados a la organización o comunidad como resultado final del proyecto (pueden ser tangibles o intangibles)." data-original-title="" title="">
    Ayuda
</button>
<div id="text-producto" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
</div>

</div>


</div>

</div>  


<div class="panel panel-default">
  <div class="panel-heading"> Estrategias</div>
  <div class="panel-body">




     <div class="form-group">
      <label for="text-plan-trabajo">Plan de trabajo</label>
      <button id="ayuda_plan-trabajo" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Relación entre las metas y los objetivos, las actividades y las acciones y los recursos que permitirán alcanzar el objetivo general (que queremos lograr, lo que haremos y cómo lo haremos)." data-original-title="" title="">
        Ayuda
    </button>
    <div id="text-plan-trabajo" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
    </div>

</div>

<div class="form-group">
  <label for="text-recursos">Recursos requeridos</label>
  <button id="ayuda_recursos" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Materiales, Humanos y Financieros." data-original-title="" title="">
    Ayuda
</button>
<div id="text-recursos" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
</div>

</div>

<div class="form-group">
  <label for="text-cronograma">Cronograma</label>
  <button id="ayuda_cronograma" type="button" class="btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Diagrama de la secuencia de actividades a desarrollar para ejecutar el proyecto y los tiempos previstos para la realización de cada una de ellas (anexar si es necesario)." data-original-title="" title="">
    Ayuda
</button>
<div id="text-cronograma" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
</div>

</div>



</div>

</div> 
<br><input type="submit" class="btn btn-default" id="enviar" value="Crear Proyecto"></input><br><br> 
</form>

    </div> <!--/container-->