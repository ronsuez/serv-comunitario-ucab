
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
     <div class="panel-heading">Datos Básicos del Proyecto </div>
     <div class="panel-body">
       <div class="form-group">
         <label for="titulo_proyecto">Título del Proyecto</label>
         <input  name="titulo_proyecto" type="text" class="form-control" id="titulo_proyecto" data-rule-required="true" placeholder="Introduzca nombre del Proyecto">
       </div>

       <div class="form-group">
         <label for="suscribe">Organización o Comunidad quien suscribe convenio</label>
         <select class="form-control"  name="suscribe" id="suscribe">
           <option value="">Seleccione</option>
         </select>
       </div>
       <div class="form-group">
         <label for="ejecuta">Organización o Comunidad donde se ejecuta el proyecto</label>
         <select class="form-control" name="ejecuta" id="ejecuta">
           <option value="">Seleccione</option> 
         </select>
       </div>

       
     </div>

   </div>

 </br>
 <div class="panel panel-default">
  <div class="panel-heading"> Descripción del proyecto </div>
  <div class="panel-body">


    <div  class="form-group">
      <label for="text-descripcion">Diagnóstico</label>
      <button id="ayuda_diagnostico" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Caracterización de la situación que enmarca al problema, es decir las condiciones en las cuales se encuentra  la localidad u organización en la que se ejecutará el proyecto." data-original-title="" title="">
        <span class="glyphicon glyphicon-info-sign"></span>
      </button>
      <div   id="text-diagnostico"  contenteditable="true" name="diagnostico" class="text-area form-control">
      </div>
    </div>
    <div class="form-group">
      <label for="text-justificacion">Justificación</label>
      <button id="ayuda_justificacion" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Motivaciones que llevan a desarrollar el proyecto (por qué y para qué). Valor o importancia de éste." data-original-title="" title="">
       <span class="glyphicon glyphicon-info-sign"></span>
     </button>
     <div id="text-justificacion" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">  
     </div>
   </div>

   <div class="form-group">
    <label for="text-impacto">Impacto</label>
    <button id="ayuda_impacto" type="button" class="ayuda-pop  btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Estimación de cantidad de personas que se beneficiarán directa e indirectamente  con el proyecto. Descripción de ventajas y oportunidades que acarreará para la comunidad." data-original-title="" title="">
     <span class="glyphicon glyphicon-info-sign"></span>
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
      <label for="text-objetivos-g">Objetivos Generales</label>
      <button id="ayuda_objetivos-g" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Propósito global que se persigue." data-original-title="" title="">
       <span class="glyphicon glyphicon-info-sign"></span>
     </button>
     <div id="text-objetivos-g" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">


     </div>

   </div>

   <div class="form-group">
    <label for="text-objetivos-e">Objetivos Específicos</label>
    <button id="ayuda_objetivos-e" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Propósitos específicos del proyecto a través de los cuales se alcanzará el objetivo general." data-original-title="" title="">
     <span class="glyphicon glyphicon-info-sign"></span>
   </button>
   <div id="text-objetivos-e" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
   </div>

 </div>

 <div class="form-group">

  <label for="text-metas">Metas</label>
  <button id="ayuda_metas" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Cuantificación física de  los  objetivos específicos del proyecto." data-original-title="" title="">
   <span class="glyphicon glyphicon-info-sign"></span>
 </button>
 <div id="text-metas" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
 </div>

</div>

<div class="form-group">
  <label for="text-producto">Producto</label>
  <button id="ayuda_producto" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Elementos a ser entregados a la organización o comunidad como resultado final del proyecto (pueden ser tangibles o intangibles)." data-original-title="" title="">
   <span class="glyphicon glyphicon-info-sign"></span>
 </button>
 <div id="text-producto" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
 </div>

</div>


</div>

</div>  


<div class="panel panel-default">
  <div class="panel-heading">Estrategias</div>
  <div class="panel-body">




   <div class="form-group">
    <label for="text-plan-trabajo">Plan de Trabajo</label>
    <button id="ayuda_plan-trabajo" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Relación entre las metas y los objetivos, las actividades y las acciones y los recursos que permitirán alcanzar el objetivo general (que queremos lograr, lo que haremos y cómo lo haremos)." data-original-title="" title="">
     <span class="glyphicon glyphicon-info-sign"></span>
   </button>
   <div id="text-plan-trabajo" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
   </div>

 </div>

 <div class="form-group">
  <label for="text-recursos">Recursos Requeridos</label>
  <button id="ayuda_recursos" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Materiales, Humanos y Financieros." data-original-title="" title="">
   <span class="glyphicon glyphicon-info-sign"></span>
 </button>
 <div id="text-recursos" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
 </div>

</div>

<div class="form-group">
  <label for="text-cronograma">Cronograma</label>
  <button id="ayuda_cronograma" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Diagrama de la secuencia de actividades a desarrollar para ejecutar el proyecto y los tiempos previstos para la realización de cada una de ellas (anexar si es necesario)." data-original-title="" title="">
   <span class="glyphicon glyphicon-info-sign"></span>
 </button>
 <div id="text-cronograma" contenteditable="true" class="text-area  form-control" placeholder="Objetivos generales, objetivos específicos, metas, producto.">
 </div>

</div>



</div>

</div> 





<div class="panel panel-default">
  <div class="panel-heading">Asesores</div>
  <div class="panel-body">


    
    
    <!--formulario de busqueda de asesores-->
    <div class="panel panel-default">

      <div class="panel-heading">Buscar Asesor</div>
      <div class="panel-body">
        <div class="input-group input-group-sm">
          <input id="b_asesor" type="text" class="form-control" placeholder="Introduzca cédula del Asesor"></input>
          <span class="input-group-btn">
            <button id="consultar_asesor" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
        <div class="results asesor">
          <label>Resultados (haga click sobre el asesor para asignarlo al proyecto)</label>
          <div class="search_results asesor">


          </div>
        </div>
      </div>
    </div>




    <div class="panel panel-default">

      <div class="panel-heading">Asesores del proyecto</div>
      <div class="panel-body">
        
        <ul class="list-group listado-asesor">
          <ul> 


            <div id="add-asesor-box">      
              <button class="btn btn-default" data-toggle="modal" data-target="#form-asesor">Inscribir Asesor</button>
            </div>

          </div>
          
        </div>

      </div>

    </div>

    <br><input type="submit" class="btn btn-success" id="enviar" value="Crear Proyecto"></input><br><br> 
  </form>

  <script type="text/javascript">

    $(document).ready(function() {

//llamamos la funcion para listar las localidades

listar_localidades();

var ruta = "registrar_proyecto";

if (act_datos_proyecto != 0) {

  popular_datos_proyecto();
  
  ruta = "actualizar_proyecto";

  $("#enviar").val("Actualizar proyecto");
}


        $("#add-asesor-box").hide(); //se esconde el boton para agregar asesor



 //Inicializador para los  popovers de ayuda
 $(".ayuda-pop").popover();

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
      

//popovers para la pagina INSERTAR_PROYECTO


    //Inicializdor y handler para el validador del form insertar-proyecto

    $("#addform-proyecto").validate({

      rules:{
        titulo_proyecto:"required",
        suscribe:"required",
        ejecuta:"required",
        estado:"required"
      },
      messages: {
        titulo_proyecto: {
          required: mensajes.reglas.requerido
        },
        suscribe: {
          required: mensajes.reglas.requerido
        },
        ejecuta: {
          required: mensajes.reglas.requerido
        },
        estado: {
          required: mensajes.reglas.requerido
        }
      }
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

        var asesor = $(".listado-asesor li").attr("id");

        var coordinador = main_datos.usuario.cedula;




          //handler para enviar los datos del proyecto y registrarlo

          $.post(ruta,{estado:1,texto:dinamic_text,datos:titulo,ci_asesor:asesor,ci_coord:coordinador},function (data){
           

            $("#inscribir_proyecto").html(data);

            
          });

        }else{

          console.log(ruta);
        }

      });


});


</script>
