<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    </head>
    
<?php

  $datos_prestador = get_object_vars($datos);

  //$aux=$datos_asesor[0]['nombre_asesor'];


    
  
    $fecha = "A los ".date("d")." días del mes de ".date("m")." de ".date("Y");
 ?>

    <body>
       <div id="contenedor">
           <div id="cabecera"> 
           <!--<h6>codigo</h6>-->
           <img src=<?php echo base_url()."application/views/proyecto/images/ucab.jpg";?> alt="ucab" max-height="240" max-width="300"/>
           </div>
            
            </div>
            <h4>Sres:</h4>
            <p>Me dirijo a Ustedes en la oportunidad de informarle que los bachilleres <?=$datos_prestador['nombre_prestador']."  ".$datos_prestador['apellido_prestador'];?>; estudiante de <?=$datos_prestador['escuela_prestador']?>,fueron asignados por esta Coordinación como Prestadores del Servicio Comunitario del Estudiante de Educación Superior, a <?=$datos_localidad[0]['nombre_institucion']?> ubicada en <?=$datos_localidad[0]['direccion_localidad']?>, de conformidad con la Ley de Servicio Comunitario del Estudiante de Educación Superior y el Reglamento respectivo, y de acuerdo a lo establecido en el Convenio Marco firmado entre <?=$datos_asesor[0]['nombre_asesor'].'  '.$datos_asesor[0]['apellido_asesor']?> y UCAB Guayana.
           <br><br><br><br><br><br>
            <div><p>__________________________________<br>
            Coordinador(a) de Servicio Comunitario<br>
            del Estudiante de Estudiante Superior<br>
             Escuela de <?=$datos_prestador['escuela_prestador']?>
            </p></div>

    </div>
    </body>
</html>
