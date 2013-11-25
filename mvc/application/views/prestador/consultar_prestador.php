<!--Consultar / modificar prestador-->



<style>


  #cont{

    width:100%;
    height:200px;
   
  }

  #foto{
    margin-top: 20px;

    float:left;
    
    margin-right: 20px;
  }


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

/*#id_prestador_cedula{
  float: left;
}
#c_datos_prestador{
  float: left;
}
#datos_busqueda{  
clear:both;
}*/

.input-group .input-group-sm {

}

</style>



<div class="container">

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

            </div>


          </div>
      <div id="cont">
      
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

      <br><br>

   <div id="cont1">       
  
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
           Datos Personales
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">


           <form class="form-inline" role="form">
              <fieldset class="form-modificar-datos" disabled>
                <div class="form-group">
                  <label>Cedula</label>
                  <input type="text" id="cedula_prestador" class="form-control" placeholder="Cedula prestador">
                  <label>Telefono</label>
                  <input type="text" id="telefono_prestador" class="form-control" placeholder="Telefono del Prestador">
                  <label>Correo Electronico</label>
                  <input type="text" id="email_prestador" class="form-control" placeholder="Correo Electronica">
                  <label>Direccion</label>
                  <input type="text" id="direccion_prestador" class="form-control" placeholder="Direccion">

            </div>
          </fieldset>
        </form>         


      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Datos Academicos
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">
        <fieldset  class="form-modificar-datos" disabled>
            <div class="form-group">
                <label>Numero de  Expediente</label>
                <input type="text" id="nro_exp_prestador" class="form-control" placeholder="No. Expediente">
                <label>Escuela</label>
                <input type="text" id="escuela_prestador" class="form-control" placeholder="Escuela">
                <label>Mencion</label>
                <input type="text" id="mencion_prestador" class="form-control" placeholder="Mencion">
                <label>Semestre</label>
                <input type="text" id="semestre_prestador" class="form-control" placeholder="Semestre">
            </div>
        </fieldset>
      </div>
    </div>
  </div>


<!-- Indicates a successful or positive action -->

<br><br>
<br><br>
<button type="button" id="modificar_datos" class="pull-right btn btn-success" >Modificar datos</a></button>

</div>
</div>


<br><br>
<br><br>
<br><br>

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

<div id="consultar_proyecto">
    <ol class="breadcrumb">
        <h5> Nombre del Proyecto </h5>
        <select class="form-control">
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



  $("#consultar_proyecto").css("display", "none");

  $("#tabla_consulta").css("display", "none");

  $("#texto").css("display", "none");

  



$("#btn_consultar_proyecto").click(function(){

  $("#consultar_proyecto").fadeToggle(1000);

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



    });
   

}

  function b_consultar_prestador(query,option){

        $.post("b_listar_prestadores",{q:query,o:option},function(data){

                  console.log(data); 
      
              var array=JSON.parse(data);

              var content ="";

              $.each(array,function(i){
                content = content +'<li class="list-group-item"><a class="key_prestador" href="'+ array[i]["ci_prestador"] +' "> '+ array[i]["nombre_prestador"]+array[i]["Apellido_prestador"]+'</a></li>';

              });

              $("#datos_busqueda").html("<ul class='list-group'>"+content+"</ul>");

        });
  }



$("body #id_prestador_cedula").on("keyup", function(event){

          

        var query = $(this).val();
         var option = "";
          console.log($(this).val());

          if (query!="" && event.keyCode >= 48 && event.keyCode <= 57){
                console.log(query+"input was 0-9");
            option = "cedula";

          b_consultar_prestador(query,option);

          } else if (query!="" && event.keyCode >= 65 && event.keyCode <= 90){

            console.log(query+"input was a-z");
          option = "nombre";

          b_consultar_prestador(query,option);

        }


      event.stopPropagation();

  });

$('body').on('click','a.key_prestador', function (ev) {
        
          ev.preventDefault();

      console.log($(this).attr("href"));

 

    $.post("consultar_datos_prestador",{id:$(this).attr("href")},function(data){

                            var estado =JSON.parse(data)["estado"]; 

                                   console.log(JSON.parse(data));

                             
                              if(estado === "-1"){

                                  toastr.error(mensajes.error.prestador_nf);


                              }else{

                                 toastr.success(mensajes.success.prestador_f);



                              var datos_personales =JSON.parse(data)["datos_personales"][0];
                            
                              var datos_academicos =JSON.parse(data)["datos_academicos"][0];
                              
                      

                            $("#nombre_prestador").val(datos_personales.nombre_prestador);


                            $("#apellido_prestador").val(datos_personales.Apellido_prestador);


                            $("#celular_prestador").val(datos_personales.celular_prestador);


                            $("#telefono_prestador").val(datos_personales.telefono_prestador);


                            $("#email_prestador").val(datos_personales.email_prestador);


                            $("#cedula_prestador").val(datos_personales.ci_prestador);


                            $("#direccion_prestador").val(datos_personales.direccion_prestador);


                              //datos academicos


                            $("#nro_exp_prestador").val(datos_academicos.no_exp_prestador);


                            $("#escuela_prestador").val(datos_academicos.escuela_prestador);


                            $("#mencion_prestador").val(datos_academicos.mencion_prestador);


                            $("#semestre_prestador").val(datos_academicos.semestre_prestador);
                             
                            listar_proyecto(datos_personales.ci_prestador);
                        }
                         });

    //limpiamos el imput y escondemos la busqueda 
       $("#datos_busqueda").empty();

      $("#id_prestador_cedula").val("");

 ev.stopPropagation();






  });


      
      $('#seleccion').change(function(){ 
      
        var option= $('#seleccion option:selected').val();
      
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
    
    function listar_proyecto(cedula){
    
    
    $.post("consultar_nombres_proyectos",{ci:cedula,estate:1},function(data){
    
    console.log(data);
    
    var array=JSON.parse(data);
    
    var content ='<option value="">Seleccione </option>';
    
    $.each(array,function(i){
    content = content +'<option value="'+ array[i]["id_proyecto"] +'"> '+ array[i]["nombre_proyecto"]+'</option>';
    
    });
    
    $("#seleccion").html(content);
    
    });
    
    }

 

  });

 
</script>
