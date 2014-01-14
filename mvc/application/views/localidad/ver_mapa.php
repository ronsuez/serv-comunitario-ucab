<script>

var ucab = new google.maps.LatLng(8.297306461386862, -62.71144453436136);

var neighborhoods = [
  new google.maps.LatLng(8.298279199997241, -62.712074518203735),
  new google.maps.LatLng(8.297981937703382, -62.71273970603943),
  new google.maps.LatLng(8.296346991066637, -62.713319063186646),
  new google.maps.LatLng(8.295391499622712, -62.711838483810425),
  new google.maps.LatLng(8.298279199997241, -62.712074518203735),
  new google.maps.LatLng(8.298725093016252, -62.71470308303833),
  new google.maps.LatLng(8.295200401055128, -62.71599054336548),
  new google.maps.LatLng(8.3011031805687192, -62.707622051239014),
  new google.maps.LatLng(8.297769607355757, -62.7100145816803)
];



var markers = [];
var iterator = 0;

var map;


function initialize() {
  var mapOptions = {
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: ucab
  };

  map = new google.maps.Map(document.getElementById('map_canvas2'),
          mapOptions);
}



function drop() {
  for (var i = 0; i < neighborhoods.length; i++) {
    setTimeout(function() {
      addMarker();
    }, i * 200);
  }
}

function addMarker() {
  markers.push(new google.maps.Marker({
    position: neighborhoods[iterator],
    map: map,
    
    
  }));
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
  drop();
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}


  $(document).ready(function() {
  

      

  initialize();
  google.maps.event.addDomListener(window, 'load', initialize);
});


  


    </script>



<div class="container theme-showcase"> <!-- inicio container-->
	<div class="row" >
		<div class="col-sm-12">
			<div class="panel panel-default">  <!-- panel total inicio-->
				<div class="panel-heading">
					<h3 class="panel-title">Mapa de localidades</h3>
				</div>
				<div class="panel-body">

				
					<!--<label class="checkbox-inline">
           Ver todas las comunidades <input type="checkbox" id="mustbox" onclick="drop()" />
  						
					</label> -->

           

          
					<div id="map_canvas2"  style="width: 1040px;height:380px;"></div>
					
          </br></br>
          <div id="panel">
            <input  type="submit" class="btn btn-success" onclick="clearMarkers();"  value="Ocultar Comunidades">
            <input id="lolaso" onclick="showMarkers();" type="submit" class="btn btn-success" value="Mostar todas las comunidades">
            <input  type="submit" class="btn btn-success" onclick="clearMarkers();"  value="Comunidades Inactivas">
            <input onclick="Markersactivos();" type="submit" class="btn btn-success" value="Comunidades Activas">
       
            
            <!--<input onclick="deleteMarkers();" type=button value="Delete Markers"> -->
             <!-- <input onclick="drop();" type="submit" class="btn btn-success" value="Cargar Comunidades"> -->
           </div>

				</div>		
			</div>
		</div>	
	</fieldset>
	</div>
</div>	


