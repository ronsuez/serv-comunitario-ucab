<style>

.tab-content{

  margin-top: 30px;
}
</style>


  <div class="panel panel-default">

            <div class="panel-heading">
              <h3 class="panel-title">Buscar prestador</h3>
            </div>
            <div class="panel-body">
              
              <div class="row">

              <div class="col-xs-8 input-group input-group-sm">
               
                <input id="id_prestador_cedula" type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
                <span class="input-group-btn">
                  <button id="c_datos_prestador" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
              
              </div><!-- /input-group -->

               <div class="col-xs-4  btn-group">
                      <button type="button" class="filtro-escuela btn btn-default" disabled>Todas las escuelas</button>
                      <button type="button" class="sel-escuela btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Seleccionar escuela</span>
                      </button>
                      <ul class="menu-escuelas dropdown-menu" role="menu">
                        <li><a class="Ingenieria Informatica" href="#">Informatica</a></li>
                        <li><a class="Ingenieria Civil" href="#">Civil</a></li>
                        <li><a class="Ingenieria Industrial"  href="#">Industrial</a></li>
                        <li><a class="Comunicacion Social" href="#">Comunicacion Social</a></li>
                        <li><a class="Educacion" href="#">Educacion</a></li>
                        <li><a href="#">Relaciones industriales</a></li>
                        <li><a href="#">Todas las escuelas</a></li>
                      </ul>
               </div>


                </div>



                 <div id="datos_busqueda">

                </div>



              <div  id="data-re-prestador">

                <legend>Prestador: <span id="info-nombre_prestador"></span></legend>

                <br>
                  <div class="row">
                  
                  <div class="foto-prestador col-xs-6" >
                    <img  style="width: 140px; height: 140px;" src="" alt="Avatar" class="img-thumbnail">

                  </div>

                </div>
              
              <br>

              <div class="row">
              <div class="col-xs-6">

                                  <!-- Button trigger modal -->
                  <button class="btn btn-primary" data-toggle="modal" data-target="#upload_photo">
                    Subir/actualizar Foto
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="upload_photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="myModalLabel">Subir foto</h4>
                        </div>
                        <div class="modal-body">
                        
                                   <form method="post" action="" id="upload_file">
                                      <label for="title">Nombre</label>
                                      <input type="text" name="title" id="title" disabled/>
                                      
                                      <br>
                                      <label for="userfile">Archivo</label>
                                      <input type="file" name="userfile" id="userfile" size="20" />
            
                                   </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="form-submit btn btn-primary">Subir foto</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->

              </div>
            </div>

            </div>
</div>
</div>

<!-- listado de tabs -->

<div id="prestador-tab-content">

<div class="header">
  <h1>Gestión de Prestadores</h1>
  <ul class="pestanas nav nav-tabs" id="myTab">
    <li class=""><a href="#inscribir_prestador" data-url="insertar_prestador" >Inscribir/Modificar datos</a></li>
    <li class=""><a href="#consultar_pre" data-url="consultar_prestador">Consultar proyecto</a></li>
    <li class=""><a href="#asignar_pro" data-url="asignar_proyecto">Asignar Proyecto</a></li>
  </ul>
</div>

<div class="pestanas-content  tab-content">
  <div class="tab-pane" id="inscribir_prestador"></div>
<div class="tab-pane" id="consultar_pre"></div>
<div class="tab-pane" id="asignar_pro"></div>

</div>

</div>

<script>

$(document).ready(function() {


  $(".menu-escuelas li a").on("click",function(){

        var title = $(this).text();

        console.log(title);

        escuela =  title;   

        $(".filtro-escuela").text(escuela);

         $("#data-re-prestador").hide();


         $("#prestador-tab-content").hide();


  });


    //validacion de permisologias
      if(escuela_usuario === "Proyeccion a la comunidad"){

            $(".pestanas [href='#inscribir_prestador']").remove();

            $(".pestanas [href='#asignar_pro']").remove();

           // $(".pestanas [href='#consultar_pre']").click();
            
      }else{

          $(".sel-escuela").attr('disabled',true);

          $(".menu-escuelas a[class='"+escuela_usuario+"']").click();
      }


  $('#upload_photo').on('show.bs.modal', function (e) {
  // do something...

    $("#upload_photo input[name='title']").val(main_datos.prestador.cedula);

  });

    

  $('#upload_photo .form-submit').on('click', function (e) {
       $('#upload_file').submit();
  });

    





    $("div [href='#asignar_pro']").hide();
    $("div [href='#consultar_pre']").hide();
    //$("div [href='#ge_prestador']").hide();

  $("#data-re-prestador").hide();


  $("#prestador-tab-content").hide();

  //$("#userfile").attr('id',"userfile"+main_datos.prestador.cedula);

  var userfile =  $("#userfile").attr('id');

    $('#upload_file').submit(function(e) {
      e.preventDefault();
      $.ajaxFileUpload({
         url         :'./uploadHandler/upload_file/', 
         secureuri      :false,
         fileElementId  :userfile,
         dataType    : 'json',
         data        : {
            'name'           : $('#title').val(),
            'id'           : "ok"
         },
         success  : function (data, status)
         {
            if(data.status != 'error')
            {
               $('#files').html('<p>Reloading files...</p>');
               //refresh_files();
               $('#title').val('');

            }
            alert(data.msg);

            $('#upload_photo').modal('hide');

            $(".foto-prestador img").attr("src",'files/'+data.filename);
         }
      });
      return false;
   });


});


</script>
