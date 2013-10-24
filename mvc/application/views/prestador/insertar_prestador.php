
	<div class="container">
		
    <div class="panel panel-default">
			<div class="panel-body">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div><!-- /input-group -->
				
		</div>
  </div>
      <br>


  <form name="form-prestador" id="form-prestador" action="#" method="POST" >

        <!-- Datos personales -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos Personales</div>
          <div class="panel-body">
   
              <div class="form-group">
                  <label for="">Nombres</label>
                  <input name="nombre" type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
                </div>
                <div class="form-group">
                  <label for="">Apellidos</label>
                  <input name="apellido" type="text" class="form-control" placeholder="Introduzca los apellidos del prestador"></input>
                </div>

            <div class="form-group">
              <label>Correo electr&oacute;nico</label>
              <input name="email" type="text" class="form-control" placeholder="Introduzca el correo electr&oacute;nico"></input>
            </div>
            <div class="form-group">  
              <label for="">Tel&eacute;fono celular</label>
              <input name="telefono_cel" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono celular"></input>
            </div>
            <div class="form-group">
              <label for="">Tel&eacute;fono de habitaci&oacute;n</label>
              <input  name="telefono_hab" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono habitaci&oacute;n"></input>
            </div>
            <div class="form-group">
              <label for="">Direccion de habitaci&oacute;n</label>
              <input  name="direccion" type="text" class="form-control" placeholder="Introduzca una direccion de habitaci&oacute;n"></input>
            </div>
          </div>
        </div>

        <!-- Datos academicos -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos Acad&eacute;micos</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="">Numero de expediente</label>
              <input type="expediente" class="form-control" placeholder="Introduzca el numero de expediente"></input>
            </div>
            <div class="form-group">
              <label for="">Escuela</label>
              <input type="escuela" class="form-control" placeholder="Introduzca el nombre de la escuela"></input>
            </div>
            <div class="form-group">
              <label for="">Menci&oacute;n</label>
              <input type="escuela" class="form-control" placeholder="Introduzca la menci&oacute;n"></input>
            </div>

             <div class="form-group">
                 <!-- Foto -->
            <form enctype="multipart/form-data" action="uploader.php" method="POST">
                <label for="">Foto: </label>
                <input name="uploadedfile" type="file"></input>        

              </form> 

            </div>
            

              <div class="form-group">

                <!-- Indicates a successful or positive action -->
                      <input type="submit" class="btn btn-success" value="Enviar" ></input>

                      <!-- Indicates caution should be taken with this action -->
                      <button type="reset" class="btn btn-warning">Warning</button>

                
              </div>  
              
              </form> <!-- /form-prestador-->
               
          </div>
        </div>

    
  
	</div><!-- /container -->

<script>


//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
          return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");
        
    $("#form-prestador").validate({

           success: function(label) {
                  //label.addClass("valid").text("Correcto!")
                  $("label.valid, label.error").remove();
            },errorPlacement: function (error, element) {
                //$(element).tooltipster('update', $(error).text());
                  alert($(element).text()+":"+$(error).text());
            
            },rules: {
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
                      required:"Este campo es requerido",
                },apellido :{
                      required:"Este campo es requerido"

                },email : {
                  required:"Este campo es requerido",
                  email:"Introduzca una direcion de correo valida"
                },telefono_hab :{
                  required :"Este campo es requerido",
                  number :"debe contener solo digitos (0-9)",
                  minlength:"debe tener 11 digitos(e.g 0416585684)",
                  maxlength:"debe tener maximo 11 digitos (e.g 0416585684)"
                },telefono_cel :{
                  required :"Este campo es requerido",
                  number :"debe contener solo digitos (0-9)",
                  minlength:"debe tener 11 digitos(e.g 0416585684)",
                  maxlength:"debe tener maximo 11 digitos (e.g 0416585684)"
                },direccion:{
                  required:"Debe especificar la direccion de la localidad"
                }
              }
            
          });

  $("#form-prestador").submit(function (e){


      e.preventDefault();


          if ($(this).valid()){
                alert("valid");
              }else{  
              alert("non valid");
              }
                        
        });

        </script>
