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
        <h3 class="panel-title">Buscar prestador</h3>
      </div>
      <div class="panel-body">

        <div class="input-group input-group-sm">
          <input id="id_cedula" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
          <span class="input-group-btn">
            <button id="consultar_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div><!-- /input-group -->


      </div>

    </div>
    <br>


    <form name="form-prestador" id="form-prestador" action="#" method="POST" >

      <!-- Datos personales -->
      <div class="panel panel-default">
        <div class="panel-heading">Datos Personales</div>
        <div class="panel-body">

          <div class="form-group">
            <label for="">Cedula</label>
            <input id="cedula" name="cedula" type="text" class="form-control" placeholder="Introduzca la cedula del prestador"></input>
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
            <label>Correo electr&oacute;nico</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="Introduzca el correo electr&oacute;nico"></input>
          </div>
          <div class="form-group">  
            <label for="">Tel&eacute;fono celular</label>
            <input id="telefono_cel" name="telefono_cel" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono celular"></input>
          </div>
          <div class="form-group">
            <label for="">Tel&eacute;fono de habitaci&oacute;n</label>
            <input id="telefono_hab" name="telefono_hab" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono habitaci&oacute;n"></input>
          </div>
          <div class="form-group">
            <label for="">Direccion de habitaci&oacute;n</label>
            <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Introduzca una direccion de habitaci&oacute;n"></input>
          </div>
        </div>
      </div>

      <!-- Datos academicos -->
      <div class="panel panel-default">
        <div class="panel-heading">Datos Acad&eacute;micos</div>
        <div class="panel-body">
          <div class="form-group">
            <label for="">Numero de expediente</label>
            <input type="text" id="expediente" name="expediente" class="form-control" placeholder="Introduzca el numero de expediente"></input>
          </div>
          <div class="form-group">
            <label for="">Escuela</label>
            <input type="text" id="escuela" name="escuela" class="form-control" placeholder="Introduzca el nombre de la escuela"></input>
          </div>
          <div class="form-group">
            <label for="">Menci&oacute;n</label>
            <input type="text" id="mencion" name="mencion" class="form-control" placeholder="Introduzca la menci&oacute;n"></input>
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


//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");

$("#form-prestador").validate({

 
  rules: {
    nombre: {
      required: true,
      alpha:true
    },
    apellido :{
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
    }
  },

  messages:{
    nombre : {
      required:"*Este campo es requerido",
    },apellido :{
      required:"*Este campo es requerido"

    },email : {
      required:"*Este campo es requerido",
      email:"*Introduzca una direcion de correo valida"
    },telefono_hab :{
      required :"*Este campo es requerido",
      number :"*Debe contener solo digitos (0-9)",
      minlength:"*Debe tener 11 digitos(e.g 0416585684)",
      maxlength:"*Debe tener maximo 11 digitos (e.g 0416585684)"
    },telefono_cel :{
      required :"*Este campo es requerido",
      number :"*Debe contener solo digitos (0-9)",
      minlength:"*Debe tener 11 digitos(e.g 0416585684)",
      maxlength:"*Debe tener maximo 11 digitos (e.g 0416585684)"
    },direccion:{
      required:"*Debe especificar la direccion de la localidad"
    }
  }

});

$("#form-prestador").submit(function (e) {

  e.preventDefault();

  if ($(this).valid()) {
    alert("valid");
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var celular = $("#telefono_cel").val();
    var telefono = $("#telefono_hab").val();
    var direccion = $("#direccion").val();
    var expediente = $("#expediente").val();
    var escuela = $("#escuela").val();
    var mencion = $("#mencion").val();

    $.post("insertar_datos_prestador",{
      nombre_pre:nombre,
      apellido_pre:apellido,
      email_pre:email,
      celular_pre:celular,
      telefono_pre:telefono,
      direccion_pre:direccion,
      expediente_pre:expediente,
      escuela_pre:escuela,
      mencion_pre:mencion },
      
      function(data){
        alert(data);
        console.log("datos insertar_datos_prestador");
      });

  } else{  
    alert("non valid");
  }

});

</script>
