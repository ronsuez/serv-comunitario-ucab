
        <script>
                  
                  $(document).ready(function() {
                  
        $('#myTab a').click(function (e) {
            e.preventDefault();
            
            var url = $(this).attr("data-url");
              var href = this.hash;
              var pane = $(this);
            
            // ajax load from data-url
            $(href).load(url,function(result){      
                pane.tab('show');
            });
          });

          // load first tab content
          $('#home').load($('.active a').attr("data-url"),function(result){
            $('.active a').tab('show');
          });

        
        });
        
        </script>

<ul class="nav nav-tabs" id="myTab">
  <li class=""><a href="#home" data-url="insertar_prestador" >Inscribir</a></li>
  <li class="active"><a href="#profile" >Consultar modificar</a></li>
  <li><a href="#messages">Reportes</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane" id="home">home</div>
  <div class="tab-pane active" id="profile">
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" placeholder="Introduzca nombre o cédula del prestador">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div><!-- /input-group -->
				<br>
				<div class="form-group">
					<label for="">Nombres</label>
					<input type="text" class="form-control" placeholder="Introduzca los nombres del prestador">
				</div>
				<div class="form-group">
					<label for="">Apellidos</label>
					<input type="text" class="form-control" placeholder="Introduzca los apellidos del prestador">
				</div>

				<!-- Datos personales -->
				<div class="panel panel-info">
					<div class="panel-heading">Datos Personales</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Correo electrónico</label>
							<input type="text" class="form-control" placeholder="Introduzca el correo electrónico">
						</div>
						<div class="form-group">	
							<label for="">Teléfono celular</label>
							<input type="text" class="form-control" placeholder="Introduzca un teléfono celular">
						</div>
						<div class="form-group">
							<label for="">Teléfono de habitación</label>
							<input type="text" class="form-control" placeholder="Introduzca un teléfono habitación">
						</div>
						<div class="form-group">
							<label for="">Direccion de habitación</label>
							<input type="text" class="form-control" placeholder="Introduzca una direccion de habitación">
						</div>
					</div>
				</div>

				<!-- Datos academicos -->
				<div class="panel panel-info">
					<div class="panel-heading">Datos Académicos</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="">Numero de expediente</label>
							<input type="text" class="form-control" placeholder="Introduzca el numero de expediente">
						</div>
						<div class="form-group">
							<label for="">Escuela</label>
							<input type="text" class="form-control" placeholder="Introduzca el nombre de la escuela">
						</div>
						<div class="form-group">
							<label for="">Mención</label>
							<input type="text" class="form-control" placeholder="Introduzca la mención">
						</div>
					</div>
				</div>

				<!-- Foto -->
				<form enctype="multipart/form-data" action="uploader.php" method="POST">
					<label for="">Foto: </label>
					<input name="uploadedfile" type="file">
				</form> 
			</div><!-- /panel-body -->
		</div><!-- /panel panel-default -->
	</div><!-- /container -->
</div>
  <div class="tab-pane" id="messages">messages</div>
</div>

<script>
  $(function () {
    $('#myTab').tab();
  });
</script>

