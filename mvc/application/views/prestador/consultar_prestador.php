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

<ol class="breadcrumb">
  <h5> Proyecto actuales</h5>
 <select id="p-actuales" class="form-control">
  <option value="">Seleccione proyecto</option>
  
</select>
</ol>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Observacion</th>
        <th>Realizado por</th>
        <th>Horas</th>
        <th>Fecha Modif.</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
       <tr>
        <td>Datos</td>
        <td>Extraidos</td>
        <td>de</td>
        <td>B.Datos</td>
      </tr>
    </tbody>
</table>

<h4>Total</h4>

<br><br>
<center>
<button type="button" class="btn btn-success" data-toggle="modal" href="#myModal">Reportar Horas</button>

<!-- Indicates a successful or positive action -->
<button type="button" id="btn_consultar_proyecto" class="btn btn-success" >Consultar Proyecto</a></button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-success">Inscribir Proyeto</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-success">Carta Culminacion</button>
</center>

<br><br><br><br>

<div id="consultar_detalles_proyecto">
    <ol class="breadcrumb">
        <h5> Nombre del Proyecto </h5>
        <select  id="l_proyectos" class="form-control">
          <option>Seleccione proyecto</option>
        </select>
<center><button type="button" class="btn btn-link" data-toggle="modal" href="#myModal1">Ver detalle</button></center>


<h5>Inicio prestacion del servicio:</h5>

<div class="row">
  <div class="col-lg-2">
  <h5>Periodo:</h5>
    <select class="form-control">
      <option>1</option>
    </select>
    
 </div>
  <center>
  <div class="col-lg-3">
    <h5>Fecha:</h5> 
   </center>cla

     <td><p class="navbar-text" >Lunes</p></td><td><p class="navbar-text" >Hola</p></td>

     <td><p class="navbar-text" >Martes</p></td><td><p class="navbar-text" >Hola</p></td>

   </tr>

   <tr>

     <td><p class="navbar-text" >Miercoles</p></td><td><p class="navbar-text" >Hola</p></td>

   <td><p class="navbar-text" >Jueves</p></td><td><p class="navbar-text" >Hola</p></td>

   </tr>

 <tr>

   <td><p class="navbar-text" >Viernes</p></td><td><p class="navbar-text" >Hola</p></td>

 </tr>

</table>

<br></br>
  


</div>

<center><p>
  <button type="button" class="btn btn-info">Finalizar Prestacion en este Proyecto </button>
  <button type="button" class="btn btn-info">Imprimir Notificacion Culminacion</button>
</p></center>

<!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <center><h4 class="modal-title">Reporte de Horas</h4></center>

        </div>

        <div class="modal-body">

          <label>Realizado por </label> 

          <fieldset disabled>

          <input type="text" id="nombre_prestador" class="form-control" placeholder="Nombre del Alumno">

         </fieldset>

          <label>Horas realizadas </label> 

          <input type="text" id="nombre_prestador" class="form-control" placeholder="Ingrese horas realizadas">

          <label>Fecha </label>

          <input type="text"  class="form-control" placeholder="Fecha de Actividad">

          <label>Observación </label>

          <textarea class="form-control" rows="2"></textarea>



        </div>

        

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

          <button type="button" class="btn btn-primary">Guardar</button>



        </div>

      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->


 <!-- Modal 1 -->

  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

         <center><h4 class="modal-title">Descripción de Proyecto</h4></center>

        </div>

        <div class="modal-body">

       <form id="reporte_horas" name="reporte_horas" action="" method="POST">
          

       <fieldset disabled>
      
       <label>Nombre del proyecto </label>          

       <input  id="nombre_proyecto" type="text"  class="form-control">  

       <label>Fecha de creacion </label> 

       <input id="fecha_creacion" type="text"  class="form-control">

       <label>Estado  </label> 

       <input id="estado_proyecto" type="text"  class="form-control">


       <label>Codigo </label> 

       <input  id="codigo_proyecto" type="text"  class="form-control">

       </fieldset>
     </form>

       </div>

        

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

          

        </div>

            </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->

</div> <!-- /container-->


<script>
$(document).ready(function(){

//configuracion de las ventanas de alerta



  $(".collapse").collapse();


  $('#myModal').modal("hide");



  $("#consultar_detalles_proyecto").css("display", "none");

  $("#tabla_consulta").css("display", "none");

  $("#texto").css("display", "none");

  



$("#btn_consultar_proyecto").click(function(){

  $("#consultar_detalles_proyecto").fadeToggle(1000);

  $("#tabla_consulta").fadeToggle(1000);

  $("#texto").fadeToggle(1000);

});



$("#modificar_datos").on("click",function(){

   $(".form-modificar-datos").attr("disabled",false);
});
  





  function listar_proyecto(cedula){
    

    $.post("b_proyecto_prestador",{ci:cedula,estate:1},function(data){

      console.log(data);

       var array=JSON.parse(data);

              var content ='<option value="">Seleccione </option>';

              $.each(array,function(i){
                content = content +'<option value="'+ array[i]["id_proyecto"] +'"> '+ array[i]["nombre_proyecto"]+'</option>';

              });

              $("#p-actuales").html(content);


              $("#l_proyectos").html(content);


    });
   

}

      
$('body').on('change','#l_proyectos',function(){ 
      
        var option= $('#l_proyectos option:selected').val();
      
        console.log(option);
      
            if(option){
      
                $.post("ver_detalles_proyecto",{id:option,estado:1},function(data){
      
                  console.log(data);
      
      
                 var datos_proyecto=JSON.parse(data); 
      
                  console.log(datos_proyecto);
      
                  console.log(datos_proyecto[0]["nombre_proyecto"]);
      
                  $("#myModal1 #nombre_proyecto").val(datos_proyecto[0]["nombre_proyecto"]);
                  $("#myModal1 #fecha_creacion").val(datos_proyecto[0]["fecha_ini"]);
                  $("#myModal1 #estado_proyecto").val(datos_proyecto[0]["estado_proyecto"]);
                  $("#myModal1 #codigo_proyecto").val(datos_proyecto[0]["id_proyecto"]);
                                   
               });
      
            }
      
      
      
      
      });
    

 

  });

 
</script>
