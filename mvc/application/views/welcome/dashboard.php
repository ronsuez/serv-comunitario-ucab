<?php echo $header;
		
		   //Verificar si el usuario ya se encuentra logeado.
		  if( !$this->session->userdata('isLoggedIn') ) {
        		
        		redirect('/'); //redirige a la pagina de inicio de sesion
    	
    		}else {  //Carga información de sesion de usuario.
    			
        			 $user =$this->session->userdata("name")." ".$this->session->userdata("last_name");

        			 $escuela = $this->session->userdata("escuela");
	
   			 }

   			if($this->session->userdata("panel_admin")=="1"){

   			 	$menu='<li class="active"><a id="pestana-usuarios" href="gest-usuarios">Usuarios</a>';
   			 	$menu.='<li class=""><a id="pestana-historial" href="ver-historial">Historial</a></li>';
   			 	$menu.='<li class=""><a id="pestana-config" href="config">Configuracion</a></li>';
   			 	$escuela = " ";
   			 
   			 }else{

   			 	$menu='<li class=""><a id="pestana-proyectos" href="gest-proyecto">Proyectos</a>';
   			 	$menu.='<li class=""><a id="pestana-prestadores" href="gest-prestador">Prestadores</a></li>';
   			 	$menu.='<li class=""><a id="pestana-localidades" href="gest-localidad">Localidades</a></li>';
   			 	
   			 	}
 ?>

 <script>
    main_datos.usuario.nombre =<?php echo "'".$user."'"; ?> ; 

</script>

<style type="text/css">

*{margin: 0px; padding: 0px;}

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

h2 {
	margin-top: 0px;
	text-align: center;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}


#body{
	margin: 0 15px 0 15px;
}

p.footer{
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
}
   
.main-content{
	margin-top: 50px;
	padding-bottom: 50px;
}


#loading{

	margin: auto;

	width: 500px;
	height: 300px;
	
}

#loading img{

	width: 100px;
	height: 100px;

	position: absolute;
	margin: auto;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;

}

body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

#botones {
	text-align: center;
}


</style>

<script type="text/javascript">

		$(document).ready(function(){


			escuela_usuario = $(".escuela").text();

			console.log("Escuela Usuario:"+escuela_usuario);
		});

</script>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Servcom-UCAB</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav nav-top">
				<li class="active"><a href="/">Home</a></li>
				<li class=""><a href="acerca_de">Acerca de</a></li>
				<li class=""><a href="#contact">Contacto</a></li>
			</ul>
			<ul class ="nav navbar-nav pull-right">
				<li class="dropdown ">
					<a href="#" id="#user" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user ?> <span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
					<ul class="pull-right dropdown-menu">
						<li><a href="logout">Salir</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">


	<div class="row">

		<div class="col-md-12 col-sm-12 col-lg-12">

			<div class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Panel de control</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul id="main-panel" class="nav navbar-nav">
						<?php echo $menu; ?>
					</ul>

				</div><!--/.nav-collapse -->
			</div>


		</div>

</div>

	<div class="sys-main-content row">

		<div class="col-md-12 col-sm-12 col-lg-12">

			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 id="main-title" class="panel-title"><span id="tab-title">Administracion</span> <span class="pull-right escuela"><?php echo $escuela; ?></span></h3>

				</div>

				<div id="main-panel-body" class="panel-body">
					<h1>Bienvenido al Sistema de Gestion de Servicio Comunitario</h1>

					<div id="body" class="row">
						<div id="about" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<p>
								El sistema permite la administración de los proyectos y prestadores de servicio comunitario
								de la Universidad Católica Andrés Bello.</p>

								<p>
									El proyecto nace como una iniciativa
									de los estudiantes de la cátedra de Desarrollo del Software para automatizar
									el proceso de gestión del servicio comunitario realizado por proyección a la comunidad y las escuelas de
									cada carrera. 
								</p>

								<p>
									El sistema esta escrito en PHP,JS,HTML,CSS utilizando el framework MVC <em>Codeingiter</em>
									integrado con el framework CSS <em>Bootstrap</em> para el diseño de la interfaz de usuario. 
								</p>

								<p>
									Servcom-UCAB está alojado en la nube a través de un servicio de PaaS provisto por <em>Openshift</em> de Red Hat , ademas el 
									código fuente del sistema está publicado en github ya que se utilizó git como herramienta de control de versiones
									para el desarrollo distribuido del sistema. 
								</p>


								<p>
									EL repositorio de Servcom-UCAB esta disponible en <a href="https://github.com/ronsuez/serv-comunitario-ucab" target="_blank">Servcom-ucab</a>.							
								</p>
							</div>
				
					</div>


				</div>

						

			
			</div>
			<p class="footer">Page rendered in <strong>0.0236</strong> seconds</p>


	</div><!-- /Row / Option's panel -->

	</div>


</div><!-- /Container -->



<?= $footer; ?>
