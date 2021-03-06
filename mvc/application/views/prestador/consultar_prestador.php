<!--Consultar / modificar prestador-->



<style>



  #info{
    margin-top: 20px;
  float: right;
  width:70%;
  

  }

  .form-control1 {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
          transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

#form{

  width:75%;
  height:50%;
}

button a {

  text-decoration: none;
  color: #FFF;
}

button a:hover{

  text-decoration: none;
  color: #FFF;

}


</style>


<div class="container">

<br><br>

<ol class="breadcrumb">
  <h5> Proyectos Actuales</h5>
 <select id="l_proyectos" class="form-control">
  <option value="">Seleccione Proyecto</option>
  
</select>

<div id="consultar_proyecto">

    <ol class="breadcrumb">

        
            
          <label>Nombre del Proyecto </label>          
          
          <input  id="nombre_proyecto" type="text"  class="form-control">  

          <label>Fecha de Creación </label> 

          <input id="fecha_creacion" type="text"  class="form-control">
          <button id="bnt-ayuda-estado" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Activo: El proyecto actualmente se encuentra en desarrollo    Finalizado: El proyecto no se encuentra en ejecucion " data-original-title="" title="">
           <span class="glyphicon glyphicon-info-sign"></span> 
          </button>
          <label>Estado  </label> 
    
          <input id="estado_proyecto" type="text"  class="form-control">
          
          <label>Código </label> 

          <input  id="codigo_proyecto" type="text"  class="form-control">

          <label>Fecha de Inicio de Proyecto </label> 

          <input  id="fecha_ini_proy" type="text"  class="form-control">
           <button id="bnt-ayuda-estado-prestador" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Activo: El prestador se encuentra desarrollando el proyecto   Finalizado: Proyecto en el cual el prestador ha terminado su participacion" data-original-title="" title="">
           <span class="glyphicon glyphicon-info-sign"></span> 
          </button>

          <label>Estado del Prestador en el Proyecto </label> 

          <input  id="estado_proy_prestador" type="text"  class="form-control">

        

    </ol>
</div>


</ol>


    <center><h3 id="texto">Listado de Horas Guardadas</h3></center>

  <table id="informacion_proyecto" class="table table-hover">
    <thead>
      <tr>
        <th>Observación</th>
        <th>Realizado por</th>
        <th>Horas</th>
        <th>Fecha Modif.</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<h4>Total Horas Proyecto Actual: <span id="total_horas_proyecto_act"> </span></h4>
<h4>Total Horas Todos Proyecto: <span id="total_horas_proyectos"> </span></h4>

<br><br>
<center>

<button type="button" class="reportar-horas btn btn-info" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="btn_consultar_proyecto" class="btn btn-info" >Consultar Proyecto</a></button>

<button id="btn_control_horas" type="button" class="btn btn-info">Imprimir Control de Horas</button>


</center>

<br><br><br><br>


<!--tabla horario de trabajo-->

    <center><h3 id="texto">Horario de Trabajo</h3></center>

    <br></br>

       <table class="table table-hover" id="tabla_consulta">
                 <thead>
                      <tr class="success">
                       <th><p>Lunes</p></th>
                        <th><p>Martes</p></th>
                        <th><p>Miércoles</p></th>
                        <th><p>Jueves</p></th>
                        <th><p>Viernes</p></th>
                        <th><p>Sábado</p></th>
                        <th><p >Domingo</p></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <td class="lunes"><p  ></p></td>
                      <td class="martes"><p  ></p></td>
                      <td class="miercoles"><p  ></p></td>   
                      <td class="jueves"><p  ></p></td>    
                      <td class="viernes" ><p ></p></td>
                      <td class="sabado" ><p  ></p></td>    
                      <td class="domingo" ><p  ></p></td>           
                      </tr>
                  </tbody>
          </table>

    <br></br>
  </div>

  <center>
    <p>
    
       <button id="finalizar_proyecto" type="button" class="btn btn-info">Finalizar Proyecto Actual </button>
    
      <button  id= "btn_carta_culminacion" type="button" class="btn btn-info">Imprimir Carta de Culminacion</button>
      
      <button id="btn_not_culminacion" type="button" class="btn btn-info">Imprimir Notificación de Culminación</button>
    
    </p>
  </center>

<!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <center><h4 class="modal-title">Reporte de Horas</h4></center>

        </div>

        <div class="modal-body">

          <label>Prestador </label> 

          <fieldset disabled>

          <input type="text" id="nombre_prestador_modal" class="form-control" placeholder="Nombre del Alumno">

         </fieldset>

          <label>Horas Realizadas </label> 

          <input type="text" id="horas_realizadas_modal" class="form-control" placeholder="Ingrese horas realizadas">

          <label>Fecha </label>

          <input type="text" class="datepicker form-control" value="<?php echo  date("Y-m-d") ;?>" id="fecha_modal" data-date-format="yyyy-mm-dd">

          <label>Observación </label>

          <textarea  id="observacion_modal" class="form-control" rows="2"></textarea>



        </div>

        

        <div class="modal-footer">

          <button type="button" class="btn-cerrar-modal btn btn-default"  data-dismiss="modal">Cerrar</button>

          <button type="submit" id="enviar_datos_modal" data-loading-text="Guardando registro" class="btn btn-primary">Guardar</button>



        </div>

      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->


</div> <!-- /container-->


<script>
$(document).ready(function(){
  $(".ayuda-pop").popover();

$("#finalizar_proyecto").attr("disabled", true);
//deshabilitamos  los botones de reporte-horas

  $("button.reportar-horas").attr("disabled","disabled");

  $("#btn_not_culminacion").attr("disabled",true);

  $("#btn_carta_culminacion").attr("disabled",true);

  $("#finalizar_proyecto").attr("disabled", true);

//configuracion de las ventanas de alerta

   var ci =  main_datos.prestador.cedula;
   
   if(ci) listar_proyecto(ci,1);

   //Inserto los datos del Prestador
   $("#nombre_prestador_modal").val(main_datos.prestador.nombre+" "+main_datos.prestador.apellido);

   //listo los proyectos del prestador

  $(".collapse").collapse();


  $('#myModal').modal("hide");



$("#btn_consultar_proyecto").click(function(){

  $("#consultar_proyecto").fadeToggle(1000);

  $("#consultar_detalles_proyecto").fadeToggle(1000);

  $("#tabla_consulta").fadeToggle(1000);

  $("#texto").fadeToggle(1000);

});



$("#modificar_datos").on("click",function(){

   $(".form-modificar-datos").attr("disabled",false);

});
  



$('body').unbind('change').on('change','#l_proyectos',function(ev){ 

     $("#informacion_proyecto tbody").empty();
    var option= $('#l_proyectos option:selected').val();
    var id_proy ;
    var id = main_datos.prestador.cedula;
    var datos_proyecto; 
    
    if(option!=""){
        

  $("button.reportar-horas").removeAttr("disabled");

        $.ajax({
          type : "POST",
          url: "ver_detalles_proyecto",
          data: {id:option,estado:1},
          success: function(data) {

      
         datos_proyecto=JSON.parse(data); 
   
        $("#nombre_proyecto").val(datos_proyecto[0]["nombre_proyecto"]);
        $("#fecha_creacion").val(datos_proyecto[0]["fecha_ini"]);
        $("#estado_proyecto").val(datos_proyecto[0]["estado_proyecto"]);
        $("#codigo_proyecto").val(datos_proyecto[0]["id_proyecto"]);

       
              // console.log(buscar_proyectos_prestador);

        id_proy=datos_proyecto[0]["id_proyecto"];


      $.post("horario_trabajo",{id_proyecto:id_proy ,id_prestador:id },function(data){

            var horas=JSON.parse(data);
          

              $.each(horas[0],function(index){

                  $("#tabla_consulta").find("td."+index).text(horas[0][index]);


              });

              $("#fecha_ini_proy").val(horas[0]["fecha_ini_proyecto"]);
              var estado = horas[0]["estado_proy"];

              if (estado == 1){
              $("#estado_proy_prestador").val("Activo");
              }else{
              $("#estado_proy_prestador").val("Finalizado");
              }
              $('#tabla_consulta td:contains("null")').text("");


    
      });

       $.post("datos_horas_insertadas",{id_proyecto:id_proy ,id_prestador:id },function(data){

                 var horas_insertadas=JSON.parse(data);
          
                  console.log("vez");

                     var tr="";
                     var td="";
                     $.each(horas_insertadas,function(index){

                         td += "<tr><td>"+horas_insertadas[index]["observaciones_proyecto"]+"</td>";
                         td += "<td>"+horas_insertadas[index]["realizado_por"]+"</td>";
                         td += "<td>"+horas_insertadas[index]["cant_horas"]+"</td>";
                         td += "<td>"+horas_insertadas[index]["fecha"]+"</td></tr>";
                     });
                      $("#informacion_proyecto tbody").append(td);

          });
          
          $.post("suma_horas",{id_proyecto:id_proy ,id_prestador:id },function(data){

                  var horas_totales_actual = JSON.parse(data);
          
                  console.log(horas_totales_actual[0]["sum1"]);
                  $("#total_horas_proyecto_act").html(horas_totales_actual[0]["sum1"]);
            
          });

        $.post("suma_horas_totales",{id_prestador:id },function(data){



                  var horas_totales_proyectos = JSON.parse(data);

                  var estado_proyecto_prestador = $("#estado_proy_prestador").val();



          

                  var checkhoras = horas_totales_proyectos[0]["sum1"];

                  $("#total_horas_proyectos").html(horas_totales_proyectos[0]["sum1"]);



                    if(checkhoras < 90 && estado_proyecto_prestador == "Activo"){

                      $("button.reportar-horas").attr("disabled", false);

                      $("#finalizar_proyecto").attr("disabled", false);

                      $("#btn_not_culminacion").attr("disabled",true);

                      $("#btn_carta_culminacion").attr("disabled",true);

                    


                    }else if(checkhoras < 90 && estado_proyecto_prestador == "Finalizado"){

                      $("button.reportar-horas").attr("disabled", true);

                      $("#finalizar_proyecto").attr("disabled", true);

                      $("#btn_not_culminacion").attr("disabled",false);

                      $("#btn_carta_culminacion").attr("disabled",true);

                      $("div [href='#asignar_pro']").show();



                    }else if(checkhoras >= 90 && estado_proyecto_prestador == "Finalizado"){

                      $("button.reportar-horas").attr("disabled", true);

                      $("#finalizar_proyecto").attr("disabled", true);

                      $("#btn_not_culminacion").attr("disabled",false);

                      $("#btn_carta_culminacion").attr("disabled",false);

                    }else if(checkhoras >= 90 && estado_proyecto_prestador == "Activo"){

                      $("button.reportar-horas").attr("disabled", true);

                      $("#finalizar_proyecto").attr("disabled", false);

                      $("#btn_not_culminacion").attr("disabled",true);

                      $("#btn_carta_culminacion").attr("disabled",true);

                    }



          });

    }

  });


        
    }else{

        $("button.reportar-horas").attr("disabled","disabled");
        
        $("#informacion_proyecto tbody").empty();
        $("#nombre_proyecto").val("");
        $("#fecha_creacion").val("");
        $("#estado_proyecto").val("");
        $("#estado_proyecto").val("");
        $("#codigo_proyecto").val("");


    }

 });
    


$("#enviar_datos_modal").on("click",function () {


      var btn = $(this);

      btn.button("loading");


  //e.preventDefault();

   // var datos = $(this).serialize();
  var ci =  main_datos.prestador.cedula;
  //var nombre=$("#nombre_prestador_modal").val();
  var n_horas=$("#horas_realizadas_modal").val();
  var fecha=$("#fecha_modal").val();
  var observacion=$("#observacion_modal").val();
  var idproyecto = $("#codigo_proyecto").val();
  var estado = $("#estado_proyecto").val();
  var realizado_por = main_datos.usuario.nombre;

 

  $("#horas_realizadas_modal").val("");
  $("#fecha_modal").val("");
  $("#observacion_modal").val("");


    $.post("insertar_datos_reportar_horas",{
    
    id_prestador:ci,
    horas_realizadas_proyecto:n_horas,
    fecha_avance:fecha,
    observaciones_proyecto:observacion,
    idproyecto: idproyecto,
    estadoact: estado,
    realizado_por:realizado_por

    },
    function(data){

      var td;

        if(data==0){

               toastr.success(mensajes.success.reporte_horas);

                         td += "<tr><td>"+observacion+"</td>";
                         td += "<td>"+realizado_por+"</td>";
                         td += "<td>"+n_horas+"</td>";
                         td += "<td>"+fecha+"</td></tr>";
                  

                      $("#informacion_proyecto tbody").append(td);

          $(btn).button('reset');

          $(".btn-cerrar-modal").click();
          
          $.post("suma_horas",{id_proyecto:idproyecto ,id_prestador:ci },function(data){

                  var horas_totales_actual = JSON.parse(data);
          
                  console.log(horas_totales_actual[0]["sum1"]);
                  $("#total_horas_proyecto_act").html(horas_totales_actual[0]["sum1"]);
            
          });

        $.post("suma_horas_totales",{id_prestador:ci },function(data){

                  var horas_totales_proyectos = JSON.parse(data);
          
                  console.log(horas_totales_proyectos[0]["sum1"]);
                  $("#total_horas_proyectos").html(horas_totales_proyectos[0]["sum1"]);

          });

          }else{

              toastr.error(mensajes.error.error_reporte_horas);
        
            }
      });


  

});

$("#btn_control_horas").on('click',function () {

  var ci = main_datos.prestador.cedula;
  var id = $("#codigo_proyecto").val();


    console.log('cedula prestador',main_datos.prestador.cedula);


      generar_reporte("generar_control_horas",0,ci,id);
     
})


$("#btn_carta_culminacion").on('click',function () {

  var ci = main_datos.prestador.cedula;
  var id = $("#codigo_proyecto").val();


    console.log('cedula prestador',main_datos.prestador.cedula);


      generar_reporte("generar_carta_culminacion",0,ci,id);
     
})


$("#btn_not_culminacion").on('click',function () {

  var ci = main_datos.prestador.cedula;
  var id = $("#codigo_proyecto").val();
  
    console.log('cedula prestador',main_datos.prestador.cedula);


      generar_reporte("generar_not_culminacion",0,ci,id);
});

$("")

$("#fecha_modal").datepicker();

$("#finalizar_proyecto").on('click',function(){
    
    var ci = main_datos.prestador.cedula;
    var id = $("#codigo_proyecto").val();

    $.post("finalizar_proyecto",{id_prestador: ci, id_proyecto: id },function(data){


         if (data == 0){
          toastr.success(mensajes.success.finalizar_proyecto);
         }else{
          toastr.error(mensajes.error.error_finalizar_proyecto);
         }
          
          });
});




});


 
</script>
