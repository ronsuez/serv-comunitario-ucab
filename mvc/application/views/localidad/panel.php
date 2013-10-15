


  <script>



    function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
                  
    $(document).ready(function() {
  
        
        $('#myTab li a').click(function (e) {
            e.preventDefault();
            
            var url = $(this).attr("data-url");
              var href = this.hash;
              var pane = $(this);
            
            // ajax load from data-url
            $(href).load(url,function(result){      
                pane.tab('show');
            });

         });


          initialize();

 });
  
    </script>

<style>

    .tab-content{

      margin-top: 30px;
    }
</style>

   <div class="header">
        <h1>Gestión de Organizaciones</h1>
       <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#inscribir" data-url="insertar_localidad" >Registrar</a></li>
          <li class=""><a href="#consultar" data-url="consultar_localidad">Consultar/Modificar</a></li>

        </ul>
      </div>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir">

  <div class="container">
      
      <form name="form-localidad" action="#" method="POST">

        <!-- Datos sobre la organizacion -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos de la organizacion</div>
          <div class="panel-body">

              <div class="form-group">
                  <label for="">Nombre de la organizacion:</label>
                  <input name="word" type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
                </div>
                 <div class="form-group">
                  <label for="">Responsable :</label>
                  <input name="word" type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
                </div>

                <div class="form-group">
                  <label for="">Correo electronico:</label>
                  <input name="email" type="email" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
                </div>

            <div class="form-group">
              <label for="">Tel&eacute;fono de habitaci&oacute;n:</label>
              <input  name="phone" type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono habitaci&oacute;n"></input>
            </div>
 				
 				<div class="form-group">
                      <label for="direccion">Direccion :</label>
                      <textarea class="form-control" id="direccion" placeholder="Producto, plan de trabajom recursos requeridos, cronograma." required></textarea>
                 </div>
         
          </div>
        </div>

        <!-- Datos de la localidad -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos de ubicacion</div>
          <div class="panel-body">
           		 <div class="form-group">
                     <label for="estado">Estado</label>
                     <select class="form-control" id="estado">
                         <option value="">Seleccione</option>
                    </select>
               </div>
                <div class="form-group">
                     <label for="municipio">Municipio</label>
                     <select class="form-control" id="municipio">
                         <option value="">Seleccione</option>
                    </select>
               </div>
                <div class="form-group">
                     <label for="parroquia">Parroquia</label>
                     <select class="form-control" id="parroquia">
                         <option value="">Seleccione</option>
                    </select>
               </div>
          </div>
        </div>

          <!-- Mapa de google -->
        <div class="panel panel-info">
          <div class="panel-heading">Ubicacion en el mapa</div>
          <div class="panel-body">
           			<h1>Aqui va el mapa </h1>

               

            <div id="map_canvas" style="width:500px;height:380px;"></div>

          </div>
        </div>


    <!-- Indicates a successful or positive action -->
          <button type="submit" class="btn btn-success">Guardar</button>

          <!-- Indicates caution should be taken with this action -->
          <button type="reset" class="btn btn-warning">Cancelar</button>

       </form> <!-- /form-prestador--> 
      </div><!-- /panel-body -->
    </div><!-- /panel panel-default -->
  
  </div><!-- /container -->

  </div>
  <div class="tab-pane" id="consultar"></div>
</div>

