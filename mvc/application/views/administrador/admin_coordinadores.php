<script>

$(document).ready(function() {


  var l_proyec;

  var l_directores;

  var l_coordinadores='<option value="">Seleccione</option>';

  var l_coord_adm_con='<option value="">Seleccione</option>';

  var l_coord_derecho='<option value="">Seleccione</option>';

  var l_coord_educacion='<option value="">Seleccione</option>';

  var l_coord_com_social='<option value="">Seleccione</option>';

  var l_coord_ing_civil='<option value="">Seleccione</option>';

  var l_coord_ing_industrial='<option value="">Seleccione</option>';

  var l_coord_ing_info='<option value="">Seleccione</option>';

  var l_coord_rr_ii='<option value="">Seleccione</option>';


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

            case "Derecho":
            l_coord_derecho+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Ingenieria Industrial":
            l_coord_ing_industrial+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Ingenieria Civil":
            l_coord_ing_civil+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Comunicacion Social":
            l_coord_com_social+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Administracion":
            l_coord_adm_con+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Contaduria":
            l_coord_adm_con+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

            case "Relaciones Industriales":
            l_coord_rr_ii+='<option value="'+l_coordinadores[index].ci_coord+'">'+l_coordinadores[index].nombre_coord+' '+l_coordinadores[index].apellido_coord+'</option>';
            break;

          }

        });

$("#educacion_usuarios").html(l_coord_educacion);

$("#ing_info_usuarios").html(l_coord_ing_info);

$("#com_social_usuarios").html(l_coord_com_social);

$("#derecho_usuarios").html(l_coord_derecho);

$("#ing_industrial_usuarios").html(l_coord_ing_industrial);

$("#ing_civil_usuarios").html(l_coord_ing_civil);

$("#rr_ii_usuarios").html(l_coord_rr_ii);

$("#ad_con_usuarios").html(l_coord_adm_con);


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
      <th>  Escuela</th>
      <th>  Usuarios</th>
      <th>  Seleccionar</th>
    </thead>

    <tbody id="listado_usuarios">
      <tr>
       <td>Administracion y contaduria</td>
       <td>
        <select id="ad_con_usuarios" class="form-control" style="width:50%">
         <option value="">Seleccione</option>
       </select>
     </td>
     <td>
      <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Opciones <span class="glyphicon glyphicon-cog"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#" class="coord">Activar Firma</a></li>
          <li><a href="#" class="des_coord">Desactivar Firma</a></li>
          <li class="divider"></li>
          <li><a href="#" class="hab">Habilitar</a></li>
          <li><a href="#" class="deshab" >Deshabilitar</a></li>
        </ul>
      </div>
    </td>
    
  </tr>
  <tr>
   <td>Comunicacion Social</td>
   <td>
    <select id="com_social_usuarios" class="form-control" style="width:50%">
     <option value="">Seleccione</option>
   </select>
 </td>
 <td>
  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>


</tr>
<tr>
 <td>Derecho</td>
 <td>
  <select id="derecho_usuarios" class="form-control" style="width:50%">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Educacion</td>
 <td>
  <select id="educacion_usuarios" class="form-control" style="width:50%">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Civil</td>
 <td>
  <select id="ing_civil_usuarios" class="form-control" style="width:50%">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Industrial</td>
 <td>
  <select id="ing_industrial_usuarios" class="form-control" style="width:50%">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>
<tr>
 <td>Ingenieria Informatica</td>
 <td>
  <select id="ing_info_usuarios" class="form-control" style="width:50%">
   <option value="">Seleccione</option>
 </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
     <li><a href="#" class="coord">Activar Firma</a></li>
     <li><a href="#" class="des_coord">Desactivar Firma</a></li>
     <li class="divider"></li>
     <li><a href="#" class="hab">Habilitar</a></li>
     <li><a href="#" class="deshab" >Deshabilitar</a></li>
   </ul>
 </div>
</td>

</tr>
<tr>
 <td>Relaciones industrial</td>
 <td>
  <select id="rr_ii_usuarios" class="form-control" style="width:50%">
    <option value="">Seleccione</option>
  </select>
</td>
<td>
  <div class="btn-group">
    <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
      Opciones <span class="glyphicon glyphicon-cog"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#" class="coord">Activar Firma</a></li>
      <li><a href="#" class="des_coord">Desactivar Firma</a></li>
      <li class="divider"></li>
      <li><a href="#" class="hab">Habilitar</a></li>
      <li><a href="#" class="deshab" >Deshabilitar</a></li>
    </ul>
  </div>
</td>

</tr>

<tr>
  <td>Proyeccion a la comunidad</td>
  <td>
    <select id="pro_comunidad" class="form-control" style="width:50%">
      <option value="">Seleccione</option>
    </select>
  </td>
  <td>
    <div class="btn-group">
      <button type="button" class="btn btn-default  dropdown-toggle" data-toggle="dropdown">
        Opciones <span class="glyphicon glyphicon-cog"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#" class="coord">Activar Firma</a></li>
        <li><a href="#" class="des_coord">Desactivar Firma</a></li>
        <li class="divider"></li>
        <li><a href="#" class="hab">Habilitar</a></li>
        <li><a href="#" class="deshab" >Deshabilitar</a></li>
      </ul>
    </div>
  </td>

</tr>
</tbody>

</table>

</div>

<style type="text/css">

td {
  text-align: middle;
}

</style>