<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['rup'] = 'Welcome/rutas/rup';
// $route['sreuse'] = 'Welcome/rutas/sreuse';
// $route['kanbaninfo'] = 'Welcome/rutas/kanbaninfo';
// $route['calc_kanban'] = 'Welcome/rutas/calc_kanban';
// $route['uml_info'] = 'Welcome/rutas/uml_info';
// $route['omg_info'] = 'Welcome/rutas/omg_info';
// $route['xml_info'] = 'Welcome/rutas/xml_info';

$route['(:any)'] = 'Welcome/rutas/$1';
