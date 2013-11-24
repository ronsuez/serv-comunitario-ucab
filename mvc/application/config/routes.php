<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

/*gestion de usuarios*/
$route['login'] = 'usuario/login_attempt';
$route['logout'] = 'usuario/log_out';
$route['dashboard'] = 'welcome/dashboard';
$route['registro_form'] = 'welcome/registro';
$route['registro_user'] = 'usuario/insertar_usuario';
$route['completar_datos'] = 'usuario/completar_datos';
$route['completar_datos_usuario'] = 'usuario/completar_datos_usuario';

/* routing for proyecto controller__*/
$route['gest-proyecto']="proyecto/index";
$route['insertar_proyecto']="proyecto/inscribir";
$route['consultar_proyecto']="proyecto/modificar";

$route['registrar_proyecto']="proyecto/registrar";
$route['buscar_proyecto']="proyecto/buscar";
$route['listar_datos_proyecto']="proyecto/ver_proyectos";
$route['generar_reporte_proyecto']="proyecto/generar_reporte";

/* routing for prestadores controller */
$route['gest-prestador']="prestador/index";
$route['insertar_prestador']="prestador/insertar";
$route['consultar_prestador']="prestador/consultar";
$route['asignar_proyecto']="prestador/asignar_pro";
$route['hola']="prestador/hola";
$route['consultar_datos_prestador']="prestador/ver_datos_personales";
$route['insertar_datos_prestador']="prestador/insertar_datos_prestador";
$route['listar_p_x_proy']="prestador/listar_x_proyecto";
/* routing for localidades controller */
$route['gest-localidad']="localidad/index";
$route['listar_loc']="localidad/listar";
$route['insertar_localidad']="localidad/insertar";

$route['ver_reporte'] = 'reportes/index';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
