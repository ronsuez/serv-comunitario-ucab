<script>

                  
    $(document).ready(function() {
  

    // $("#consultar").css("display", "none"); // se oculta todo
    // $("#inscribir_localidad").css("display", "none"); // se oculta todo
    // $("#pestana_registrar").css("display", "none"); // se oculta todo
    // $("#pestana_cosnultar").css("display", "none"); // se oculta todo




   //$("#b_listar_localidades").click(function(){

   // $("#verquero").fadeToggle(1000);

    
  });
  
    </script>

<style>

    .tab-content{

      margin-top: 30px;
    }
</style>

  <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Buscar Organizaciones</h3>
            </div>
            <div class="panel-body">
              
              <div class="input-group input-group-sm">
               
                <input id="input_nombre_loc" type="text" class="form-control" placeholder="Introduzca nombre de la organizacion a consultar"></input>
                <span class="input-group-btn">
                  <button id="btn_datos_localidad" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              
              </div><!-- /input-group -->

                 <div id="datos_busqueda_localidad">

                </div>

            </div>


  </div>
<div id="verquero">
   <div class="header">
        
       <ul class="pestanas nav nav-tabs" id="myTab">
          <li id="pestana_registrar"class="active"><a href="#inscribir_localidad" data-url="insertar_localidad" >Registrar Organizacion</a></li>
          <li  id="pestana_cosnultar"class=""><a href="#consultar" data-url="consultar_localidad">Consultar/Modificar Organizacion</a></li>
          <li  id="pestana_cosnultar_mapa"class=""><a href="#mapa" data-url="ver_mapa">Mapa de Organizaciones</a></li>

        </ul>
      </div>

<div class="pestanas-content tab-content">
  <div class="tab-pane active" id="inscribir_localidad">

  </div>
  <div class="tab-pane" id="consultar"></div>
  <div class="tab-pane" id="mapa"></div>
</div> 
</div>
