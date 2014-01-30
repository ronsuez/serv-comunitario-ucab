<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
    <link href="<?php echo base_url() ; ?>application/views/css/carta_culminacion.css" rel="stylesheet">
  
    </head>

    <?php

    $datos_p = get_object_vars($datos);
    $datos_Co = get_object_vars($nombre);
    $datos_comunidad = $info_comunidad; 
    $dato_asesor = $nombre_asesor;


    
    //print_r($nombre);

    $fecha = "A los ".date("d")." días del mes de ".date("m")." de ".date("Y");
 ?>
    
    <body>
       <div id="contenedor">
           <div id="cabecera"> 
           <center>
           <img src=<?php echo base_url()."application/views/proyecto/images/ucab.jpg";?> alt="ucab" height="60px" width="330" />
           </center>
           </div>
           
       <div id="contenido">
           <h2>NOTIFICACION DE CULMINACION DEL SERVICIO COMUNITARIO</h2>
           
            <p id="fecha"><?php echo $fecha ?></p>
            <p>Sres. <u><? echo $datos_comunidad[0]['nombre_localidad']?></u></p>
            <p>Atn. <u><? echo $dato_asesor[0]['nombre_asesor']?></u></p>
            <br>
            <p>Reciba un cordial saludo en la oportunidad de notificarle la culminación del Proyecto de la Ley de Servicio Comunitario del Estudiante de Educacion Superior titulado <u> <?=$nombre_pro[0]['nombre_proyecto']?></u>, por parte de los estudiantes  de la carrera de <u> <?=$datos_p['escuela_prestador']?> </u></p>
            <p>Agradecemos ampliamente toda la colaboración y atención dispensada a nuestros estudiantes durante el período de ejecución de dicho proyecto, lo cual permitió un acercamiento con la institución y la comunidad, así como la oportunidad de aplicar los conocimientos adquiridos durante la carrera, al servicio de los demás.</p>
            <p>Adjunto a la presente, resultantes del proyecto ejecutado.</p>
            <p>Quedamos a sus ordenes,atentamente.</p>
       </div>
       <div id="pie">
           
           <p><u> <?=$datos_Co['nombre_coord']?>  <?=$datos_Co['apellido_coord']?></u></p>
           <p>Coordinador(a) de Servicio Comunitario del Estudiante de Educacion Superior</p>
           <p id="final">Escuela de <u> <?=$datos_p['escuela_prestador']?> </u></p>
       </div>
       </div>
    </body>
</html>
