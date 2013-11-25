<script>



   /* function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(8.316815, -62.697601),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      
          return map;

          }
                  
    $(document).ready(function() {
  
  
          var map = initialize();

          google.maps.event.addListener(map, "rightclick", function(event) {
        
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
            // populate yor box/field with lat, lng
          alert("Lat=" + lat + "; Lng=" + lng);

            $("#X").html(lat);
            $("#Y").html(lng);
            
            });


    }); */

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
           			<h1>Aqui va el mapa </h1>
                  <div id="coordinates">
                      <h1>Coordenadas</h1>
                      <ul>
                        <li>
                          <span>Latitud :</span><h1 id="X"></h1>
                        </li>
                        <li>
                          <span>Longitud :</span><h1 id="Y"></h1>
                        </li>
                      </ul>
                  </div>
               

            <div id="map_canvas" style="width:500px;height:380px;"></div>

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

$("#form-prepppstador").validate({

 
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
      email:"*Introduzca una dirección de correo válida"

    },telefono :{
      required : mensajes.reglas.requerido,
      number :"*Debe contener solo dígitos (0-9)",
      minlength:"*Debe tener 11 dígitos(e.g 0416585684)",
      maxlength:"*Debe tener máximo 11 dígitos (e.g 0416585684)"

    },direccion:{
      required:"*Debe especificar la dirección de la localidad"

    }
  }

});

$("#form-localidad").on("submit",function (e) {

  e.preventDefault();

  if ($(this).valid()) {
    alert("valid");
   // var datos = $(this).serialize();
	var nombre=$("#nombre").val();
	var responsable=$("#responsable").val();
	var email=$("#email").val();
	var telefono=$("#telefono").val();
	var parroquia=$("#parroquia").val();
	var direccion=$("#direccion").val();
	
    $.post("insertar_datos_localidad",{
		nombre_loc:nombre,
		responsable_loc:responsable,
		email_loc:email,
		telefono_loc:telefono,
		parroquia_loc:parroquia,
		direccion_loc:direccion,
		},
		function(data){
        alert(data);
        console.log("datos insertar_datos_localidad");
      });

  } else{  
    alert("non valid");
  }

});

</script>

      

