<?= $header; ?>
	<style type="text/css">

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
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="panel">SCOM-UCAB</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#">Inicio</a></li>
              <li  class="active" ><a href="about">Acerca de</a></li>
              <li><a href="contact">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div id="container">
	<h1>Bienvenido al Sistema del servicio Comunitario UCAB!</h1>

	<div id="body">
		</p>Este proyecto es desarrollado por los alumnos de la materia de desarrollo de software 
		de la UCAB Guayana , bajo la tutela del Prof. Julio Canelon.
		</p>

		<p>
			Mas documentacion , coming soon. 

		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>


			<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/50233_30716286911_5061413_n.jpg">
<?= $footer; ?>