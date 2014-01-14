<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
    </head>
    
<?php

    $datos_p = get_object_vars($datos);

    $fecha = "a los ".date("d")." días del mes de ".date("m")." de ".date("Y");
 ?>

    <body>
       <div id="contenedor">
           <div id="cabecera"> 
           <h6>codigo</h6>
           <img src=<?php echo base_url()."application/views/proyecto/images/ucab.jpg";?> alt="ucab" height="90" width="180"/>
           </div>
           
       <div id="contenido">
           <h2>CONSTANCIA DE CULMINACION DEL SERVICIO COMUNITARIO DEL ESTUDIANTE DE EDUCACION SUPERIOR</h2>

           <p>Quien suscribe, hacen constar que el/la bachiller <u> <?=$datos_p['nombre_prestador']." ".$datos_p['apellido_prestador'];?> 

            </u>expediente Nº <u> <?php echo $datos_p['no_exp_prestador']?> </u> titular de la 
            Cédula de Identidad Nº<u> <?=$datos_p['ci_prestador']?></u> 
            estudiante de la Escuela de <u> <?=$datos_p['escuela_prestador']?> </u>, 
            ha cumplido satisfactoriamente con las 120 horas de servicio, 
            así como con los objetivos y actividades previstos en el Plan de trabajo del proyecto ___________________________________________________. con el cual finalizó su Servicio Comunitario.</p>
          <p>Igualmente se hace constar que sus actuaciones han sido acordes a lo establecido en la Ley del Servicio Comunitario del 
            Estudiante de Eduacion Superior publicada en Gaceta Oficial Nº 38.272 del 14 de septiembre de 2005 y en el Reglamento del Servicio Comunitario del Estudiante de Educacion Superior, aprobado por el Consejo Universitario de la Universidad Católica Andres Bello.</p>
           <p>En Ciudad Guayana, <?php echo $fecha ?></p>
       </div>
       <div id="pie">
           
           <p>__________________________________ Coordinador(a) de Servicio Comunitario del Estudiante de Educacion Superior</p>
           <p id="final">Escuela de ____________________</p>
       </div>
       </div>
    </body>
</html>