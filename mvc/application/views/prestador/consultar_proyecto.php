<div class="container">


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
        

          <fieldset disabled id="modificar2_datos">
          <label>Cedula</label>          
             
          <input  id="cedula_prestador" type="text"  class="form-control">  

          <label>Telefono</label> 

          <input id="telefono_prestador" type="text"  class="form-control">

          <label>Email</label> 

          <input id="email_prestador" type="text"  class="form-control">

          <label>Celular </label> 

          <input  id="celular_prestador" type="text"  class="form-control">

          <label>Direccion</label> 

          <input  id="direccion_prestador" type="text"  class="form-control">
          </fieldset>

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
       

          <fieldset disabled id="modificar3_datos">
          <label>Nro.Expediente</label>          
             
          <input  id="nro_exp_prestador" type="text"  class="form-control">  

          <label>Escuela</label> 

          <input id="escuela_prestador" type="text"  class="form-control">

          <label>Mencion</label> 

          <input id="mencion_prestador" type="text"  class="form-control">

          <label>Semestre</label> 

          <input  id="semestre_prestador" type="text"  class="form-control">
          </fieldset>

      </div>
    </div>
  </div>
</div>
<center>
    <p>
    <br>
      <button  id= "btn_modificar_d" type="button" class="btn btn-primary">Modificar Datos </button>
      <button  id= "btn_aceptar" type="button" class="btn btn-success">Aceptar </button>
      <button id= "btn_cancelar" type="button" class="btn btn-default">Cancelar</button>
    
    </p>
  </center>
</div>



</div> <!-- /container-->

<script>
$('#btn_cancelar').css("display","none");
$('#btn_aceptar').css("display","none");

$(document).ready(function(){

  $(".collapse").collapse();


$("#nombre_prestador").val(main_datos.prestador.nombre);
$("#apellido_prestador").val(main_datos.prestador.apellido);
$("#cedula_prestador").val(main_datos.prestador.cedula);
$("#telefono_prestador").val(main_datos.prestador.telefono);
$("#email_prestador").val(main_datos.prestador.email);
$("#celular_prestador").val(main_datos.prestador.celular);
$("#direccion_prestador").val(main_datos.prestador.direccion);
$("#nro_exp_prestador").val(main_datos.prestador.expediente);
$("#mencion_prestador").val(main_datos.prestador.mencion);
$("#escuela_prestador").val(main_datos.prestador.escuela);
$("#semestre_prestador").val(main_datos.prestador.semestre);

});

$("#btn_modificar_d").on("click",function(){

   $("#modificar1_datos").attr("disabled",false);
   $("#modificar2_datos").attr("disabled",false);
   $("#modificar3_datos").attr("disabled",false);
   $('#btn_cancelar').css("display","inline");
   $('#btn_aceptar').css("display","inline");
   $('#btn_modificar_d').css("display","none");
f});

$("#btn_cancelar").on("click",function(){

   $("#modificar1_datos").attr("disabled",true);
   $("#modificar2_datos").attr("disabled",true);
   $("#modificar3_datos").attr("disabled",true);
   $('#btn_cancelar').css("display","none");
   $('#btn_aceptar').css("display","none");
   $('#btn_modificar_d').css("display","inline");

});
  
$("#btn_aceptar").on("click",function () {


  var nombre = $("#nombre_prestador").val();
  var apellido = $("#apellido_prestador").val();
  var cedula = $("#cedula_prestador").val();
  var telefono = $("#telefono_prestador").val();
  var email = $("#email_prestador").val();
  var celular = $("#celular_prestador").val();
  var direccion = $("#direccion_prestador").val();
  var n_expediente = $("#nro_exp_prestador").val();
  var escuela = $("#escuela_prestador").val();
  var mencion = $("#mencion_prestador").val();
  var semestre = $("#semestre_prestador").val();

$.post("actualizar_datos_prestador",{
    
    cedula:cedula,
    nombre:nombre,
    apellido:apellido,
    email: email,
    celular: celular,
    telefono:telefono,
    expediente:n_expediente,
    escuela: escuela,
    semestre:semestre,
    mencion: mencion,
    direccion:direccion,
    
    
    },
    function(data){
        if(data=="0"){

               toastr.success(mensajes.success.prestador_datos_cargados);
               
          }else{

              toastr.error(mensajes.error.form_nv);
        
            }
      });


   $("#modificar1_datos").attr("disabled",true);
   $("#modificar2_datos").attr("disabled",true);
   $("#modificar3_datos").attr("disabled",true);
   $('#btn_cancelar').css("display","none");
   $('#btn_aceptar').css("display","none");
   $('#btn_modificar_d').css("display","inline");
});




</script>


