
<?php 
		

		$escuela="Escuela de ".$this->session->userdata("escuela");


?>
 <link href="<?php echo base_url() ; ?>application/views/css/reporte.css" rel="stylesheet">
    
<script type="text/javascript">
	
	$("#enviar").on("click",function(){

			var html = $("#reporte").html();

			var button = $(this);

				console.log(html);

				$(button).button('loading');

				 $.post("ver_reporte",{state:1,reporte:html},function (data){
				           
             				window.open(data, '_blank', 'fullscreen=yes');
			        		

							$(button).button('reset');      
     		 });

	});
		
</script>

<div id="reporte">

	<table id="tabla-header">
	  <tr>
	  	<td>
			<div style="float: left;"><img src=<?php echo base_url()."application/views/proyecto/images/ucab.jpg";?> alt="ucab" height="90" width="90"></div>
	  	</td>
	   	<td>
	   		<p>Universidad Catolica Andres Bello</p>
			<p>Prologancion Av. Atlantico - Puerto Ordaz</p>
			<p>Teléfonos: 0286-­9230230, 0286-9232358</p>
			<p><?php echo $escuela;?></p>
		</td>
	  	<td>
	  		<p>Coordinación de Proyección a la Comunidad</p>
			<p>Servicio Comunitario Universitario</p>
			<p>Período Académico 2009 – 2010<p>
	  	</td>
	 	<td>
	 		<div><img src=<?php echo base_url()."application/views/proyecto/images/proyeccion.png";?>  alt="proyeccion" height="90" width="90"></div>
	 	</td>
	 </tr>
	</table>

<table  border="1" >
	<tbody>	
		<tr>
			<td><span class="about-info">Titulo del proyecto</span></td>
			<td><?=$datos[0]["nombre_proyecto"]?></td>	
		</tr>
		<tr>
			<td>
				<span class="about-info">Organización o comunidad que suscribe el 
					Convenio</span>
				</td>
			<td><?=$datos[0]["ci_coord"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Estado</span></td>
			<td><?=$datos[0]["estado_proyecto"]?></td>	
		</tr>
			
		<tr>
			<td><span class="about-info">Persona responsable en la organización o 
			    comunidad que suscribe el Convenio</span>
			</td>
			<td><?=$datos[0]["ci_asesor"]?></td>	
		</tr>	
		<tr>
			<td><span class="about-info">Dirección, teléfonos y correo electrónico de la
				 organización o comunidad que suscribe el Convenio 
			</span>
			</td>
			<td> Por asignar</td>	
		</tr>	
		<tr>
			<td>
				Organización o comunidad con la que se 
				ejecutará el proyecto 
			</td>

			<td>Varias unidades productivas</td>	
		</tr>	
		<tr>
			<td><span class="about-info">Persona responsable de la organización o 
				comunidad con la que se ejecutará el proyecto.
				</span></td>
			<td>Representantes de varias unidades productivas</td>	
		</tr>	
		<tr>
			<td><span class="about-info">Lugar de ejecución del proyecto</span></td>
			<td>Por asignar</td>	
		</tr>
		<!--data grosso del proyecto-->
		<tr>
			<td><span class="about-info">Diagnostico</span></td>
			<td><?=$datos[0]["diagnostico_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Justificacion</span></td>
			<td><?=$datos[0]["justificacion_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Impacto</span></td>
			<td><?=$datos[0]["impacto_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Objetivo General</span></td>
			<td><?=$datos[0]["obj_generales_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Objetivos Especificos</span></td>
			<td><?=$datos[0]["obj_especificos_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Metas</span></td>
			<td><?=$datos[0]["metas_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Producto</span></td>
			<td><?=$datos[0]["producto_proyecto"]?></td>	
		</tr>
			<tr>
			<td><span class="about-info">Plan de trabajo</span></td>
			<td><?=$datos[0]["plan_trabajo_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Recursos</span></td>
			<td><?=$datos[0]["recursos_requeridos_proyecto"]?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Cronograma</span></td>
			<td><?=$datos[0]["cronograma_proyecto"]?></td>	
		</tr>
			
			
	</tbody>	
</table>

</div>

<br>


<?php

 if (isset($estado) && $estado =="1"){

 	echo '
			<!-- boton para generar reporte -->
			<button id="enviar" type="button" data-loading-text="Generando reporte" class="button-generar  btn btn-success">Generar reporte PDF</button>
		';

} 	

