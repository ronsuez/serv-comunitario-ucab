
<?php 

echo $estado ;				

		$escuela="Escuela de ".$this->session->userdata("escuela");
?>
 <link href="<?php echo base_url() ; ?>application/views/css/reporte.css" rel="stylesheet">
    
<script type="text/javascript">
	
	$("#enviar").on("click",function(){

			var html = $("#reporte").html();

				console.log(html);

				 $.post("ver_reporte",{state:1,reporte:html},function (data){
           
             					window.open(data, '_blank', 'fullscreen=yes');
			              
     					  });

	});
		
</script>

<div id="reporte">

<h1>Datos del Proyecto </h1>

<h2><?php echo $escuela; ?></h2>
<table  border="1" >
	<tbody>	
		<tr>
			<td><span class="about-info">Titulo del proyecto</span></td>
			<td><?=$datos[0]->value?></td>	
		</tr>
		<tr>
			<td>
				<span class="about-info">Organización o comunidad que suscribe el 
					Convenio</span>
				</td>
			<td><?=$datos[1]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Estado</span></td>
			<td><?=$datos[2]->value?></td>	
		</tr>
			
		<tr>
			<td><span class="about-info">Persona responsable en la organización o 
			    comunidad que suscribe el Convenio</span>
			</td>
			<td><?=$datos[2]->value?></td>	
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
			<td><?=$informacion[0]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Justificacion</span></td>
			<td><?=$informacion[1]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Impacto</span></td>
			<td><?=$informacion[2]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Objetivo General</span></td>
			<td><?=$informacion[3]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Objetivos Especificos</span></td>
			<td><?=$informacion[4]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Metas</span></td>
			<td><?=$informacion[5]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Producto</span></td>
			<td><?=$informacion[6]->value?></td>	
		</tr>
			<tr>
			<td><span class="about-info">Plan de trabajo</span></td>
			<td><?=$informacion[7]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Recursos</span></td>
			<td><?=$informacion[8]->value?></td>	
		</tr>
		<tr>
			<td><span class="about-info">Cronograma</span></td>
			<td><?=$informacion[9]->value?></td>	
		</tr>
			
			
	</tbody>	
</table>

</div>

<br><button id="enviar" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button><br><br> 

