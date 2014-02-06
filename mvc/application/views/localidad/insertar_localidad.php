
<style>
.text-area{

  width: 100%;
  height: auto;

}


</style>

<script>
function initialize() {
  var latLng = new google.maps.LatLng(8.297306461386862, -62.71144453436136);
  var mapOptions = {
    center: latLng,
    zoom: 14,
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
          <button id="ayuda-nombre" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Introducir el nombre de la comunidad u organizacion que se desea registrar." data-original-title="" title="">
           <span class="glyphicon glyphicon-info-sign"></span>
         </button> 
         <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Introduzca el nombre de la Organización"></input>
       </div>

       <div class="form-group">
        <label for="">Responsable </label>
        <button id="text-responsable" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Introducir el nombre de la persona responsable de la comundiad u organizacion, con el fin de mantener comunicacion con la organizacion. " data-original-title="" title="">
         <span class="glyphicon glyphicon-info-sign"></span>
       </button> 
       <input id="responsable" name="responsable" type="text" class="form-control" placeholder="Introduzca el nombre del responsable de la Organización"></input>
     </div>

     <div class="form-group">
      <label for="">Correo Electrónico </label>
      <button id="text-email" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Introducir el correo electronico de de la persona responsable de la comundiad u organizacion, con el fin de mantener comunicacion con la organizacion." data-original-title="" title="">
       <span class="glyphicon glyphicon-info-sign"></span>
     </button> 
     <input id="email" name="email" type="text" class="form-control" placeholder="Introduzca correo electrónico de contacto"></input>
   </div>

   <div class="form-group">
    <label for="">Teléfono </label>
    <button id="text-telefono" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Introducir un telefono de contacto de la persona responsable de la comundiad u organizacion, con el fin de mantener comunicacion con la organizacion" data-original-title="" title="">
     <span class="glyphicon glyphicon-info-sign"></span>
   </button> 
   <input  id="telefono" name="telefono"  type="text" class="form-control" placeholder="Introduzca teléfono de contacto"></input>
 </div>



</div>
</div>

<!-- Datos de la localidad -->
<div class="panel panel-default">
  <div class="panel-heading">Datos de Ubicación</div>
  <div class="panel-body">
   <div class="form-group">
     <label for="">Estado</label>
     <button id="text-estado" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Es el estado donde se encuentra la comunidad u organizacion, por defecto esta en el Estado Bolivar." data-original-title="" title="">
       <span class="glyphicon glyphicon-info-sign"></span>
     </button>
     <input id="estado" name="estado" type="text" class="form-control" value="Bolivar" readonly></input>
   </div>
   <div class="form-group">
     <label for="">Municipio</label>
     <button id="text-municipio" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Es el municipio donde se encuentra la comunidad u organizacion, por defecto esta en el Municipio Caroni." data-original-title="" title="">
       <span class="glyphicon glyphicon-info-sign"></span>
     </button>
     <input id="municipio" name="municipio" type="text" class="form-control" value="Caroni" readonly></input>
   </div>
   <div class="form-group">
     <label for="parroquia">Parroquia</label>
     <select name="parroquia" class="text-area  form-control" id="parroquia">
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
    <label for="">Dirección </label>
    <button id="text-direccion" type="button" class="ayuda-pop btn btn-default pull-right" data-container="body" data-toggle="popover" data-placement="left" data-content="Introduzca una informacion detallada de la direccion donde se encuntra la comunidad u organizacion. (ejemplo: Avenida Atlantico, Ciudad Guayana 8050)." data-original-title="" title="">
     <span class="glyphicon glyphicon-info-sign"></span>
   </button>
   <textarea class="form-control"name="direccion" id="direccion" placeholder="Introduzca la dirección de la Organización" ></textarea>
   </div>
  </div>
</div>


<!-- Mapa de google -->
<div class="panel panel-default">
  <div class="panel-heading">Ubicación en el Mapa</div>
    <button id="mapita" type="button" class="ayuda-pop btn btn-default pull-right " data-container="body" data-toggle="popover" data-placement="left" data-content="Identificar la comunidad u organizacion en el mapa, para esto hacemos click con el roton en la ubicacion que queremos registar, en los recuedros latitud y longitud se cargara de forma automatica la informacion al hacer click con el raton sobre el mapa de la ciudad." data-original-title="" title="">
      <span class="glyphicon glyphicon-info-sign"></span>
    </button></br>

  <div class="panel-body">
  </br></br>
  <div id="map_canvas"  style="width: auto;height:380px;"></div></br></br>
  <div id="coordinates">
    <label for="estado">Latitud</label>
  </br>
  <span id="latitud" name="latitud" type="text" class="form-control" ><h5 id="X" readonly></h5></span>
  </br>
  <label for="estado">Longitud</label></br>
  <span id="longitud" name="longitud" type="text" class="form-control" ><h5 id="Y" readonly></h5></span>
</div>
</div>
</div>

<!-- Indicates a successful or positive action -->
<button type="submit" class="btn btn-success">Guardar</button>

<!-- Indicates caution should be taken with this action -->
<button type="reset" class="btn btn-danger">Cancelar</button>





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

//Inicializador para los  popovers de ayuda
$(".ayuda-pop").popover();

</script>



