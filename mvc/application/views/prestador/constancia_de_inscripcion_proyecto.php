<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    </head>
    
<?php

  $datos_prestador = get_object_vars($datos);
  //$localidad= get_object_vars($datos_localidad);
 //var_dump($datos_localidad);
  //$aux=$datos_asesor[0]['nombre_asesor'];

 // var_dump($datos_participa);
  //var_dump($datos_asesor);
  //var_dump($datos_proyecto);
    
  
    $fecha = "A los ".date("d")." días del mes de ".date("m")." de ".date("Y");
 ?>

    <body>
       <div id="contenedor">
           <div id="cabecera"> 
           <!--<h6>codigo</h6>-->
           <img src=<?php echo base_url()."application/views/proyecto/images/ucab.jpg";?> alt="ucab" max-height="240" max-width="300"/>
           </div>
           
            <div id="contenido" >
              <h3>CONSTANCIA DE INSCRIPCIÓN <br>PROYECTO SERVICIO COMUNITARIO</h3>
              <div id="encabezado"><p>En Ciudad Guayana, <?php echo $fecha ?></div> 
              <p>Proyecto de Servicio Comunitario<br>del Estudiante de Educación Superior<br>Período  Académico: ___________</p> 
            </div>
            <h4>1. DATOS DEL ESTUDIANTE</h4>
            <p>Apellidos y Nombres:<?=$datos_prestador['nombre_prestador']."  ".$datos_prestador['apellido_prestador'];?><br>
            Cédula de Identidad:<?=$datos_prestador['ci_prestador']?>  Exp:<?=$datos_prestador['no_exp_prestador']?>  Año/Semestre:<?=$datos_prestador['semestre_prestador']?><br>
            Carrera:<?=$datos_prestador['escuela_prestador']?>  Mención:<?=$datos_prestador['mencion_prestador']?><br>
            Dirección de Habitacion:<?=$datos_prestador['direccion_prestador']?><br>
            Teléfono de Habitación:<?=$datos_prestador['telefono_prestador']?>Teléfono Celular:<?=$datos_prestador['celular_prestador']?><br>
            Correo Electrónico:<?=$datos_prestador['email_prestador']?></p>
            
            <h4>2. DATOS DEL PROYECTO</h4>
            <p>Nombre del Proyecto:<?=$datos_proyecto[0]['nombre_proyecto']?><br>
            Institución receptora del Servicio:<?=$datos_localidad[0]['nombre_institucion']?><br>
            Dirección:<?=$datos_localidad[0]['direccion_localidad']?><br>
            Teléfonos:<?=$datos_localidad[0]['telefono_representante_localidad']?> Correo Electrónico:<?=$datos_localidad[0]['email_representante_localidad']?><br>
            Representante de la Institución receptora del Servicio:<?=$datos_asesor[0]['nombre_asesor'].'  '.$datos_asesor[0]['apellido_asesor']?><br>
            Teléfono de Oficina:<?=$datos_asesor[0]['telefono_asesor']?>   Teléfono Celular:<?=$datos_asesor[0]['celular_asesor']?><br>
            Lugar de Prestación del Servicio: <?=$datos_localidad[0]['nombre_localidad']?><br>
            Fecha de inicio: <?=$datos_participa[0]['fecha_ini_proyecto']?>
            </p>
            <p>Horario de prestación Servicio:<br>
            <table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="5"
            border="1"><tr><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td><td>Sabado</td><td>Domingo</td></tr><tr><td><?=$datos_participa[0]['lunes']?></td><td><?=$datos_participa[0]['martes']?></td><td><?=$datos_participa[0]['miercoles']?></td><td><?=$datos_participa[0]['jueves']?></td><td><?=$datos_participa[0]['viernes']?></td><td><?=$datos_participa[0]['sabado']?></td><td><?=$datos_participa[0]['domingo']?></td></tr></table>
            <br><br><h4>Observaciones:__________________________________________________________________________________</h4>
            <div id="encabezado"><p>__________________________________<br>
            Coordinador(a) de Servicio Comunitario<br>
            del Estudiante de Estudiante Superior<br>
             Escuela de <?=$datos_prestador['escuela_prestador']?>
            </p></div>
            <p>_____________________<br>Estudiante<br>C.I: <?=$datos_prestador['ci_prestador']?></p>
            
           </u></p>
    </body>
</html>
