<style type="text/css">

form label.error{
  color:#e33241;
  margin-left: 2px;
  font-weight: lighter; 
}

#foto{
    margin-top: 20px;

    float:left;
    
    margin-right: 20px;
  }



  #cont{

    width:100%;
    height:200px;
   
  }

   


  </style>


  <div class="container">

  
  <div class="panel-group" id="accordion-datos-prestador">
     
    <form name="form-prestador" id="form-prestador" action="#" method="POST">

      <!-- Datos personales -->
      <div class="panel panel-default">
        <div class="panel-heading">
           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-datos-prestador" href="#collapseOne">
           Datos Personales
           </a>
      </div>

    <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">

          <div class="form-group">
            <label for="">C&eacute;dula</label>
            <input id="ci_prestador" name="cedula" type="text" class="form-control" placeholder="Introduzca la c&eacute;dula del prestador"></input>
          </div>
          <div class="form-group">
            <label for="">Nombres</label>
            <input id="nombre_prestador" name="nombre" type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
          </div>
          <div class="form-group">
            <label for="">Apellidos</label>
            <input id="apellido_prestador" name="apellido" type="text" class="form-control" placeholder="Introduzca los apellidos del prestador"></input>
          </div>

          <div class="form-group">
            <label>Correo Electr&oacute;nico</label>
            <input id="email_prestador" name="email" type="email" class="form-control" placeholder="Introduzca el correo electr&oacute;nico"></input>
          </div>
          <div class="form-group">  
            <label for="">Tel&eacute;fono Celular</label>
            <input id="celular_prestador" name="telefono_cel" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono celular"></input>
          </div>
          <div class="form-group">
            <label for="">Tel&eacute;fono de Habitaci&oacute;n</label>
            <input id="telefono_prestador" name="telefono_hab" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono de habitaci&oacute;n"></input>
          </div>
          <div class="form-group">
            <label for="">Direcci&oacute;n de Habitaci&oacute;n</label>
            <input id="direccion_prestador" name="direccion" type="text" class="form-control" placeholder="Introduzca una direcci&oacute;n de habitaci&oacute;n"></input>
          </div>
        </div>
      </div>

    </div><!--/Datos personales-->


      <!-- Datos académicos -->
  <div class="panel panel-default">
        <div class="panel-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-datos-prestador" href="#collapseTwo">
            Datos Acad&eacute;micos
           </a>
        </div>


    <div id="collapseTwo" class="panel-collapse collapse in">

        <div class="panel-body">
          <div class="form-group">
            <label for="">Número de Expediente</label>
            <input type="text" id="no_exp_prestador" name="expediente" class="form-control" placeholder="Introduzca el numero de expediente"></input>
          </div>  
          <div class="form-group">
            <label for="">Carrera</label>
            <select id="escuela_prestador" name="escuela" class="form-control">
              <option value="">Seleccione</option>
              <option value="Informatica">Ingenier&iacute;a Inform&aacute;tica</option>
              <option value="Civil">Ingenier&iacute;a Civil</option>
              <option value="Industrial">Ingenier&iacute;a Industrial</option>
              <option value="Comunicacion social">Comunicaci&oacute;n Social</option>
              <option value="administracion">Administraci&oacute;n</option>
              <option value="Contaduria">Contadur&iacute;a</option>
              <option value="Relaciones industriales">Relaciones Industriales</option>
              <option value="Educacion">Educaci&oacute;n</option>
              <option value="Derecho">Derecho</option>
          </select>
          </div> 
          

          <div class="form-group" id='mencion'>
            <label for="">Menci&oacute;n</label>
            <select id="mencion_prestador" name="mencion" class="form-control">
              <option value="">Seleccione</option>
              <option value="artes audiovisuales">Artes Audiovisuales</option>
              <option value="comunicaciones publicitarias">Comunicaciones Publicitarias</option>
              <option value="periodismo">Periodismo</option>
            </select>
          </div>
          

          <div class="form-group">
            <label for="">Semestre</label>
            <select id="semestre_prestador" name="semestre" class="form-control">
              <option value="">Seleccione</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>


            </select>
          </div>


          <div class="form-group">

            <!-- Indicates a successful or positive action -->
            <input type="submit" id="boton_prestador" class="btn btn-success" value="Registrar" ></input>

            <!-- Indicates caution should be taken with this action -->
            <button type="reset" class="btn btn-danger">Cancelar</button>


          </div>  

      </div>
    </div>


        </form> <!-- /form-prestador-->

 </div> <!-- /datos-prestador -->


</div><!-- /container -->

  <script>

$(document).ready(function(){

  popular_datos_prestador();


//funcionalidad para la regla alfebetica

$("#form-prestador").validate({

 
  rules: {
    nombre:{
      required: true,
      alpha:true
    },apellido:{
      required: true,
      alpha:true
    },email:{
      required: true,
      email: true
    },telefono_hab:{
      required: true,
      number: true,
      maxlength:11,
      minlength:11
    },direccion:{
      required:true
    },telefono_cel:{
      required: true,
      number: true,
      maxlength:11,
      minlength:11
    },expediente: {
      required: true,
      number:true
    },semestre:{
      required: true
    },cedula: {
      required: true,
      number: true
    },carrera: {
      required: true
    },mencion: {
      required: true
    }
  },

  messages:{
    nombre : {
      required: mensajes.reglas.requerido,

    },apellido :{
      required: mensajes.reglas.requerido

    },email : {
      required: mensajes.reglas.requerido,
      email: mensajes.reglas.email

    },telefono_hab :{
      required : mensajes.reglas.requerido,
      number : mensajes.reglas.numerico,
      minlength: mensajes.reglas.minimo,
      maxlength: mensajes.reglas.maximo

    },telefono_cel :{
      required : mensajes.reglas.requerido,
      number : mensajes.reglas.numerico,
      minlength: mensajes.reglas.minimo_tlf,
      maxlength: mensajes.reglas.maximo_tlf

    },direccion:{
      required: mensajes.reglas.requerido

    },expediente: {
      required:  mensajes.reglas.requerido,
      number: mensajes.reglas.numerico

    },semestre: {
      required:  mensajes.reglas.requerido

    },cedula: {
      required: mensajes.reglas.requerido,
      number: mensajes.reglas.numerico

    },carrera: {
      required: mensajes.reglas.requerido

    },mencion: {
      required: mensajes.reglas.requerido
    }
  }

});

$("#form-prestador").submit(function (e) {

  e.preventDefault();

  var ruta = "insertar_datos_prestador";

  if (act_datos_prestador != 0) {
    ruta = "actualizar_prestador";
  }

  if ($(this).valid()) {
    var datos = $(this).serialize();

    $.post(ruta,datos,
      
      function(data){
       
          if(data=="0"){

               toastr.success(mensajes.success.prestador_insertado);

               resetForm($('#form-prestador'));
               
          }else{

              toastr.error(mensajes.error.prestador_no_insertado);
        
            }
        });

    } else{

         toastr.error(mensajes.error.form_nv);
    }

    act_datos_prestador=0;

});



  $('#mencion').css("display","none");

    $("#escuela_prestador").on("change",function(){

          console.log($(this).val());

          if($(this).val()==="Comunicacion social"){

          $("#mencion").fadeIn(1000);
          }else{

            $("#mencion").fadeOut(1000);
          }
    });

  });

</script>
