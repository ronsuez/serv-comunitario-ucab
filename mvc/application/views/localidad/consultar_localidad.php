
<div class="container theme-showcase"> <!-- inicio container-->
	<div class="row" >
		<div class="col-sm-12">
			<div class="panel panel-default">  <!-- panel total inicio-->
				<div class="panel-heading">
					<h3 class="panel-title">Consulta de Localidades</h3>
				</div>
				<div class="panel-body">
					
					<!-- dattos perosnales y academicos-->
										
						<div id="cont1">       
	  
										<div class="panel-group" id="accordion">
										<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Datos del Responsable
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body">
			

												<div class="form-group">
								                  <label for="">Nombre de la Organización </label>
								                  <input id="nombre_localidad1" name="nombre_localidad" type="text" class="form-control" placeholder='Ingrese nombre de la Organización'></input>
								                </div>
								                 <div class="form-group">
								                  <label for="">Responsable </label>
								                  <input id="representante_localidad1" name="representante_localidad" type="text" class="form-control" placeholder='Ingrese el Responsable de la Organización'></input>
								                </div>

								                <div class="form-group">
								                  <label for="">Correo Electrónico </label>
								                  <input id="email_representante_localidad1" name="email_representante_localidad" type="email" class="form-control" placeholder='Ingrese email de contacto'></input>
								                </div>

									            <div class="form-group">
									              <label for="">Teléfono </label>
									              <input  id="telefono_representante_localidad1" name="telefono_representante_localidad" type="text" class="form-control" placeholder='Ingrese número telefónico de contacto' ></input>
									            </div>

											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													Datos de Ubicación
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse in">
											<div class="panel-body">
		   
												<div class="form-group">
								                     <label for="estado">Estado</label>
								                          <input id="estado" name="estado" type="text" class="form-control" value="Bolivar" readonly></input>
								               </div>
								                <div class="form-group">
								                     <label for="municipio">Municipio</label>
								                      <input id="municipio" name="municipio" type="text" class="form-control" value="Caroni" readonly></input>
								               </div>
								                <div class="form-group">
								                      <label for="parroquia">Parroquia </label>
								                      <input class="form-control" name="parroquia_localidad" id="parroquia_localidad1" placeholder='Ingrese parroquia en la que se ubica la Organización'></input>
								                 </div>
											   
											   <div class="form-group">
								                      <label for="direccion">Dirección </label>
								                      <input class="form-control" name="direccion_localidad" id="direccion_localidad1" placeholder='Ingrese la dirección de la Organización'></input>
								                 </div>


											</div>
											
										</div>
										
									</div>
									
								</div> 
							</br>
									<button id="modificar" type="submit" class="btn btn-success">Guardar</button>
						</div>
				</div>		
			</div>
		</div>	
	</div>
</div>	

<script>
$(document).ready(function(){

	$(".collapse").collapse();
  						  
     	$("#nombre_localidad").val();
     	$("#representante_localidad").val(main_datos.localidad.responsable);
     	$("#email_representante_localidad").val(main_datos.localidad.email);
       	$("#telefono_representante_localidad").val(main_datos.localidad.telefono);
                            

 //datos ubicacion
 	$("#parroquia_localidad").val(main_datos.localidad.parroquia);
  	$("#direccion_localidad").val(main_datos.localidad.direccion);
							

     

//##################### modificar


//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");

$("#form-localidad").validate({

 
  rules: {
    nombre_localidad1: {
      required: true,
      alpha:true
    },representante_localidad1 :{
      required: true,
      alpha:true
    },email_representante_localidad1 :{
      required: true,
      email_representante_localidad1: true
    },telefono_representante_localidad1:{
      required: true,
      number: true,
      maxlength:11,
      minlength:11
    },direccion_localidad1:{
      required:true
    }
  },

  messages:{
    nombre_localidad1 : {
      required: mensajes.reglas.requerido,

    },representante_localidad1 :{
      required: mensajes.reglas.requerido

    },email_representante_localidad1 : {
      required: mensajes.reglas.requerido,
      email:mensajes.reglas.requerido

    },telefono_representante_localidad1 :{
      required : mensajes.reglas.requerido,
      number :mensajes.reglas.numerico,
      minlength:mensajes.reglas.minimo_tlf,
      maxlength:mensajes.reglas.maximo_tlf

    },direccion_localidad1:{
      required:mensajes.reglas.localidad

    }
  }

});

 $("#modificar").click(function() {


  e.preventDefault();

  if ($(this).valid()) {

   // var datos = $(this).serialize();
  var nombre=$("#nombre_localidad1").val();
  var responsable=$("#representante_localidad1").val();
  var email=$("#email_representante_localidad1").val();
  var telefono=$("#telefono_representante_localidad1").val();
  var parroquia=$("#parroquia_localidad1").val();
  var direccion=$("#direccion_localidad1").val();

  
    $.post("modificar_datos_localidad",{
    nombre_loc1:nombre,
    responsable_loc1:responsable,
    email_loc1:email,
    telefono_loc1:telefono,
    parroquia_loc1:parroquia,
    direccion_loc1:direccion,
  
    
    },
    function(data){
        if(data=="0"){

               toastr.success(mensajes.success.localidad_insertada);

               //resetForm($('#form-localidad'));
               
          }else{

              toastr.error(mensajes.error.localidad_no_insertada);
        
            }
      });

  } else{  
    toastr.error(mensajes.error.form_nv);
  }

});






 



</script>
