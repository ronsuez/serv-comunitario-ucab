
  <script>
                  
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
        
        });
        
    </script>

<style>

    .tab-content{

      margin-top: 30px;
    }
</style>

   <div class="header">
        <h1>Gestión de Prestadores</h1>
       <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#inscribir" data-url="insertar_prestador" >Inscribir</a></li>
          <li class=""><a href="#consultar" data-url="consultar_prestador">Consultar/Modificar</a></li>
        </ul>
      </div>

<div class="tab-content">
  <div class="tab-pane active" id="inscribir">

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Introduzca nombre o c&eacute;dula del prestador"></input>
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div><!-- /input-group -->
        <br>
      
        <!-- Datos personales -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos Personales</div>
          <div class="panel-body">

              <div class="form-group">
                  <label for="">Nombres</label>
                  <input type="text" class="form-control" placeholder="Introduzca los nombres del prestador"></input>
                </div>
                <div class="form-group">
                  <label for="">Apellidos</label>
                  <input type="text" class="form-control" placeholder="Introduzca los apellidos del prestador"></input>
                </div>

            <div class="form-group">
              <label>Correo electr&oacute;nico</label>
              <input type="text" class="form-control" placeholder="Introduzca el correo electr&oacute;nico"></input>
            </div>
            <div class="form-group">  
              <label for="">Tel&eacute;fono celular</label>
              <input type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono celular"></input>
            </div>
            <div class="form-group">
              <label for="">Tel&eacute;fono de habitaci&oacute;n</label>
              <input type="text" class="form-control" placeholder="Introduzca un tel&eacute;fono habitaci&oacute;n"></input>
            </div>
            <div class="form-group">
              <label for="">Direccion de habitaci&oacute;n</label>
              <input type="text" class="form-control" placeholder="Introduzca una direccion de habitaci&oacute;n"></input>
            </div>
          </div>
        </div>

        <!-- Datos academicos -->
        <div class="panel panel-info">
          <div class="panel-heading">Datos Acad&eacute;micos</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="">Numero de expediente</label>
              <input type="text" class="form-control" placeholder="Introduzca el numero de expediente"></input>
            </div>
            <div class="form-group">
              <label for="">Escuela</label>
              <input type="text" class="form-control" placeholder="Introduzca el nombre de la escuela"></input>
            </div>
            <div class="form-group">
              <label for="">Menci&oacute;n</label>
              <input type="text" class="form-control" placeholder="Introduzca la menci&oacute;n"></input>
            </div>
          </div>
        </div>

        <!-- Foto -->
        <form enctype="multipart/form-data" action="uploader.php" method="POST">
          <label for="">Foto: </label>
          <input name="uploadedfile" type="file"></input>
        </form> 
      </div><!-- /panel-body -->
    </div><!-- /panel panel-default -->
  </div><!-- /container -->

  </div>
  <div class="tab-pane" id="consultar"></div>
  
</div>

