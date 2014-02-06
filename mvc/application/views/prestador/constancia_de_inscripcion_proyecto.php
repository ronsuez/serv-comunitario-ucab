<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
  <META NAME="GENERATOR" CONTENT="LibreOffice 4.0.5.2 (Linux)">
  <META NAME="AUTHOR" CONTENT="lvera">
  <META NAME="CREATED" CONTENT="20111107;20510000">
  <META NAME="CHANGEDBY" CONTENT="uiso">
  <META NAME="CHANGED" CONTENT="20111123;22570000">
  <STYLE TYPE="text/css">
  
  </STYLE>
</HEAD>
<?php

  $datos_prestador = get_object_vars($datos);
  
    $fecha = "A los ".date("d")." días del mes de ".date("m")." de ".date("Y");
 ?>

<BODY LANG="en-US" TEXT="#000000" DIR="LTR">
<DIV TYPE=HEADER>
  <P LANG="en-US" ALIGN=LEFT STYLE="margin-bottom: 0.35in; line-height: 100%">
  <IMG SRC="<?php echo base_url()."logo_ucab.jpg";?>" NAME="H COLOR LARGO SIN RIF" ALIGN=LEFT HSPACE=12 WIDTH=265 HEIGHT=48 BORDER=0><SPAN ID="Frame1" DIR="LTR" STYLE="float: left; width: 0.95in; height: 0.24in; border: none; padding: 0in; background: #ffffff">
  </SPAN>
  <SPAN ID="Frame2" DIR="LTR" STYLE="float: left; width: 4.23in; height: 0.79in; border: none; padding: 0in; background: #ffffff">
    <P LANG="es-ES" CLASS="western" ALIGN=CENTER STYLE="line-height: 100%">
    <FONT FACE="Arial, sans-serif"><B>CONSTANCIA DE INSCRIPCIÓN PROYECTO SERVICIO COMUNITARIO</B></FONT></P>
  </SPAN>
  </P>
</DIV>

<P LANG="es-ES" CLASS="western" ALIGN=RIGHT STYLE="line-height: 100%">
<FONT FACE="Arial, sans-serif"><FONT SIZE=2>Ciudad Guayana,<?php echo $fecha; ?></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=RIGHT STYLE="line-height: 100%">
               
</P>
<P LANG="es-ES" ALIGN=CENTER STYLE="line-height: 100% ; text-align:center;"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Proyecto de Servicio Comunitario del Estudiante de Educación Superior</FONT></FONT></P>
</P>
<H4 LANG="es-VE" CLASS="western" ALIGN=CENTER STYLE="font-weight: normal">
<FONT FACE="Arial, sans-serif">Período  Académico: ___________</FONT></H4>
</P>

<OL>
  <LI><P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%">
  <FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>DATOS  DEL ESTUDIANTE</B></FONT></FONT></P>
</OL>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Apellidos
y Nombres:<u><?php echo $datos_prestador["apellido_prestador"]." ".$datos_prestador["nombre_prestador"]?></u></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Cédula
de Identidad:<u><?php echo $datos_prestador["ci_prestador"]?></u> Exp:<u><?php echo $datos_prestador["no_exp_prestador"]?></u>    Año/Semestre:<?php echo $datos_prestador["semestre_prestador"]?></u></FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Carrera:<u> <?php echo $datos_prestador["escuela_prestador"]?></u> Mención:</FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Dirección de Habitación:<u><?php echo $datos_prestador["direccion_prestador"]?></u> </FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Teléfono
de Habitación:<u><?php echo $datos_prestador["telefono_prestador"]?></u> Teléfono Celular:<u> <?php echo $datos_prestador["celular_prestador"]?></u></FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Correo Electrónico:<u><?php echo $datos_prestador["email_prestador"]?></u> </FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><BR>
</P>


<OL START=2>
  <LI><H6 LANG="es-VE" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%; text-decoration: none">
  <FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>DATOS  DEL PROYECTO</B></FONT></FONT></H6>
</OL>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Nombre
del Proyecto:________________________________________ ___________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Institución
receptora del Servicio: _________________________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Dirección:____________________________________________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>_____________________________________________________________________</FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Teléfonos:___________
Correo Electrónico:_________________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Representante
de la Institución</FONT></FONT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>
receptora del Servicio</FONT></FONT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>:
_________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Teléfono
de Oficina: _______________  Teléfono Celular:_________________ ____</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Lugar
de Prestación del Servicio:
_________________________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Fecha
de inicio: ______ Número de Horas semanales de Prestación del
Servicio: _____</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Horario
de prestación del Servicio:</FONT></FONT></P>
<TABLE WIDTH=656 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=79>
  <COL WIDTH=80>
  <COL WIDTH=80>
  <COL WIDTH=80>
  <COL WIDTH=80>
  <COL WIDTH=80>
  <COL WIDTH=79>
  <TR VALIGN=TOP>
    <TD WIDTH=79 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Lunes</FONT></FONT></P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Martes</FONT></FONT></P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Miércoles</FONT></FONT></P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Jueves</FONT></FONT></P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Viernes</FONT></FONT></P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Sábado</FONT></FONT></P>
    </TD>
    <TD WIDTH=79 STYLE="border: 1px solid #000000; padding: 0in 0.08in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Domingo</FONT></FONT></P>
    </TD>
  </TR>
  <TR VALIGN=TOP>
    <TD WIDTH=79 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=80 STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
    <TD WIDTH=79 STYLE="border: 1px solid #000000; padding: 0in 0.08in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
    </TD>
  </TR>
</TABLE>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><BR>
</P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 150%"><FONT FACE="Times New Roman, serif"><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Observaciones:</B></FONT></FONT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>
_________________________________________________________</FONT></FONT></FONT></P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 100%"><BR>
</P>
<TABLE WIDTH=581 CELLPADDING=7 CELLSPACING=0>
  <COL WIDTH=283>
  <COL WIDTH=270>
  <TR VALIGN=BOTTOM>
    <TD WIDTH=283 STYLE="border: none; padding: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Estudiante</FONT></FONT></P>
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>C.I.:__________________</FONT></FONT></P>
    </TD>
    <TD WIDTH=270 STYLE="border: none; padding: 0in">
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>__________________________________</FONT></FONT></P>
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Coordinador(a)
      de Servicio Comunitario</FONT></FONT></P>
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>del
      Estudiante de Estudiante Superior</FONT></FONT></P>
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><BR>
      </P>
      <P LANG="es-ES" CLASS="western" ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Escuela
      de ____________</FONT></FONT></P>
    </TD>
  </TR>
</TABLE>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 100%"><BR>
</P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 100%"><BR>
</P>
<P LANG="es-ES" CLASS="western" ALIGN=LEFT STYLE="line-height: 100%"><BR>
</P>
</BODY>
</HTML>
</html>
