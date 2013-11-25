<script>
    function initialize() {
	var latLng = new google.maps.LatLng(8.297306461386862, -62.71144453436136);
        var mapOptions = {
          center: latLng,
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      
	  
		 
		var marker = new google.maps.Marker({
			  position:latLng,
			  map: map,
			  
		 });
		 
		 
	  	  google.maps.event.addListener(map, 'click', function(event) {
				
				
				updateMarker(marker,event.latLng);
				var lat = event.latLng.lat();
				var lng = event.latLng.lng();
            // populate yor box/field with lat, lng
   
            $("#X").html(lat);
            $("#Y").html(lng);
				
		});
         
			

}
		  
		 

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(marker,location) {
        marker.setPosition(location);
     
      }

                  
  $(document).ready(function() {
  
	initialize();

    // Permito la gesti¢n de los eventos DOM
    google.maps.event.addDomListener(window, 'load', initialize);



		});

    </script>

	

	
  <div class="container">
      
      <form id="form-localidad" name="form-localidad" action="#" method="POST" >

        <!-- Datos sobre la organización -->
        <div class="panel panel-default">
          <div class="panel-heading">Datos de la Organización</div>
          <div class="panel-body">

              <div class="form-group">
                  <label for="">Nombre de la Organización </label>
                  <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduzca el nombre de la organizacion"></input>
                </div>
                 <div class="form-group">
                  <label for="">Responsable </label>
                  <input id="responsable" name="responsable" type="text" class="form-control" placeholder="Introduzca el nombres del resposable en la organizacionr"></input>
                </div>

                <div class="form-group">
                  <label for="">Correo Electrónico </label>
                  <input id="email" name="email" type="email" class="form-control" placeholder="Introduzca el correo electronico del resposable en la organizacion"></input>
                </div>

            <div class="form-group">
              <label for="">Telefono </label>
              <input  id="telefono" name="telefono" type="text" class="form-control" placeholder="Introduzca el telefono del resposable en la organizacion"></input>
            </div>
 				
 				
         
          </div>
        </div>

        <!-- Datos de la localidad -->
        <div class="panel panel-default">
          <div class="panel-heading">Datos de Ubicación</div>
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
                     <label for="parroquia">Parroquia</label>
                     <select name="parroquia" class="form-control" id="parroquia">
                         <option value="">Seleccione</option>
                         <option value="cachamay">Cachamay</option>
                         <option value="chirica">Chirica</option>
                         <option value="dalla_costa">Dalla Costa</option>
                         <option value="once_de_abril">Once de Abril</option>
                         <option value="pozo_verde">Pozo Verde</option>
                         <option value="simon_bolivar">Simón Bolívar</option>
                         <option value="unare">Unare</option>
                         <option value="universidad">Universidad</option>
                         <option value="vista_al_sol">Vista al Sol</option>
                         <option value="yocoima">Yocoima</option>
                       
                    </select>
               </div>
			   
			   <div class="form-group">
                      <label for="direccion">Dirección </label>
                      <textarea class="form-control" name="direccion" id="direccion" placeholder="Introduzca la direccion del lugar donde se encuentra la organizacion" ></textarea>
                 </div>
			   
        </div>

          <!-- Mapa de google -->
        <div class="panel panel-default">
          <div class="panel-heading">Ubicación en el Mapa</div>
          <div class="panel-body">
           			
                  <div id="coordinates">
						<label for="estado">Latitud</label>
							</br>
                          <span id="latitud" name="latitud" type="text" class="form-control" ><h5 id="X"></h5></span>
						</br>
						<label for="estado">Longitud</label></br>
                          <span id="longitud" name="longitud" type="text" class="form-control" ><h5 id="Y"></h5></span>
				  
                    </div>
					</br></br>

					<div id="map_canvas"  style="width:500px;height:380px;"></div>
          </div>
        </div>


    <!-- Indicates a successful or positive action -->
          <button type="submit" class="btn btn-success">Guardar</button>

          <!-- Indicates caution should be taken with this action -->
          <button type="reset" class="btn btn-default">Cancelar</button>

       </form> <!-- /form-prestador--> 
      </div><!-- /panel-body -->
    </div><!-- /panel panel-default -->
  
  </div><!-- /container -->

 <script>


 

//funcionalidad para la regla alfebetica
jQuery.validator.addMethod("alpha", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Solo caracteres (Aa-Zz).");

$("#form-localidad").validate({

 
  rules: {
    nombre: {
      required: true,
      alpha:true
    },responsable :{
      required: true,
      alpha:true
    },email :{
      required: true,
      email: true
    },telefono:{
      required: true,
      number: true,
      maxlength:11,
      minlength:11
    },direccion:{
      required:true
    }
  },

  messages:{
    nombre : {
      required: mensajes.reglas.requerido,

    },responsable :{
      required: mensajes.reglas.requerido

    },email : {
      required: mensajes.reglas.requerido,
      email:mensajes.reglas.requerido

    },telefono :{
      required : mensajes.reglas.requerido,
      number :mensajes.reglas.numerico,
      minlength:mensajes.reglas.minimo_tlf,
      maxlength:mensajes.reglas.maximo_tlf

    },direccion:{
      required:mensajes.reglas.localidad

    }
  }

});

$("#form-localidad").on("submit",function (e) {

  e.preventDefault();

  if ($(this).valid()) {

   // var datos = $(this).serialize();
	var nombre=$("#nombre").val();
	var responsable=$("#responsable").val();
	var email=$("#email").val();
	var telefono=$("#telefono").val();
	var parroquia=$("#parroquia").val();
	var direccion=$("#direccion").val();
	var latitud=$("#X").text();
	var longitud=$("#Y").text();
	
    $.post("insertar_datos_localidad",{
		nombre_loc:nombre,
		responsable_loc:responsable,
		email_loc:email,
		telefono_loc:telefono,
		parroquia_loc:parroquia,
		direccion_loc:direccion,
		latitud_loc:latitud,
		longitud_loc:longitud,
		
		},
		function(data){
        if(data=="0"){

               toastr.success(mensajes.success.localidad_insertada);

               resetForm($('#form-localidad'));
               
          }else{

              toastr.error(mensajes.error.localidad_no_insertada);
        
            }
      });

  } else{  
    toastr.error(mensajes.error.form_nv);
  }

});



</script>

      

