<style type="text/css">

form label.error{
  color:#e33241;
  margin-left: 2px;
  font-weight: lighter; 
}
/*
  #foto{
    height: 20px;
  */  }

  </style>


  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading">
        <h3 class="panel-title">Buscar Prestador</h3>
      </div>
      <div class="panel-body">

        <div class="input-group input-group-sm">
          <input id="id_cedula" type="text" class="form-control" placeholder="Introduzca c&eacute;dula del prestador"></input>
          <span class="input-group-btn">
            <button id="consultar_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div><!-- /input-group -->


      </div>

    </div>
    <br>


    <form name="form-prestador" id="form-prestador" action="#" method="POST">

      <!-- Datos personales -->
      <div class="panel panel-default">
        <div class="panel-heading">Datos Personales</div>
        <div class="panel-body">

          <div class="form-group">
            <label for="">C&eacute;dula</label>
            <input id="cedula" name="cedula" type="text" class="form-control" placeholder="Introduzca la c&eacute;dula del prestador"></input>
          </div>
          <div class="form-group">
            <label for="">Nombres</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
          </div>
          <div class="form-group">
            <label for="">Apellidos</label>
            <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Introduzca los apellidos del prestador"></input>
          </div>

          <div class="form-group">
            <label>Correo Electr&oacute;nico</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="Introduzca el correo electr&oacute;nico"></input>
          </div>
          <div class="form-group">  
            <label for="">Tel&eacute;fono Celular</label>
            <input id="telefono_cel" name="telefono_cel" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono celular"></input>
          </div>
          <div class="form-group">
            <label for="">Tel&eacute;fono de Habitaci&oacute;n</label>
            <input id="telefono_hab" name="telefono_hab" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono de habitaci&oacute;n"></input>
          </div>
          <div class="form-group">
            <label for="">Direcci&oacute;n de Habitaci&oacute;n</label>
            <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Introduzca una direcci&oacute;n de habitaci&oacute;n"></input>
          </div>
        </div>
      </div>

      <!-- Datos académicos -->
      <div class="panel panel-default">
        <div class="panel-heading">Datos Acad&eacute;micos</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="">Numero de Expediente</label>
            <input type="text" id="expediente" name="expediente" class="form-control" placeholder="Introduzca el numero de expediente"></input>
          </div>  
          <div class="form-group">
            <label for="">Carrera</label>
            <select id="carrera" name="carrera" class="form-control">
              <option value="">Seleccione</option>
              <option value="ingenieria informatica">Ingenier&iacute;a Inform&aacute;tica</option>
              <option value="ingenieria civil">Ingenier&iacute;a Civil</option>
              <option value="ingenieria industrial">Ingenier&iacute;a Industrial</option>
              <option value="comunicacion social">Comunicaci&oacute;n Social</option>
              <option value="administracion">Administraci&oacute;n</option>
              <option value="contaduria">Contadur&iacute;a</option>
              <option value="relaciones industriales">Relaciones Industriales</option>
              <option value="educacion">Educaci&oacute;n</option>
              <option value="derecho">Derecho</option>
          </select>
          </div> 
          

          <div class="form-group" id='mencion'>
            <label for="">Menci&oacute;n</label>
            <select id="mencion-select" name="mencion" class="form-control">
              <option value="">Seleccione</option>
              <option value="artes audiovisuales">Artes Audiovisuales</option>
              <option value="comunicaciones publicitarias">Comunicaciones Publicitarias</option>
              <option value="periodismo">Periodismo</option>
            </select>
          </div>
          

          <div class="form-group">
            <label for="">Semestre</label>
            <select id="semestre" name="semestre" class="form-control">
              <option value="">Seleccione</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>


            </select>
          </div>


          <div class="form-group">                

            <!-- Foto -->
            <form enctype="multipart/form-data" action="uploader.php" method="POST">

              <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-4">
                  <img id="foto" src="http://1120.gogiro.com/wp-content/uploads/2012/04/facebook-profile-picture-no-pic-avatar.jpg" alt="Avatar" class="img-thumbnail">
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                  <label>Foto: </label>
                  <input name="uploadedfile" type="file"></input>
                </div>
                <!-- Optional: clear the XS cols if their content doesn't match in height -->
                <!-- <div class="clearfix visible-xs"></div> -->
                <div class="col-xs-6 col-sm-4 col-md-4"></div>
              </div>  

            </form> 

          </div>


          <div class="form-group">

            <!-- Indicates a successful or positive action -->
            <input type="submit" class="btn btn-success" value="Registrar" ></input>

            <!-- Indicates caution should be taken with this action -->
            <button type="reset" class="btn btn-default">Cancelar</button>


          </div>  

      </div>
    </div>


        </form> <!-- /form-prestador-->


  </div><!-- /container -->

  <script>

$(document).ready(function(){


//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");

$("#form-prestador").validate({

 
  rules: {
    nombre: {
      required: true,
      alpha:true
    },apellido :{
      required: true,
      alpha:true
    },email :{
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

  if ($(this).valid()) {
    alert("valid");
    var datos = $(this).serialize();

    $.post("insertar_datos_prestador",datos,
      
      function(data){
        alert(data);
        console.log("datos insertar_datos_prestador");
      });

  } else{  
    alert("non valid");
  }

});

  $('#mencion').css("display","none");

    $("#carrera").on("change",function(){

          console.log($(this).val());

          if($(this).val()==="comunicacion social"){

            console.log("hola ");

          $("#mencion").fadeIn(1000);
          }else{

            $("#mencion").fadeOut(1000);
          }
    });

  });

</script>
