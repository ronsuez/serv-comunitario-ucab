<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    </head>
    
<?php

  $datos_prestador = get_object_vars($datos);
  //$localidad= get_object_vars($datos_localidad);
 // var_dump($datos_participa);
//  $aux=$datos_asesor[0]['nombre_asesor'];

  //var_dump($suma_horas);
  //var_dump($datos_prestador);
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
            <!--Cédula de Identidad Nº<u> <?//=$datos_p['ci_prestador']?></u> 
            estudiante de la Escuela de <u> <?//=$datos_p['escuela_prestador']?> </u>, 
          pene.</p>
          <p>Igualmente se hace constar que sus actuaciones han sido acordes a lo establecido en la Ley del Servicio Comunitario del 
            Estudiante de Eduacion Superior publicada en Gaceta Oficial Nº 38.272 del 14 de septiembre de 2005 y en el Reglamento del 
            Servicio Comunitario del Estudiante de Educacion Superior, aprobado por el Consejo Universitario de la Universidad 
            Católica Andres Bello.</p>-->
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
            Fecha de inicio: <?=$datos_participa[0]['fecha_ini_proyecto']?> Número de Horas semanales de Prestación del Servicio: <?=$suma_horas[0]['sum1']?>
            </p>
            <p>Horario de prestación Servicio:<br>
            Lunes  Martes   Miércoles   Jueves   Viernes    Sábado    Domingo<br></p>
            <p><?=$datos_participa[0]['lunes'].'  '.$datos_participa[0]['martes'].'  '.$datos_participa[0]['miercoles'].'  '.$datos_participa[0]['jueves'].'  '.$datos_participa[0]['viernes'].'  '.$datos_participa[0]['sabado'].'  '.$datos_participa[0]['domingo']?></p>
            <h4>Observaciones:__________________________________________________________________________________<br>
            ____________________________________________________________________________________________________</h4>
            <div id="encabezado"><p>__________________________________<br>
            Coordinador(a) de Servicio Comunitario<br>
            del Estudiante de Estudiante Superior<br>
             Escuela de <?=$datos_prestador['escuela_prestador']?>
            </p></div>
            <p>Estudiante<br>C.I: <?=$datos_prestador['ci_prestador']?></p>
            
           </u></p>
    
    </body>
</html>
