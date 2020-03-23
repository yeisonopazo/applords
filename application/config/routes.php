<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["addc"] = "welcome/agregar";

$route["addCace"] = "AdminController/insertarCaceria";
$route["addCast"] = "AdminController/insertarCastillo";

$route["getCast"] = "AdminController/getCastillos";
$route["getCast2"] = "AdminController/getCastillos2";

$route["getCac2"] = "AdminController/getCacerias2";
$route["getCac"] = "AdminController/getCacerias";

$route["getFDG"] = "AdminController/getFDG2";


