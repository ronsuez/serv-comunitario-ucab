<script>

var ucab = new google.maps.LatLng(8.297306461386862, -62.71144453436136);


var localidades = [];

var localidad= {

      lat:0,
      lng:0,
      nombre:"hola",
      id:0
};



var markers = [];
var iterator = 0;
var ventana= 'lolaso';
var map;

function initialize() {
  var mapOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: ucab
  };

  map = new google.maps.Map(document.getElementById('map_canvas2'),
          mapOptions);


//iteracion para definir la info de los marcadores


  infowindow = new google.maps.InfoWindow({
      content: ventana
  });


}



function drop(array) {
  for (var i = 0; i < array.length; i++) {
    setTimeout(function() {
      addMarker(array);

    }, i * 200);
  }
}

function escribir_info(nombre_localidad,proyectos){

        var content ="" ;

        $.each(proyectos,function(index){

            var escuela = proyectos[index].escuela_coord;

           //var sig_escuela = proyectos[p].escuela_coord;
            
            content += '<div class="escuela">'+escuela+"<br>";

            content+="Proyecto :"+proyectos[index].nombre_proyecto+"<br></div>";


        });

  return "<div><h1>Localidad:"+nombre_localidad+"</h1>"+content+"</div>";
}

//funcion para dibujar coordenadas

function addMarker(array) {

    var contenido = "this is a marker";

    var pos = new google.maps.LatLng(array[iterator].lat,array[iterator].lng);

  var nombre_localidad =array[iterator].nombre_localidad;

 var proyectos=array[iterator].proyectos;

  var  marker =  new google.maps.Marker({
    position: pos,
    map: map,
    title: nombre_localidad,
    info : escribir_info(nombre_localidad,proyectos)
   });

   google.maps.event.addListener(marker, 'click', function(){
            var popup = new google.maps.InfoWindow();

            popup.setContent(marker.info);
            
            popup.open(map, marker);
        });

  markers.push(marker);


  iterator++;
}
      
// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

//Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}



// Shows any markers currently in the array.
function showMarkers() {
  drop(neighborhoods);
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}


 
function set_localidad_info(lat,lng,id_localidad,nombre){


          var loc = new Object();
          
            $.ajax({
            type:"POST",
            url:"proy_on_ejec",
            data:{id:id_localidad},
            success: function(data){

                   loc.lat=lat;
                   loc.lng=lng;
                   loc.nombre_localidad=nombre;
                   loc.id_localidad=id_localidad;
                   loc.proyectos = JSON.parse(data);

                    localidades.push(loc);
              }

            });

}





  $(document).ready(function() {
  

      

  initialize();
  google.maps.event.addDomListener(window, 'load', initialize);



  $("#poblarmapa").click(function() {


    $.get("listar_loc",function(data){

    
        var listado = JSON.parse(data);

      
        $.each(listado,function(index){


            var lat = listado[index].latitud_localidad;
            var lng = listado[index].longitud_localidad;
            var id_localidad = listado[index].id_localidad;
            var nombre = listado[index].nombre_localidad;
        
            set_localidad_info(lat,lng,id_localidad,nombre);

        });

        //actualiza los marcadores en el mapa
         drop(localidades);


    });


  

  }).click();
});


  


    </script>



<div class="container theme-showcase"> <!-- inicio container-->
  <div class="row" >
    <div class="col-sm-12">
      <div class="panel panel-default">  <!-- panel total inicio-->
        <div class="panel-heading">
          <h3 class="panel-title">Mapa de Organizaciones</h3>
        </div>
        <div class="panel-body">

        
          <!--<label class="checkbox-inline">
           Ver todas las comunidades <input type="checkbox" id="mustbox" onclick="drop()" />
              
          </label> -->

           

          
          <div id="map_canvas2"  style="width: 800px;height:380px;"></div>
          
          </br></br>
          <div id="panel">
            <input  type="submit" class="btn btn-info" onclick="clearMarkers();"  value="Ocultar Organizaciones">
            <input  id="poblarmapa" type="button" class="btn btn-info" value="Mostar Organizaciones">
       
                 <!-- Single button -->
          <div class="btn-group">
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
             Filtrar por Escuela <span class="caret"></span>
           </button>
           <ul class="dropdown-menu" role="menu">
            <li><a href="#">Administración</a></li>
            <li><a href="#">Comunicación Social</a></li>
             <li><a href="#">Contaduría</a></li>
             <li><a href="#">Derecho</a></li>
             <li><a href="#">Educación</a></li>
              <li><a href="#">Ingeniería Civil</a></li>
               <li><a href="#">Ingeniería Industrial</a></li>
             <li><a href="#">Ingeniería Informática</a></li>
           <li><a href="#">Relaciones Industriales</a></li>
           </ul>
          </div>
            
            <!--<input onclick="deleteMarkers();" type=button value="Delete Markers"> -->
             <!-- <input onclick="drop();" type="submit" class="btn btn-success" value="Cargar Comunidades"> -->
           </div>

        </div>    
      </div>
    </div>  
  </fieldset>
  </div>
</div>  

