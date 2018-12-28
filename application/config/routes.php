<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'IndexController';
$route['404_override'] = 'ErrorController';
$route['translate_uri_dashes'] = FALSE;

$route['people'] = 'PeopleController';
$route['people/page/([0-9]+)'] = 'PeopleController/pagination/$1';
$route['people/detail/([0-9]+)'] = 'PeopleController/detail/$1';

$route['planet'] = 'PlanetController';
$route['planet/page/([0-9]+)'] = 'PlanetController/pagination/$1';
$route['planet/detail/([0-9]+)'] = 'PlanetController/detail/$1';

$route['film'] = 'FilmController';
$route['film/page/([0-9]+)'] = 'FilmController/pagination/$1';
$route['film/detail/([0-9]+)'] = 'FilmController/detail/$1';

$route['species'] = 'SpeciesController';
$route['species/page/([0-9]+)'] = 'SpeciesController/pagination/$1';
$route['species/detail/([0-9]+)'] = 'SpeciesController/detail/$1';

$route['vehicle'] = 'VehicleController';
$route['vehicle/page/([0-9]+)'] = 'VehicleController/pagination/$1';
$route['vehicle/detail/([0-9]+)'] = 'VehicleController/detail/$1';

$route['starship'] = 'StarshipsController';
$route['starship/page/([0-9]+)'] = 'StarshipsController/pagination/$1';
$route['starship/detail/([0-9]+)'] = 'StarshipsController/detail/$1';
