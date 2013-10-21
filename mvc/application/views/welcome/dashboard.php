<?= $header; ?>
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

	img {

		float: right;
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

		width: 200px;
		height: 200px;
		
	 position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

	}


	</style>


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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class=""><a href="#about">Acerca de</a></li>
            <li class=""><a href="#contact">Contacto</a></li>
          </ul>
          <ul class ="nav navbar-nav pull-right">
          	<li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario  <span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
              <ul class="pull-right dropdown-menu">
                <li><a href="#">Action</a></li>
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


  <script> 
    // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      // set an on click on the button


		$( document ).ajaxStart(function() {
		  console.log( "Triggered ajaxStart handler." );


		 
		})


		$( document ).ajaxComplete(function() {
		  console.log( "Triggered ajaxComplete handler." );

		})

	
      $("#main-panel a").click(function (e) {

      		e.preventDefault();
 
        	$("#main-panel>li.active").removeClass("active");
        	
        	$(this).parent().addClass("active");

        	$("#main-title").text($(this).text());

        	
	        	// add loading image to div
  
			    // run ajax request
			    $.ajax({
			    		  beforeSend: function(){
					     // Handle the beforeSend event
					      	$('#main-panel-body').html('<div id="loading"><img src="./jar-loading.gif"></div>');
    
					   },
					        type: "GET",
					        url: $(this).text(),
					        success: function (data) {
					            // replace div's content with returned data
					         
									setTimeout(function() {
								    $('#main-panel-body').html(data);
								},1000);
					        }
			   		
			   		});
					
						
			      });

    

       });
	
  </script>

  <div class="container">


 <div class="row">

	 <div class="col-md-6 col-sm-12 col-lg-12">

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
            <li class=""><a href="gest-proyecto">Proyectos</a></li>
            <li class=""><a href="gest-prestador">Prestadores</a></li>
            <li class=""><a href="gest-localidad">Localidades</a></li>
    
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>


	</div>

</div>

   <div class="row">
   	
        <div class="col-md-6 col-sm-12 col-lg-12">

        <div class="panel panel-success">
	        <div class="panel-heading">
	          <h3 id="main-title" class="panel-title">Administracion</h3>
			</div>

	        <div id="main-panel-body" class="panel-body">
							<h1>Bienvenido al sistema de gestion de Servicio comunitario</h1>

						<div id="body">
							
										<p>
											El sistema permite la administracion de los proyectos y prestadores de servicio comunitario
											de la Universidad Catolica Andres Bello.</p>

										<p>
											El proyecto nace como una iniciativa
											de los estudiantes de la catedra de Desarrollo del Software para automatizar
											el proceso de gestion del servicio comunitario realizado por proyeccion a la comunidad y las escuelas de
											cada carrera. 
										</p>

										<p>
												El sistema esta escrito en PHP,JS,HTML,CSS utilizando el framework MVC <em>Codeingiter</em>
												integrado con el framework CSS <em>Bootstrap</em> para el diseno de la interfaz de usuario. 
										</p>

										<p>
												Servcom-UCAB esta alojado en la nube a traves de un servicio de PaaS provisto por <em>Openshift</em> de Red Hat , ademas el 
												codigo fuente del sistema esta publicado en github ya que se utilizo git como herramienta de control de versiones
												para el desarrollo distribuido del sistema. 
										</p>


										<p>
												EL repositorio de Servcom-UCAB esta disponible en <a href="https://github.com/ronsuez/serv-comunitario-ucab" target="_blank">Servcom-ucab</a>.							
										</p>
						</div>

						<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

			</div>


 
    </div>

</div> 

</div><!-- /Row / Option's panel -->



</div><!-- /Container -->



<?= $footer; ?>
