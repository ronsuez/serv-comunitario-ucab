<script>

$(document).ready(function() {


  var l_proyec;

  var l_directores;

  var l_coordinadores;

  var l_coord_adm_con;

  var l_coord_derecho;

  var l_coord_educacion='<option value="">Seleccione</option>';

  var l_coord_com_social;

  var l_coord_ing_civil;

  var l_coord_ing_industrial;

  var l_coord_ing_info='<option value="">Seleccione</option>';

  var l_coord_rr_ii;


  var proyecc_select = '<option value="">Seleccione</option>';

  $.get("traer_usuarios",function(data){


        //seccion para la parte de proyeccion de la comunidad

        l_proyec= JSON.parse(data)["proyeccion"];

        $.each(l_proyec,function(index){
          proyecc_select= proyecc_select +'<option value="'+l_proyec[index].ci_pr+'">'+l_proyec[index].nombre_pr+' '+l_proyec[index].apellido_pr+'</option>';
        });

        $("#pro_comunidad").html(proyecc_select);



        //seccion para las escuelas

        l_coordinadores=JSON.parse(data)["coordinadores"];

        $.each(l_coordinadores,function(index){

          switch(l_coordinadores[index].escuela_coord){

            case "Educacion":

            l_coord_educacion+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';

            break;  


            case "Ingenieria Informatica":

            l_coord_ing_info+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';

            break;



          }

        });

        $("#educacion_usuarios").html(l_coord_educacion);

        $("#ing_info_usuarios").html(l_coord_ing_info);


      });








});

</script>


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">administrador de coordinadores</div>
  <div class="panel-body">
    <p>la siguiente tabla muestra el listado de escuelas y los coordiandores asociados</p>
  </div>

  <!-- Table -->
  <table class="table">
    <thead>
      <th>Escuela</th>
      <th>Usuarios</th>
      <th>Seleccionar</th>
    </thead>

    <tbody id="listado_usuarios">
      <tr>
       <td>Administracion y contaduria</td>
       <td>
        <select id="ad_con_usuarios">
         <option value="seleccione">Rodrigo</option>
       </select>
     </td>
     <td>
      <div class="btn-group">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
          Opciones <span class="glyphicon glyphicon-cog"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#" class="coord">Activar Coordinador</a></li>
          <li><a href="#">Desactivar Coordinador</a></li>
          <li class="divider"></li>
          <li><a href="#">Habilitar</a></li>
          <li><a href="#" class="deshab" >Deshabilitar</a></li>
        </ul>
      </div>
    </td>
    
  </tr>
  <tr>
   <td>Comunicacion Social</td>
   <td>
    <select id="ad_con_usuarios">
     <option>Rodrigo</option>
   </select>
 </td>
 <td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>


</tr>
<tr>
 <td>Derecho</td>
 <td>
  <select id="ad_con_usuarios">
   <option>Rodrigo</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Educacion</td>
 <td>
  <select id="educacion_usuarios">
   <option>Rodrigo</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Civil</td>
 <td>
  <select id="ad_con_usuarios">
   <option>Rodrigo</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Industrial</td>
 <td>
  <select id="ad_con_usuarios">
   <option>Rodrigo</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Informatica</td>
 <td>
  <select id="ing_info_usuarios">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
     <li><a href="#" class="coord">Activar Coordinador</a></li>
     <li><a href="#">Desactivar Coordinador</a></li>
     <li class="divider"></li>
     <li><a href="#">Habilitar</a></li>
     <li><a href="#" class="deshab" >Deshabilitar</a></li>
   </ul>
 </div>
</td>

</tr>
<tr>
 <td>Relaciones industrial</td>
 <td>
  <select id="ad_con_usuarios">
   <option>Rodrigo</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Coordinador</a></li>
      <li><a href="#">Desactivar Coordinador</a></li>
      <li class="divider"></li>
      <li><a href="#">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>

<tr>
  <td>Proyeccion a la comunidad</td>
  <td>
    <select id="pro_comunidad">
      <option value="">Seleccione</option>
    </select>
  </td>
  <td>
    <div class="btn-group">
      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
        Opciones <span class="glyphicon glyphicon-cog"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#" class="coord">Activar Coordinador</a></li>
        <li><a href="#">Desactivar Coordinador</a></li>
        <li class="divider"></li>
        <li><a href="#">Habilitar</a></li>
        <li><a href="#" class="deshab" >Deshabilitar</a></li>
      </ul>
    </div>
  </td>

</tr>
</tbody>

</table>

</div>